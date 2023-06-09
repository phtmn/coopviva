<?php

namespace App\Http\Controllers\Auth;

use App\Mail\NewUser;
use App\Models\User;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;
use App\Models\VerifyUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Alert;

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
    protected $redirectTo = '/';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:6', 'confirmed'],
            'termo'         => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //dd($data);
        $user = User::create([
            'nome'          => $data['name'],
            'apelido'       => $data['apelido'],
            'email'         => $data['email'],
            'tipo_pessoa'   => $data['tipo_pessoa'],
            'perfil_id'     => $data['tipo_usuario'],
            'password'      => Hash::make($data['password']),
        ]);


        VerifyUser::create([
            'user_id'   => $user->id,
            'token'     => sha1(time()),
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));
        Mail::send(new NewUser($user));

        return $user;

       
    }
    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = 'active';
            }else{
                $status = 'activated';
            }
        }else{
            Alert::error( 'Não indentificamos sua conta em nosso sistema =(','Eita!')->persistent('Ok');
            return redirect('/login');
        }
        if($status == 'activated'){
            Alert::warning( 'Sua Conta ja foi Ativada','Keep Calm')->persistent('Ok');
            return redirect('/login');
        }
        Alert::success( 'Obrigado por ativar sua conta','Bom Trabalho!!!')->persistent('Ok');
        return redirect('/login');
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        //We sent you an activation code. Check your email and click on the link to verify.
        Alert::success( 'Nós enviamos um email de confirmação de conta. ','Verifique seu e-mail')->persistent('Ok');
        return redirect('/');
    }
}
