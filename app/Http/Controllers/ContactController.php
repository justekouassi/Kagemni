<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
	public function create()
	{
		return view('contact_form');
	}

	public function store(Request $request)
	{
		request()->validate([
			'name' => ['required'],
			'email' => ['required', 'email'],
			'subject' => ['required'],
			'mobile_number' => ['required', 'numeric'],
			'message' => ['required'],
		]);

		Contact::create([
			'name' => $request->name,
			'email' => $request->email,
			'subject' => $request->subject,
			'mobile_number' => $request->mobile_number,
			'message' => $request->message
		]);

		return response()->json(['success' => 'Form is successfully submitted!']);
	}
}
