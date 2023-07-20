<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;
    private  $user;
    private $url;
    public function  __construct($user,$url)
    {
        $this->user = $user;
        $this->url = $url;
    }
    public function build()
    {
        return $this->subject('Verify your Email Address')->view('email.verify-email')->with(['user'=> $this->user,'url' => $this->url]);
    }
}
