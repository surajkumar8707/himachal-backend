<?php

namespace App\Http\Controllers\SuperAdmin;

use PDF;
use DataTables;
use App\Models\Plot;
use App\Models\Booking;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function index(){

        // count total plots
        $plots = Plot::count();
        $bookings = Booking::count();

        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->count();

        $executives = User::whereHas('roles', function ($query) {
            $query->where('name', 'executive');
        })->count();


        // dd($plots,$admins);
        return view("super_admin.dashboard", compact('plots','admins', 'bookings', 'executives'));
    }

    public function generateChart($period)
    {
        $data = [];

        switch ($period) {
            case 'daily':
                $data = Booking::select(DB::raw('DATE(created_at) as period'), DB::raw('COUNT(*) as count'), DB::raw('SUM(total_amount) as total_amount'))
                    ->groupBy('period')
                    ->get();
                break;

            case 'weekly':
                $data = Booking::select(DB::raw('WEEK(created_at) as period'), DB::raw('COUNT(*) as count'), DB::raw('SUM(total_amount) as total_amount'))
                    ->groupBy('period')
                    ->get();
                break;

            case 'monthly':
                $data = Booking::select(DB::raw('MONTH(created_at) as period'), DB::raw('COUNT(*) as count'), DB::raw('SUM(total_amount) as total_amount'))
                    ->groupBy('period')
                    ->get();
                break;

            case 'yearly':
                $data = Booking::select(DB::raw('YEAR(created_at) as period'), DB::raw('COUNT(*) as count'), DB::raw('SUM(total_amount) as total_amount'))
                    ->groupBy('period')
                    ->get();
                break;
        }

        return response()->json($data);
    }

    public function changePassword(){
        return view('super_admin.change_password');
    }

    // public function updatePassword(Request $equest){
    //     dd($equest->all());
    // }

    public  function updatePassword(Request $request){
        // dd($request->all(), auth()->user());

        $request->validate([
            'current_password' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',              // Minimum length
                'confirmed',          // Must match the 'new_password_confirmation' field
            ],
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        $user->update(['password' => bcrypt($request->new_password)]);

        return redirect()->route('super-admin.dashboard')->with('success', 'Password changed successfully.');
        // return view('admins.dashboard');
    }

    public function executiveUsers(Request $request){
        if ($request->ajax()) {
            // $data = Plot::select('*')->orderBy('id', 'DESC');
            $adminUsers = User::whereHas('roles', function ($query) {
                $query->where('name', 'executive');
            })->select('*')->orderBy('id', 'DESC');
            // dd($data->get());
            $counter = 1; // Add this line to initialize the counter

            $formattedData = [];

            foreach ($adminUsers->get() as $row) {
                $formattedData[] = [
                    'sno' => $counter++,
                    'id' => $row->id,
                    'name' => $row->name,
                    'email' => $row->email,
                    'is_active' => $row->is_active,
                    // Add other columns as needed
                ];
            }
            // dd($data, $formattedData);

            return Datatables::of($formattedData)
                    ->addIndexColumn()
                    ->addColumn('is_active', function ($row) {
                        if($row['is_active'] == 1){
                            $is_active = '<label class="switch"><input type="checkbox" class="active-inactive-user" data-user_id="'. $row['id'] .'" value="1" checked><span class="slider round"></span></label>';
                        }
                        else{
                            $is_active = '<label class="switch"><input type="checkbox" class="active-inactive-user" data-user_id="'. $row['id'] .'" value="0"><span class="slider round"></span></label>';
                        }

                        return $is_active;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a title="Edit" href="'. route('super-admin.executive.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <form action="'. route('super-admin.executive.destroy', $row['id']) .'" method="POST" style="display:inline">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                                    <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                                    <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                                </form>';

                        return $btn;
                    })
                    ->rawColumns(['is_active', 'action'])
                    ->make(true);
        }

        return view('super_admin.executive_users.index');
    }

    public function executiveCreate(){
        $allAdmin = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->select('*')->orderBy('id', 'DESC')->get();
        // dd($allAdmin);
        return view('super_admin.executive_users.create', compact('allAdmin'));
    }

    public function executiveStore(Request $request){
        // dd($request->all());
        $request->validate([
            'admin' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create a new admin user
        $User = new User([
            'super_admin' => auth()->user()->id,
            'admin' => $request->input('admin'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $result = $User->save();

        // Attach the 'admin' role to the user
        $User->roles()->attach(Role::where('name', 'executive')->first());

        if($result){
            return redirect()->route('super-admin.executive.users')->with('success', 'Executive created successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong, Please try again.');
        }
    }

    public function executiveEdit($id){
       $user = User::findOrFail($id);
       $allAdmin = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->select('*')->orderBy('id', 'DESC')->get();

        return view('super_admin.executive_users.edit', compact('user', 'allAdmin'));
    }

    public function executiveUpdate(Request $request){
        // dd($request->all());
        $User = User::findOrFail($request->id);

        $this->validate($request, [
            'admin' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
        ]);

        $result = $User->update([
            'admin' => $request->input('admin'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Update other fields as needed
        ]);
        if($result){
            return redirect()->route('super-admin.executive.users')->with('success', 'Executive updated successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong, Please try again.');
        }
    }

    public function executiveDestroy($id){
        try{
            $user = User::findOrFail($id);
            // dd($id, $user);
            $user->delete();
            return redirect()->route('super-admin.executive.users')->with('success', 'Executive deleted successfully!');
        }
        catch(\Exception $e){
            dd($e->getMessage());
            return redirect()->route('super-admin.executive.users')->with('error', 'Something went wrong, Please try again.');
        }
    }

    public function changeStatus(Request $request)
    {
        // dd($request->all(), $request->status, gettype($request->status));
        if ($request->user_id && $request->status !== null) {
            $user = User::findOrFail($request->user_id);

            $result = $user->update([
                'is_active' => ($request->status == '1') ? false : true,
            ]);

            if ($result) {
                return response()->json([
                    'status' => true,
                    'message' => 'Status updated successfully.',
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Something went wrong, Please try again.',
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Invalid parameters. Please provide user_id and status.',
            ]);
        }
    }


    public function generatedBills(Request $request){

        if ($request->ajax()) {
            // $data = Plot::select('*')->orderBy('id', 'DESC');
            $bookings = Booking::with(['plot', 'executive', 'superAdmin', 'admins'])->orderBy('created_at', 'DESC')->get();
            // dd($bookings->toArray());
            $counter = 1; // Add this line to initialize the counter

            $formattedData = [];

            foreach ($bookings as $booking) {
                // dd($booking->admin);
                $formattedData[] = [
                    'sno' => $counter++,
                    'id' => $booking->id,
                    'plot' => $booking->plot->plot_number,
                    'admin' => $booking->admins->name,
                    'executive' => $booking->executive->name,
                    'cus_name' => $booking->cus_name,
                    'email' => $booking->email,
                    'cus_father' => $booking->cus_father,
                    'cus_mother' => $booking->cus_mother,
                    'cus_husband' => $booking->cus_husband,
                    'address' => $booking->address,
                    'aadhar' => $booking->aadhar,
                    'pan' => $booking->pan,
                    'contact1' => $booking->contact1,
                    'contact2' => $booking->contact2,
                    'age' => $booking->age,
                    'advance_amount' => $booking->advance_amount,
                    'total_amount' => $booking->total_amount,
                    'is_bill_generated' => $booking->is_bill_generated,
                    // Add other columns as needed
                ];
            }
            // dd($data, $formattedData);

            return Datatables::of($formattedData)
                    ->addIndexColumn()
                    ->addColumn('bill_generated', function ($row) {
                        if($row['is_bill_generated'] == '1'){
                            $btn = '<a href="'. route('super-admin.bill.export.to.pdf', $row['id']) .'">Download</a>';
                        }
                        else{
                            $btn = '<a href="'. route('super-admin.bill.export.to.pdf', $row['id']) .'">Export PDF</a>';
                        }
                        // $btn = '<a title="Edit" href="'. route('super-admin.executive.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                        //         <form action="'. route('super-admin.executive.destroy', $row['id']) .'" method="POST" style="display:inline">
                        //             <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                        //             <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                        //             <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                        //         </form>';

                        return $btn;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a title="Edit" href="'. route('super-admin.executive.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <form action="'. route('super-admin.executive.destroy', $row['id']) .'" method="POST" style="display:inline">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                                    <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                                    <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                                </form>';

                        return $btn;
                    })
                    ->rawColumns(['bill_generated', 'action'])
                    ->make(true);
        }

        return view('super_admin.bookings.index');
    }

    public function exportToPDF($id)
    {
        $booking = Booking::find($id);
        // dd($booking);
        // Update is_bill_generated to 1 before generating the bill
        $booking->update(['is_bill_generated' => '1']);

        // getting data with relation
        $booking = Booking::with('plot')->find($booking->id);

        // Generate the PDF
        $pdf = PDF::loadView('admins.bills.pdf', compact('booking'));

        // Download the PDF
        return $pdf->download('booking_details.pdf');
    }

}
