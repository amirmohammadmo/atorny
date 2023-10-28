<?php

namespace App\Jobs;

use App\Services\Notification\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
private $address;
private $mailable;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($address,Mailable $mailable)
    {
        $this->mailable=$mailable;
        $this->address=$address;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Notification $sendMail)
    {
         $sendMail->SendMailToAdmin($this->address,$this->mailable);
    }
}
