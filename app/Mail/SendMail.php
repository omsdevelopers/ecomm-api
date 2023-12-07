<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name;
    // public $email;
    public $msg;
    public $phone;

    public function __construct($name, $msg, $phone)
    {
        
        $this->name = $name;
        $this->msg = $msg;   
        $this->phone = $phone;    

        //   Log::info('Razorpay API Request: ' . json_encode($name,$email,$msg));
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Aishwa',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mail1.hh',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    public function build()
    {
        if ($this->msg==null) {
            $this->msg= 'No Message';
        }
        // return $this->view('Mail1.Mail1');
        return $this->view('Mail1.hh')
            ->subject('New Contact Form Submission')
            ->with([
                'name' => $this->name,
                'msg' => $this->msg,
                'phone' => $this->phone

            ]);
    }
}
