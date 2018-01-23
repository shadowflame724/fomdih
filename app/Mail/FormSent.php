<?php

namespace App\Mail;

use App\Models\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormSent extends Mailable
{
    use Queueable, SerializesModels;

    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if($this->form->getUserFile()){
            return $this->view('frontend.mail.form-store', [
                'form' => $this->form
            ])->attach($this->form->getUserFile()->getPathname(), [
                'as' => $this->form->getUserFile()->getClientOriginalName(),
                'mime' => $this->form->getUserFile()->getClientMimeType(),
            ]);
        }else{
            $this->view('frontend.mail.form-store', [
                'form' => $this->form
            ]);
        }

    }
}
