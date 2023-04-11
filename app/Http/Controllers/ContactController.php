<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function details(){

        $data['contact'] = (new PageContentController)->get_content_by_id(13);
        return view('contact.details', $data);
    }//


    public function sendContactFn(){

        $contactData = array(
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'mobile' => Input::get('mobile'),
            'subject' => Input::get('subject'),
            'contactmessage' => Input::get('contactmessage')
        );

        //Mail::send(new Notification($mailData));
        Mail::to('reservations@maagirihotel.com')->send(new SendContact($contactData));

        return view('notifications.booking-success');

    }//


}
