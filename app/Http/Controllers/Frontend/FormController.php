<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\FormSent;
use App\Models\Form;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


/**
 * Class FormController.
 */
class FormController extends Controller
{
    /**
     * @return Response
     */
    public function store(Request $request)
    {
        $form = new Form();
        $request->validate([
            'user-name' => 'required',
            'user-email' => 'required|email',
            'user-tel' => 'required',
        ]);

        $form->setUserName($request->get('user-name'));
        $form->setUserEmail($request->get('user-email'));
        $form->setUserTel($request->get('user-tel'));
        $form->setText($request->get('text',''));
        $form->setType($request->get('formName',''));
        $form->setCreatedAt();

        if($request->hasFile('user-file')){
            $request->validate([
                'user-file' => ['max:20000', 'mimes:x3*,txt,pdf,docx,doc,xls,jp*,png,gif,bpm,psd,cdr,jpeg'],
            ]);
            $file = $request->file('user-file');
            $form->setUserFileName($file->getClientOriginalName());
            $form->setUserFilePath($file->getRealPath());
            $form->setUserFileMime($file->getClientMimeType());
        }

        try{
            Mail::to('fomdih@gmail.com')
                ->queue(new FormSent($form));

        }catch (\Exception $exception){
            return response()->json([
                'status' => 'Error',
                'message' => $exception->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'Success',
            'message' => 'Form sent'
        ]);
    }

}
