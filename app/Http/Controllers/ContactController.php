<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\SendContact;
use App\Mail\SendEnquire;
use Illuminate\Support\Facades\Mail;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    //
    public function details(){

        $data['contact'] = (new PageContentController)->get_content_by_id(13);
        return view('contact.details', $data);
    }//


    public function sendContactFn(Request $request){

        

        $request->validate([
            'firstname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10|numeric',
            'contactmessage' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);


        $contactData = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'subject' => $request->input('subject'),
            'contactmessage' => $request->input('contactmessage'),
        );


        //Mail::send(new Notification($mailData));
        Mail::to('info@maagirihotel.com')->send(new SendContact($contactData));

        return view('notifications.booking-success');

    }//

    //sendContactRoomFn
    public function sendContactRoomFn(Request $request){

        $request->validate([
            'firstname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10|numeric',
            'contactmessage' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $contactData = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'subject' => $request->input('subject'),
            'contactmessage' => $request->input('contactmessage'),
            'g-recaptcha-response' => ['required', new ReCaptcha]
        );

        //Mail::send(new Notification($mailData));
        Mail::to('reservations@maagirihotel.com')->send(new SendContact($contactData));


        return view('notifications.booking-success');

    }//


    // General: info@maagirihotel.com
    // Room inquiries: reservations@maagirihotel.com


    public function SendEnquireFn(Request $request){

        $enquireData = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'messageBody' => $request->input('messageBody'),
            'type' => $request->input('type'),
            'g-recaptcha-response' => ['required', new ReCaptcha]
        );

        Mail::to('info@maagirihotel.com')->send(new SendEnquire($enquireData));

        return response()->json(['message' => 'Enquiry sent successfully']);
    }//


}
