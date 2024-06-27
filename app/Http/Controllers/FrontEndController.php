<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\HomePageCarousel;
use App\Models\Payment;
use App\Models\PefectTourPackages;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Mail;

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
        $rooms = \App\Models\RoomType::where('status', 1)->orderBy('name', 'ASC')->get();
        $packages = PefectTourPackages::where('status', 1)->get();
        $home_page_carousel = HomePageCarousel::where('status', 1)->orderBy('display_order', 'ASC')->get();
        // dd($packages->toArray());
        return view('home', compact('packages', 'rooms', 'home_page_carousel'));
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

        // dd($validatedData);

        // Create a new booking instance
        $contact = new \App\Models\Contact();
        $contact->fill($validatedData);
        $contact->save();

        // Send confirmation email to user
        $response1 = Mail::to($validatedData['email'])->send(new \App\Mail\ContactMail($contact,'Thank You for Contacting Us', 'emails.contact_user'));
        // dd($validatedData, $contact, $response1);

        // Send confirmation email to admin
        if(!empty(getSettings()) and (isset(getSettings()->email) and !empty(getSettings()->email))){
            $adminEmail = getSettings()->email;
        }
        else{
            $adminEmail = "Trehanhotel@gmail.com";
        }
        Mail::to($adminEmail)->send(new \App\Mail\ContactMail($contact, 'New Contact Form Submission', 'emails.contact_admin'));

        // $contact = Contact::create($validatedData);

        // Optionally, you can add a success message or redirect to a thank-you page
        return redirect()->back()->with('success', 'Thank you for contacting us, we will contact you soon');
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

    public function createOrder(Request $request)
    {
        try{
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $orderData = [
                'receipt'         => $request->room_name,
                'amount'          => $request->amount * 100, // amount in the smallest currency unit
                'currency'        => 'INR'
            ];
            $razorpayOrder = $api->order->create($orderData);
            // dd($razorpayOrder);
            return response()->json([
                'id' => $razorpayOrder['id'],
                'amount' => $razorpayOrder['amount']
            ]);
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function bookingStore(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $validatedData = $request->validate([
            'razorpay_name' => 'required|string',
            'razorpay_email' => 'required|email',
            'razorpay_phone' => 'required|string',
            'razorpay_date' => 'required|date',
            'razorpay_rooms' => 'required|integer',
            'razorpay_visitors' => 'required|integer',
            'razorpay_room_id' => 'required|exists:room_types,id',
            'razorpay_payment_id' => 'required',
            'razorpay_order_id' => 'required',
            'razorpay_signature' => 'required',
            'razorpay_amount' => 'required',
        ]);
        try {

            $newBookingData = [];
            $newBookingData['name'] = $validatedData['razorpay_name'];
            $newBookingData['email'] = $validatedData['razorpay_email'];
            $newBookingData['phone'] = $validatedData['razorpay_phone'];
            $newBookingData['date'] = $validatedData['razorpay_date'];
            $newBookingData['rooms'] = $validatedData['razorpay_rooms'];
            $newBookingData['visitors'] = $validatedData['razorpay_visitors'];
            $newBookingData['room_type_id'] = $validatedData['razorpay_room_id'];

            // dd($newBookingData, $validatedData);

            // Create a new booking instance
            $booking = new \App\Models\Bookings();
            $booking->fill($newBookingData);
            $booking->save();

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            // Verify the payment
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature
            ];

            $payment_details = $api->utility->verifyPaymentSignature($attributes);
            // dd($payment_details);

            // Payment successful, save the payment details in the database
            Payment::create([
                'booking_id' => $booking->id,
                'payment_id' => $request->razorpay_payment_id,
                'order_id' => $request->razorpay_order_id,
                'signature' => $request->razorpay_signature,
                'amount' => $request->razorpay_amount,
                'currency' => 'INR',
            ]);

            // Send confirmation email to user
            $response1 = Mail::to($newBookingData['email'])->send(new \App\Mail\BookingConfirmation($booking));
            // dd($newBookingData, $booking, $response1);

            // Send confirmation email to admin
            if(!empty(getSettings()) and (isset(getSettings()->email) and !empty(getSettings()->email))){
                $adminEmail = getSettings()->email;
            }
            else{
                $adminEmail = "Trehanhotel@gmail.com";
            }
            Mail::to($adminEmail)->send(new \App\Mail\BookingNotification($booking));

            // Redirect back with success message
            return redirect()->route('home')->with('success', 'Booking has been successfully submitted.');
        } catch (\Exception $e) {
            // return redirect()->back()->with('error', $e->getMessage());
            dd($e->getMessage());
        }
    }
}
