<?php

namespace App\Http\Controllers;
use App\Message;

use Illuminate\Http\Request;


class MessagesController extends Controller
{
  public function submit(Request $request)
{
    $this->validate($request, [
        'ime' => 'required',
        'email' => 'required',
    ]);
    // Create new messages
    $message = new Message;
    $message->ime = $request->input('ime');
    $message->email = $request->input('email');
    $message->poruka = $request->input('poruka');

    // Save messages
    $message->save();

    // redirect
    return redirect('/')->with('success','Poruka Poslata');


}


public function getMessages()
{
  $messages = Message::all();
  return view('messages')->with('messages', $messages);
}

}
