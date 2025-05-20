<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'email' => 'required',
            'body' => 'required',
        ]);
    
        Message::create($request->except('_token'));
    
        return redirect()->back()->with('success', 'Bericht verzonden!');
    }

    public function message() {
        $messages = Message::all();

        return view('message.message', ['messages' => $messages]);
      }

}
