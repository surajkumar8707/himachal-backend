<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\PefectTourPackages;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Description of your controller function.
     * @Route : home
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = PefectTourPackages::where('status', 1)->get();
        // dd($packages->toArray());
        return view('home', compact('packages'));
    }

    /**
     * Description of your controller function.
     * @Route : package/{id}
     * @Route_name : package.show
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = PefectTourPackages::find($id);
        return view('package_details', compact('package'));
    }

    /**
     * Description of your controller function.
     * @Route : about
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Description of your controller function.
     * @Route : contact-us
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view('contact');
    }

    /**
     * This functions stores the contact information
     * Route Name : save.contact
     * Route : save-contact
     * Method : POST
     * @return \Illuminate\View\View
     */
    public function saveContact(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($validatedData);

        // Optionally, you can add a success message or redirect to a thank-you page
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Description of your controller function.
     * @Route : jungle-safari
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function jungleSafari()
    {
        return view('jungle_safari');
    }

    /**
     * Description of your controller function.
     * @Route : canter-ride
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function canterRide()
    {
        return view('canter_ride');
    }

    /**
     * Description of your controller function.
     * @Route : resorts
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function resorts()
    {
        return view('resorts');
    }

    /**
     * Description of your controller function.
     * @Route : school-group
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function schoolGroup()
    {
        return view('school_group');
    }

    /**
     * Description of your controller function.
     * @Route : destinationd-wedding
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destinationdWedding()
    {
        return view('destinationd_wedding');
    }

    /**
     * Description of your controller function.
     * @Route : coorporate-group
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function coorporateGroup()
    {
        return view('coorporate_group');
    }

    /**
     * Description of your controller function.
     * @Route : privacy-policy
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    /**
     * Description of your controller function.
     * @Route : term-condition
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function termCondition()
    {
        return view('term_condition');
    }

    /**
     * Description of your controller function.
     * @Route : room-type
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function roomType()
    {
        $rooms = \App\Models\RoomType::where('status', 1)->orderBy('display_order', 'ASC')->get();
        // dd(base64_encode('5'),$rooms->toArray());
        return view('room_type', compact('rooms'));
    }

    /**
     * Description of your controller function.
     * @Route : booking
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $request)
    {
        $id = NULL;
        if ($request->room) {
            $id = base64_decode($request->room);
        }
        $rooms = \App\Models\RoomType::where('status', 1)->orderBy('name', 'ASC')->get();
        // dd($id, $rooms);
        return view('booking', compact('rooms', 'id'));
    }

    public function bookingStore(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'rooms' => 'required|integer',
            'visitors' => 'required|integer',
            'room_type_id' => 'required|exists:room_types,id',
        ]);

        // Create a new booking instance
        $booking = new \App\Models\Bookings();
        $booking->name = $validatedData['name'];
        $booking->email = $validatedData['email'];
        $booking->phone = $validatedData['phone'];
        $booking->date = $validatedData['date'];
        $booking->rooms = $validatedData['rooms'];
        $booking->visitors = $validatedData['visitors'];
        $booking->room_type_id = $validatedData['room_type_id'];

        // Save the booking to the database
        $booking->save();

        // dd($request, $booking);

        // Redirect back with success message
        return redirect()->route('home')->with('success', 'Booking has been successfully submitted.');
    }
}
