<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Validator;
use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    protected function getLogin()
    {
        return view("usuarios.login");
    }
       

    public function postLogin(Request $request)
    {
        $empleado=User::select('users.*')->where('users.cedula','=',$request['email']);
        
        
        if (Auth::attempt(['email'=>$request['email'],'password' => $request['password']]))
        {
            return view("inicio")->with('empleado',$empleado);
        }
        Session::flash('error','El usuario o la contraseña son incorrectos');
        return view('usuarios.login'); 
    }

    public function getLogout()
    {
        $this->auth->logout();
        Session::flush();
        return redirect()->route('administrador.auth.getlogin');
    }

}
