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
        if ($this->form->getUserFilePath()) {
            return $this->view('frontend.mail.form-store', [
                'form' => $this->form
            ])->attach($this->form->getUserFilePath(), [
                'as' => $this->form->getUserFileName(),
                'mime' => $this->form->getUserFileMime(),
            ]);
        }else{
            $this->view('frontend.mail.form-store', [
                'form' => $this->form
            ]);
        }

    }
}
