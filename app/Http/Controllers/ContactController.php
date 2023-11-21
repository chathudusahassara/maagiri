<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\SendContact;
use App\Mail\SendEnquire;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function details(){

        $data['contact'] = (new PageContentController)->get_content_by_id(13);
        return view('contact.details', $data);
    }//


    public function sendContactFn(Request $request){

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

        $contactData = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'subject' => $request->input('subject'),
            'contactmessage' => $request->input('contactmessage'),
        );

        //Mail::send(new Notification($mailData));
        Mail::to('reservations@maagirihotel.com')->send(new SendContact($contactData));

        return view('notifications.booking-success');

    }//


    public function SendEnquireFn(Request $request){

        $enquireData = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'messageBody' => $request->input('messageBody'),
            'type' => $request->input('type'),
        );

        Mail::to('info@maagirihotel.com')->send(new SendEnquire($enquireData));

        return "OK";
    }//


}
