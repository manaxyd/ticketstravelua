<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/my/account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {
    try {
        $this->validator($request->all())->validate();
    }catch (\Exception $e){
        //dd($e);
        //dd("Что-то пошло не так");
        return back()->with('error', 'Ошибка регистрации. Проверьте правильность вводимых данных.');
    }

    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $isAuth = $request->has('remember') ? true : false;
    $objUser = $this->create(['name' => $name, 'email' => $email, 'password' => $password]);
    if (!($objUser instanceof User)) {
        return back()->with('error', 'Невозможно создать пользователья с такими данными');
    }
    if ($isAuth) {
        $this->guard()->login($objUser);
    }

        //event(new Registered($user = $this->create($request->all())));
        //$this->guard()->login($user);

        return redirect(route('account'))->with('status', 'Вы успешно зарегестрированы');

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => ucfirst($data['name']),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $user;
    }
}
