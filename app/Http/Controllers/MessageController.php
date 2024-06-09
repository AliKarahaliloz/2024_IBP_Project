<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function submitMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
    }


    public function showMessages()
    {
        $messages = Message::all();
        return view('adminusersmessage', compact('messages'));
    }




}
