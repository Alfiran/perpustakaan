<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Entities\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

/**
* Class AuthController
*
* @package App\Http\Controllers\Auth
*/
class LoginController extends Controller
{
    
    /**
    * @var User
    */
    protected $user;
    
    /**
    * @var Guard
    */
    protected $auth;
    
    /**
    * @param Guard $auth
    * @param User $user
    */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user;
        $this->auth = $auth;
        
        $this->middleware('guest', ['only' => ['getlogin', 'postLogin']]);
    }
    
    /**
    * @return \Illuminate\View\View
    */
    public function getLogin()
    {
        return view('pages.login');
    }
    
    /**
    * @param LoginRequest $request
    *
    * @return \Illuminate\Http\RedirectResponse
    */
    public function postLogin(LoginRequest $request)
    {
        if ($this->auth->attempt($request->only('email', 'password'), true)) {
            
            // simpan ke session
            session()->put('user_id', Auth::user()->id);
            session()->put('email', Auth::user()->email);
            session()->put('name', Auth::user()->name);
            session()->put('level', Auth::user()->level);
         
                // redirect ke backoffice
        return redirect()->route('page.dashboard');
        }
        
        // redirect to login and set the flash message
        return redirect()->route('page.login')->with('auth_message', 'Kombinasi email dan password salah!');
    }
    
    /**
    * @return \Illuminate\Http\RedirectResponse
    */
    public function getLogout()
    {
        $this->auth->logout();
        
        return redirect()->route('page.login');
    }
}