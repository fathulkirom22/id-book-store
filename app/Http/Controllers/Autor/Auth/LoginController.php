<?php

namespace App\Http\Controllers\Autor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/autor/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest.autor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('autor.auth.login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/autor');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('autors');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        $data = $request->only('email', 'password');

        if (\Auth::attempt($data)) {
            $email = $request->email;
            $user = Auth::user();

            Session::put('set', $users);

            if ($users[0]->is_autor == '1') {
                return redirect()->intended('autorDashboard');
            }else{
                return redirect()->intended('dashboard');
            }
        }else{
            return back()->withInput()->witherrors(['Email or password did not match!']);
        }
    }
}
