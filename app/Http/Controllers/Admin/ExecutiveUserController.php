<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Plot;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ExecutiveUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = Plot::select('*')->orderBy('id', 'DESC');
            $adminUsers = User::whereHas('roles', function ($query) {
                $query->where('name', 'executive');
            })->where('admin', auth()->user()->id)->select('*')->orderBy('id', 'DESC');
            // dd(auth()->user(), $adminUsers->get());
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
                        $btn = '<a title="Show" href="'.route('admin.executive-users.show', $row['id']) .'" class="btn text-info"><i class="fa fa-eye"></i></a>
                                <a title="Edit" href="'. route('admin.executive-users.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <form action="'. route('admin.executive-users.destroy', $row['id']) .'" method="POST" style="display:inline">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                                    <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                                    <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                                </form>';

                        return $btn;
                    })
                    ->rawColumns(['action', 'is_active'])
                    ->make(true);
        }

        return view('admins.executives.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.executives.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Create a new admin user
        $adminUser = new User([
            'super_admin' => auth()->user()->super_admin,
            'admin' => auth()->user()->id,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $result = $adminUser->save();

        // Attach the 'admin' role to the user
        $adminUser->roles()->attach(Role::where('name', 'executive')->first());

        if($result){
            return redirect()->route('admin.executive-users.index')->with('success', 'Executive user created successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong, Please try again.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::findOrFail($id);
        return view('admins.executives.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        return view('admins.executives.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $adminUser = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $result = $adminUser->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Update other fields as needed
        ]);
        if($result){
            return redirect()->route('admin.executive-users.index')->with('success', 'Executive Users updated successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong, Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.executive-users.index')->with('success', 'Executive Users deleted successfully!');
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
}
