<?php

namespace App\Http\Controllers\Admin;

use PDF;
use DataTables;
use App\Models\Plot;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class BillsController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {
            $bookings = Booking::where('super_admin', auth()->user()->super_admin)->where('admin', auth()->user()->id)->where('is_bill_generated', '0')->select('*')->orderBy('created_at', 'DESC')->get();

            $counter = 1;
            $formattedData = [];

            foreach ($bookings as $row) {
                $formattedData[] = [
                    'sno' => $counter++,
                    'id' => $row->id,
                    'cus_name' => $row->cus_name,
                    'aadhar' => $row->aadhar,
                    'pan' => $row->pan,
                    'contact1' => $row->contact1,
                    'contact2' => $row->contact2,
                    'email' => $row->email,
                    'age' => $row->age,
                    'created_at' => date('d M Y', strtotime($row->created_at)),
                    // Add other columns as needed
                ];
            }

            return Datatables::of($formattedData)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<a title="Show" href="'.route('admin.bills.show', $row['id']) .'" class="btn text-info"><i class="fa fa-eye"></i></a>
                                <a title="Edit" href="'. route('admin.bills.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <form action="'. route('admin.bills.destroy', $row['id']) .'" method="POST" style="display:inline">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                                    <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                                    <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                                </form>
                                <a href="'. route('admin.bills.export.to.pdf', ['booking' => $row['id']]).'">Export to PDF</a>
                                ';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admins.bills.index');
    }

    public function generatedBills(Request $request){
        if ($request->ajax()) {
            $bookings = Booking::where('super_admin', auth()->user()->super_admin)->where('admin', auth()->user()->id)->where('is_bill_generated', '1')->select('*')->orderBy('created_at', 'DESC')->get();

            $counter = 1;
            $formattedData = [];

            foreach ($bookings as $row) {
                $formattedData[] = [
                    'sno' => $counter++,
                    'id' => $row->id,
                    'cus_name' => $row->cus_name,
                    'aadhar' => $row->aadhar,
                    'pan' => $row->pan,
                    'contact1' => $row->contact1,
                    'contact2' => $row->contact2,
                    'email' => $row->email,
                    'age' => $row->age,
                    'created_at' => date('d M Y', strtotime($row->created_at)),
                    // Add other columns as needed
                ];
            }

            return Datatables::of($formattedData)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<a title="Show" href="'.route('admin.bills.show', $row['id']) .'" class="btn text-info"><i class="fa fa-eye"></i></a>
                                <a title="Edit" href="'. route('admin.bills.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <form action="'. route('admin.bills.destroy', $row['id']) .'" method="POST" style="display:inline">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                                    <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                                    <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                                </form>
                                <a href="'. route('admin.bills.export.to.pdf', ['booking' => $row['id']]).'">Download </a>
                                ';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admins.bills.generated_bill');
    }

    public function exportToPDF(Booking $booking)
    {
        set_time_limit(0);
        // Update is_bill_generated to 1 before generating the bill
        $booking->update(['is_bill_generated' => '1']);

        // getting data with relation
        $booking = Booking::with(['plot', 'executive', 'admins', 'superAdmin'])->find($booking->id);

        // dd($booking);
        // Generate the PDF
        $pdf = PDF::loadView('admins.bills.pdf', compact('booking'));

        // Download the PDF
        return $pdf->download('booking_details.pdf');
    }

    public function create(){
        $plots = Plot::whereDoesntHave('bookings')->get();
        // $users = User::get();
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'executive');
        })->where('admin', auth()->user()->id)->where('is_active', '1')->orderBy('name', 'ASC')->get();

        if(count($users) < 0){
            return redirect()->route('admin.executive-users.create')->with('error', 'Please add atleast one executive before bookings');
        }
        // dd($users);

        return view('admins.bills.create', compact('plots', 'users'));
    }

    public function store(Request $request){

        // dd($request->all());
        $validatedData = $request->validate([
            'user_id' => 'required',
            'cus_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'aadhar' => 'nullable|string|max:255|required_without:pan',
            'pan' => 'nullable|string|max:255|required_without:aadhar',
            'contact1' => 'required|string|max:15',
            'contact2' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'age' => 'required|integer',
            'plot_id' => 'required|exists:plots,id',
            'advance_amount' => 'required',
            'advance_amount' => 'required|numeric|lt:total_amount',
            'total_amount' => 'required|numeric',
        ]);

        $bookingData = [
            'cus_name' => $validatedData['cus_name'],
            'address' => $validatedData['address'],
            'aadhar' => $validatedData['aadhar'],
            'pan' => $validatedData['pan'],
            'contact1' => $validatedData['contact1'],
            'contact2' => $validatedData['contact2'],
            'email' => $validatedData['email'],
            'age' => $validatedData['age'],
            'plot_id' => $validatedData['plot_id'],
            'super_admin' => auth()->user()->super_admin,
            'admin' => auth()->user()->id,
            'user_id' => $validatedData['user_id'],
            'advance_amount' => $validatedData['advance_amount'],
            'total_amount' => $validatedData['total_amount'],
        ];

        $result = Booking::create($bookingData);

        if ($result) {
            return redirect()->route('admin.bills.list')->with('success', 'Booking created successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show(int $id)
    {
        $booking = Booking::findOrFail($id);
        $plots = Plot::get();
        return view('admins.bills.show', compact('booking', 'plots'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $booking = Booking::with(['plot'])->findOrFail($id);
        $plots = Plot::whereDoesntHave('bookings')->get();
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'executive');
        })->where('admin', auth()->user()->id)->where('is_active', '1')->orderBy('name', 'ASC')->get();

        // dd($booking);
        return view('admins.bills.edit', compact('booking', 'plots', 'users'));
    }

    public function update(Request $request)
    {
        $booking = Booking::findOrFail($request->id);
        // dd($booking, $request->all());
        $validatedData = $request->validate([
            'user_id' => 'required',
            'cus_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'aadhar' => 'nullable|string|max:255|required_without:pan',
            'pan' => 'nullable|string|max:255|required_without:aadhar',
            'contact1' => 'required|string|max:15',
            'contact2' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'age' => 'required|integer',
            'plot_id' => 'required|exists:plots,id',
            'advance_amount' => 'required',
            'advance_amount' => 'required|numeric|lt:total_amount',
            'total_amount' => 'required|numeric',
        ]);

        $booking->update($validatedData);

        return redirect()->route('admin.bills.list')->with('success', 'Booking updated successfully!');
    }

    public function destroy(int $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('admin.bills.list')->with('success', 'Booking deleted successfully!');
    }
}
