<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class MailController extends Controller
{

    public function sendMail(Request $request) {

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            'message' => 'required'
        ]);
        Contact::create($formFields);

        return back()->with('message', 'Thank you for contacting us, we will get back you as soon as possible.');
    }
}
