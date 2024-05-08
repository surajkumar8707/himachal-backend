<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\User;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\SocialMediaLink;
use App\Models\PefectTourPackages;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Admin Dashboard
     * Route Name : admin/dashboard
     * Route : admin.dashboard
     * Method : GET
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('super_admin.dashboard');
    }

    /**
     * Admin Change Password
     * Route Name : admin/dashboard
     * Route : admin.dashboard
     * Method : GET
     * @return \Illuminate\View\View
     */
    public  function changePassword(Request $request)
    {
        return view('super_admin.change_password');
    }

    public  function updatePassword(Request $request)
    {
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
        // return view('super_admin.dashboard');
    }

    /**
     * Admin Show Profile
     * Route Name : admin/profile
     * Route : admin.show.profile
     * Method : GET
     * @return \Illuminate\View\View
     */
    public  function showProfile(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('super_admin.profile.show', compact('user'));
    }

    /**
     * Admin Edit Prfile
     * Route Name : admin/profile/edit
     * Route : admin.edit.profile
     * Method : GET
     * @return \Illuminate\View\View
     */
    public  function editProfile(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('super_admin.profile.edit', compact('user'));
    }

    /**
     * Admin Edit Prfile
     * Route Name : admin/profile-update
     * Route : admin.update.profile
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public  function updateProfile(Request $request)
    {
        // return view('super_admin.dashboard');
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
            $imageName = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('assets/admins/profiles'), $imageName);
            // $file = $request->file('photo');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            // $file->storeAs('public/assets/admins/profiles', $fileName);
            $data['photo'] = 'assets/admins/profiles/' . $imageName;
        }

        $user->update($data);

        return redirect()->route('admin.show.profile')->with('success', 'Profile updated successfully.');
    }

    /**
     * Admin Social Media show
     * Route Name : contacts
     * Route : admin.contacts
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function showContacts()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('super_admin.contacts', compact('contacts'));
    }

    /**
     * Admin Social Media show
     * Route Name : admin/social-media/show
     * Route : admin.social.media.show
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function socialMediaShow()
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('super_admin.social_media.show', compact('socialMediaLinks'));
    }

    /**
     * Admin Social Media create
     * Route Name : admin/social-media/create
     * Route : admin.social.media.create
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function socialMediaCreate()
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('super_admin.social_media.create', compact('socialMediaLinks'));
    }

    /**
     * Admin Social Media storeOrUpdate
     * Route Name : admin/social-media/storeOrUpdate
     * Route : admin.social.media.storeOrUpdate
     * Method : POST
     * @return \Illuminate\View\View
     */
    public function socialMediaStoreOrUpdate(Request $request)
    {
        $request->validate([
            'youTube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'at_least_one' => 'required_without_all:youTube,instagram,facebook,linkedin',
        ], [
            'at_least_one' => 'At least one of YouTube, Instagram, Facebook, or LinkedIn is required.',
        ]);
        $socialMediaLinks = SocialMediaLink::firstOrNew();

        // Update or add new links
        $socialMediaLinks->youTube = $request->input('youTube');
        $socialMediaLinks->instagram = $request->input('instagram');
        $socialMediaLinks->facebook = $request->input('facebook');
        $socialMediaLinks->linkedin = $request->input('linkedin');
        $socialMediaLinks->save();

        return redirect()->route('admin.social.media.show')->with(['message' => 'Social media links updated/added successfully']);
    }

    public function appSetting()
    {
        $settings = Setting::first();
        // dd($settings);
        return view('super_admin.setting', compact('settings'));
    }

    public function appSettingUpdate(Request $request)
    {
        $request->validate([
            'app_name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'contact' => 'required',
            // 'header_image' => 'nullable|url',
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        // Find an existing record or create a new one
        $settings = Setting::firstOrNew();

        // Update or add new settings
        $settings->app_name = $request->input('app_name');
        $settings->email = $request->input('email');
        $settings->whatsapp = $request->input('whatsapp');
        $settings->contact = $request->input('contact');

        // Handle image upload
        if ($request->hasFile('header_image')) {
            $customFileName = 'custom_image_name_' . time() . '_' . rand(100, 999) . '.' . $request->file('header_image')->getClientOriginalExtension();
            $request->file('header_image')->move(public_path('assets/images'), $customFileName);
            $settings->header_image = 'assets/images/' . $customFileName;
        }
        // $settings->header_image = $request->input('header_image');
        $settings->save();

        return redirect()->route('admin.app.setting')->with('success', 'Settings updated/added successfully');
    }

    public function roomTypeList()
    {
        $rooms = RoomType::orderBy('id', 'DESC')->get();
        // dd($rooms->toArray());
        return view('super_admin.rooms.index', compact('rooms'));
    }

    public function roomTypeCreate()
    {
        return view('super_admin.rooms.create');
    }

    public function roomTypeStore(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'season_rate' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048', // max size of 2MB
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = strtolower(str_replace(' ', '_', $validatedData['name'])) . rand(0, 99) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/room_type/'), $imageName);
            $validatedData['image'] = 'assets/images/room_type/' . $imageName;
        }

        if (isset($request->status)) {
            $validatedData['status'] = 1;
        } else {
            $validatedData['status'] = 0;
        }

        $getMaxDisplayOrder = RoomType::max('display_order');
        if (!empty($getMaxDisplayOrder)) {
            $getMaxDisplayOrder++;
            $validatedData['display_order'] = $getMaxDisplayOrder;
        } else {
            $validatedData['display_order'] = 1;
        }

        // dd($request->all(), $validatedData);

        // Create a new RoomType instance with the validated data
        $result = RoomType::create($validatedData);

        if ($result) {
            return redirect()->route('admin.room.type.list')->with('success', 'Room type created successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong, Please try again');
        }
    }

    public function roomTypeEdit($id)
    {
        $room = RoomType::find($id);
        // dd($room->toArray());
        return view('super_admin.rooms.edit', compact('room'));
    }
    public function roomTypeUpdate(Request $request, $id)
    {
        $room = RoomType::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'season_rate' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048', // max size of 2MB
        ]);

        // Update room data
        $room->name = $validatedData['name'];
        $room->season_rate = $validatedData['season_rate'];

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete previous image if it exists
            if ($room->image) {
                // Storage::delete($room->image);
                deletePublicFiles($room->image);
            }

            $image = $request->file('image');
            $imageName = strtolower(str_replace(' ', '_', $validatedData['name'])) . rand(0, 99) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/room_type/'), $imageName);
            $room->image = 'assets/images/room_type/' . $imageName;
        }

        // Update status
        $room->status = $request->has('status') ? 1 : 0;

        // Save the updated room data
        $result = $room->save();

        if ($result) {
            return redirect()->route('admin.room.type.list')->with('success', 'Room type updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong, Please try again');
        }
    }

    public function roomTypeShow($id)
    {
        $room = RoomType::find($id);
        if($room){
            return view('super_admin.rooms.show', compact('room'));
        }
        else{
            return redirect()->back()->with('error', 'Room not found, which you want to delete');
        }
    }

    public function roomTypeDelete($id)
    {
        $room = RoomType::find($id);
        if($room){
            $room_name = $room->name;
            $room->delete();
            return redirect()->back()->with('success', $room_name.' is deleted successfully');
        }
        else{
            return redirect()->back()->with('error', 'Room not found, which you want to delete');
        }
    }

    public function bookings()
    {
        $bookings = \App\Models\Bookings::with(['roomType'])->get();
        // dd($bookings->toArray());
        return view('super_admin.bookings.index', compact('bookings'));
    }

    public function updateStatus(Request $request, $id)
    {
        $roomType = RoomType::findOrFail($id);
        $roomType->status = $request->status;
        $roomType->save();

        return response()->json(['success' => true]);
    }
}
