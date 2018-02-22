<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        return view('hsk.frontpage');
    }

}
