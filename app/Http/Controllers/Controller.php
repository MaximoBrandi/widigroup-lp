<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function messages($lang){
        if ($lang == 'es') {
            return $messages = [
                'email.required' => 'Ingresa un email por favor',
                'email.email' => 'Ingresa un email valido',
                'email.max' => 'El email ingresado es demasiado largo',

                'phone.numeric' => 'Ingresa un teléfono valido',
                'phone.max' => 'El teléfono ingresado es demasiado largo',

                'message.required' => 'Ingresa un mensaje de consulta por favor',
                'message.string' => 'Ingresa un mensaje de consulta valido',
                'message.max' => 'El mensaje de consulta es demasiado largo',

                'name.required' => 'Ingresa algún tipo de identificación u nombre por favor',
                'name.string' => 'Ingresa algún tipo de identificación u nombre valido',
                'name.max' => 'La identificación u nombre es demasiado largo',

                'inquiry.string' => 'Ingresa un nombre de consulta valido',
                'inquiry.max' => 'El nombre de consulta es demasiado largo',

                'h-captcha-response.hcaptcha' => 'Por favor verifica que eres humano.',
            ];
        }else
        if ($lang == 'en') {
            return $messages = [
                'email.required' => 'Please enter an email',
                'email.email' => 'Please enter a valid email',
                'email.max' => 'The email entered is too long',

                'phone.numeric' => 'Please enter a valid phone number',
                'phone.max' => 'The phone number entered is too long',

                'message.required' => 'Please enter a message',
                'message.string' => 'Please enter a valid message',
                'message.max' => 'The message is too long',

                'name.required' => 'Please enter some form of identification or name',
                'name.string' => 'Please enter a valid form of identification or name',
                'name.max' => 'The identification or name is too long',

                'inquiry.string' => 'Please enter a valid inquiry name',
                'inquiry.max' => 'The inquiry name is too long',

                'h-captcha-response.hcaptcha' => 'Please verify that you are human.',
            ];
        }else
        if ($lang == 'it') {
            return $messages = [
                'email.required' => 'Inserire un indirizzo email',
                'email.email' => 'Inserire un indirizzo email valido',
                'email.max' => "L'indirizzo email inserito è troppo lungo",

                'phone.numeric' => 'Inserire un numero di telefono valido',
                'phone.max' => 'Il numero di telefono inserito è troppo lungo',

                'message.required' => 'Inserire un messaggio di consultazione',
                'message.string' => 'Inserire un messaggio valido',
                'message.max' => 'Il messaggio di consultazione è troppo lungo',

                'name.required' => 'Inserire una forma di identificazione o nome',
                'name.string' => 'Inserire una forma di identificazione o nome valido',
                'name.max' => 'La forma di identificazione o il nome è troppo lungo',

                'inquiry.string' => 'Inserire una consultazione valido',
                'inquiry.max' => 'Il nome di consultazione è troppo lungo',

                'h-captcha-response.hcaptcha' => 'Verifica di essere umano.',
            ];
        }else{
            return $messages = [
                'email.required' => 'Please enter an email',
                'email.email' => 'Please enter a valid email',
                'email.max' => 'The email entered is too long',

                'phone.numeric' => 'Please enter a valid phone number',
                'phone.max' => 'The phone number entered is too long',

                'message.required' => 'Please enter a message',
                'message.string' => 'Please enter a valid message',
                'message.max' => 'The message is too long',

                'name.required' => 'Please enter some form of identification or name',
                'name.string' => 'Please enter a valid form of identification or name',
                'name.max' => 'The identification or name is too long',

                'inquiry.string' => 'Please enter a valid inquiry name',
                'inquiry.max' => 'The inquiry name is too long',

                'h-captcha-response.hcaptcha' => 'Please verify that you are human.',
            ];
        }
    }

    public function newsletter(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'email|required|max:256'
        ], $this->messages(filter_var($request->locale, FILTER_UNSAFE_RAW,  FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));

        if ($validate->fails()) {
            return json_encode($validate->errors());
        }else{
            if (!Newsletter::where('email', '=', $request->email)->exists()) {
                if (Newsletter::withTrashed()->where('email', '=', $request->email)->exists()) {
                    Newsletter::withTrashed()->where('email', '=', $request->email)->first()->restore();
                }else{
                    Newsletter::Create([
                        'email' => $request->email,
                    ]);
                }
                return 'ok';
            } else {
                Newsletter::where('email', '=', $request->email)->first()->delete();

                return 'deleted';
            }
        }
    }

    public function contact(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'email|required|max:256',
            'phone' => 'numeric|nullable|max:9999999999999',
            'message' => 'string|required|max:1024',
            'name' => 'string|required|max:256',
            'subject' => 'string|nullable|max:256',
            'h-captcha-response' => 'hcaptcha',
        ], $this->messages(filter_var($request->locale, FILTER_UNSAFE_RAW,  FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }else{
            Contact::Create([
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'name' => $request->name,
                'inquiry' => $request->subject,
            ]);
            return redirect()->back()->withErrors(['success' => 'success']);
        }
    }
}
