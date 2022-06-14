<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function messageForm(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'message_body' => 'required|min:20']);

        $data = ['name' => $request->get('name'), 'email' => $request->get('email'), 'messageBody' => $request->get('message_body')];

        Mail::send('email', $data, function ($message) use ($data) 
        {
            $message->form($data['email'], $data['name']);
            $message->to('info@matchouse.com', 'Admin')
                ->subject('Match House Message');
        });

        return redirect()
            ->back()
            ->with('success', 'Thank for your message. We will contact you as soon as possible.');
    }
}
