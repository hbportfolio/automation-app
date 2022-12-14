<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function conditions() {
        return view('components.conditions');
    }

    public function privacy() {
        return view('components.privacy');
    }

    public function newsletter(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('newsletters')]
        ]);
        Newsletter::create($formFields);

        return back()->with('message', 'Thank you for subscribing to our newsletter.');
    }
}
