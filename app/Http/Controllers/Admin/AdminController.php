<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public  function index(Request $request){

        $executive = User::whereHas('roles', function ($query) {
            $query->where('name', 'executive');
        })->where('admin', auth()->user()->id)->select('*')->orderBy('id', 'DESC')->count();

        $total_booking = Booking::where('super_admin', auth()->user()->super_admin)->where('admin', auth()->user()->id)->select('*')->orderBy('created_at', 'DESC')->count();
        $bill_request = Booking::where('super_admin', auth()->user()->super_admin)->where('admin', auth()->user()->id)->where('is_bill_generated', '0')->select('*')->orderBy('created_at', 'DESC')->count();
        $bill_generated = Booking::where('super_admin', auth()->user()->super_admin)->where('admin', auth()->user()->id)->where('is_bill_generated', '1')->select('*')->orderBy('created_at', 'DESC')->count();

        // dd($executive, $total_booking, $bill_request, $bill_generated);

        return view('admins.dashboard', compact('executive', 'total_booking', 'bill_request', 'bill_generated'));
    }


    public  function changePassword(Request $request){
        return view('admins.change_password');
    }

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

        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully.');
        // return view('admins.dashboard');
    }

    public  function showProfile(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        return view('admins.profile.show', compact('user'));
    }

    public  function editProfile(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        return view('admins.profile.edit', compact('user'));
    }

    public  function updateProfile(Request $request){
        // return view('admins.dashboard');
        // dd($request->all());

        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'county' => 'nullable|string',
            'state' => 'nullable|string',
            'city' => 'nullable|string',
            'zipcode' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except(['_token', '_method']);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('assets/admins/profiles'), $imageName);
            // $file = $request->file('photo');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            // $file->storeAs('public/assets/admins/profiles', $fileName);
            $data['photo'] = 'assets/admins/profiles/'.$imageName;
        }

        $user->update($data);

        return redirect()->route('admin.show.profile')->with('success', 'Profile updated successfully.');
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
