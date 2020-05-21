<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\ContactReceivedNotification;
use Illuminate\Support\Facades\Mail;


class Contact extends Model
{
    protected $guarded = [];

    public function send()
    {
        $email = config('app.contact_email_address');

        Mail::to($email)->queue(new \App\Mail\ContactReceivedMail($this));
    }
}
