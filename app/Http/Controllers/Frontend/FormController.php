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

        $form->setUserName($request->user_name);
        $form->setUserEmail($request->user_email);
        $form->setUserTel($request->user_tel);
        $form->setText($request->text);
        if($request->hasFile('user_file')){
            $path = $request->user_file->storeAs('forms', uniqid(). '.' . $request->user_file->getClientOriginalExtension());
            $form->setUserFile($path);
        }

        try{
            Mail::to('example@example.com')
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
