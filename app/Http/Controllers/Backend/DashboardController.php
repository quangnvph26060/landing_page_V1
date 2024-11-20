<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function contact(){
        $title = 'Yêu cầu liên hệ';
        $contacts = Contact::latest()->get();
        return view('backend.contact.contact', compact('title', 'contacts'));
    }
}

