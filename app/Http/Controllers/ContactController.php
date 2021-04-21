<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Auth;
use Mail;
use App\Contact;

class ContactController extends Controller
{
    public function insert(Request $request)
    {

        $contact = new Contact();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->cnumber = $request->get('phone');
        $contact->message = $request->get('message');

        $name = $request->get('name');
        $email = $request->get('email');
        $cnumber = $request->get('phone');
        $message1 = $request->get('message');
        $data = array('name'=>$name,'email'=>$email,'cnumber'=>$cnumber,'message1'=>$message1);

        $data1 = array('name'=>$name,'email'=>$email,'cnumber'=>$cnumber,'message1'=>$message1);
        
         Mail::send('mail4', $data, function($message)  {
             $message->to('sales@sw7infomedia.com', 'SW7')->subject
             ('Customer Notifications');
             $message->from('sales@sw7infomedia.com', 'SW7');
         });
        Mail::send('mail2', $data, function($message) use ($contact) {
         $message->to($contact->email,$contact->name)->subject
         ('Thanking you from SW7.com');
          $message->from('sales@sw7infomedia.com', 'SW7');
            });
    // $contact->save();
    return redirect('/')->with('success', 'Your Query Submitted Successfully!!');
    }

}
