<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Store;

class ContactController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('index' , compact('stores'));
    }

    public function confirm(ContactRequest $request)
    {
        $store = Store::find($request->store_id);
        $contact = $request->only(['familyname', 'firstname', 'store_id', 'email', 'tel', 'content']);
        return view('confirm', compact('contact' , 'store'));
    }

    public function create(ContactRequest $request)
    {
        $contacts = $request->all();
        Contact::create($contacts);
        return view('thanks');
    }
    
}

