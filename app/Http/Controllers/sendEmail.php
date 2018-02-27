<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendEmail extends BaseController
{
    public function trial(Request $request)
    {
        $email = $request->input('email');
        $name = 'Dear ' . $request->input('name');
        Mail::send('emails.send', ['name' => $name], function ($message) use ($email) {
            $message->from('learnhsk@gmail.com', 'Lee');
            $message->to($email)->subject('Trial lesson');
        });

        Session::flash('flash_message', 'You can find the trial class detail in your email. see you there!');
        return view('hsk.frontpage');
    }

    public function join(Request $request)
    {
        $email = $request->input('email');
        $type = $request->input('type');
        $name = $request->input('name');
        $info = $type . '   ' . $request->input('information');

        Mail::send('emails.join', ['name' => $name, 'email' => $email, 'info' => $info],
            function ($message) {
            $message->from('learnhsk@gmail.com', 'Join');
            $message->to('wgqin1@e.ntu.edu.sg')->subject('join the lesson');
            });
        Session::flash('flash_message','Thanks for joining us, we will get back you through email soon');
        return view('hsk.frontpage');
    }

}
