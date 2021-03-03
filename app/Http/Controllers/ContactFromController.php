<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;  
use App\Mail\ContactMail;  
use Mail;
class ContactFromController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg, 
        ];
        Mail::to("jamaldelaoui1234@gmail.com")->send(new ContactMail($details));
        return back()->with('message_sent','ila khdem anmess zebi');
    }
}
