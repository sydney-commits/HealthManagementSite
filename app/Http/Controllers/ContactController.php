<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){

    }

    public function store(Request $request){

        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->phone = $request->input('phone');
       
        $contact->save();
        
        return back()->with('success','Thanks, We Shall Get Back to You');
        


    }
}
