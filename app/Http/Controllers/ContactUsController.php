<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function save(Request $request)
    {
        ContactUs::create($request->all());
        return view('contact-us');
    }
}
