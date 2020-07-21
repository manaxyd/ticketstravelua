<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    public function send_form(Request $request)
    {
        if($request->isMethod('post')) {

            $messages = [
                'required' => "Необходимо заполнить поле :attribute",
                'email' => "Поле :attribute должно иметь соответствующие атрибуты",
                'g-recaptcha-response' => "Укажите, что Вы не робот",
                'required' => 'Подтвердите, что Вы не робот',
                'captcha' => 'Ошибка валидации captcha! Попробуйте снова или свяжитесь с владельцем ресурса.',
            ];



            $this->validate($request,[
                //$name = $request->name;
                //$email = $request->email;
                //$msg = $request->msg;
                'name' => 'required|max:255',
                'email' => 'required|email',
                'msg' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ], $messages);

            $data = $request->all();

            Mail::send('emails.contact-mail', ['data'=>$data], function ($message) use ($data){
                $message->from($data['email'], $data['name']);
                $message->to('ticketstravelua@gmail.com')->subject('от '.$data['email'].' отправлено с формы');
            });

            if($request){
                //return redirect(route('index'))->with('status', 'Сообщение отправлено');
                return back()->with('status', 'Сообщение отправлено');
            }

        }

        //Mail::to('ticketstravelua@gmail.com')->send(new MailClass($name, $email, $msg));

//        if($request){
//            //return redirect(route('index'))->with('status', 'Сообщение отправлено');
//            return back()->with('status', 'Сообщение отправлено');
//        }
    }
}

