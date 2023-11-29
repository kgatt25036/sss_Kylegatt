<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contacts.index');
    }
    public function create(){
        return view('contacts.create');
    }
    public function show($id){
        $contact = App\Models\Contact::find($id);
        return view('contacts.create',compact('contact'));
    }
}
