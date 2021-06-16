<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    
    public function index( Request $request )
    {
        return view( 'contact.index' );
    }

    public function store( Request $request )
    {
        $this->validate( $request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        /* Contact::create($request->all()); */
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' =>  $request->input('subject'),
            'message' =>  $request->input('message')
        ]);

        /* \Mail::send('email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'form_message' => $request->get('message'),
        ), function( $message ) use ( $request ){
            $message->from( $request->email );
            $message->to('admin@localhost', 'Hello Admin')->subject( $request->get('subject')) ;
        });
 */
        return redirect('/')
            ->with('message', 'Your message has been sent We will contact you shortly');
    }    
}