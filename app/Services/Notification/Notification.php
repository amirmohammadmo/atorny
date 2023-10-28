<?php

namespace App\Services\Notification;

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class Notification
{
public function SendMailToAdmin($user , Mailable $mailable){
            Mail::to($user)->send($mailable);


}

}
