<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * write brief description
     * @param SignInRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSignUp(SignInRequest $request)
    {
        $firstName = $request['first_name'];
        $email     = $request['email'];
        $password  = bcrypt($request['password']);

        $user             = new User();
        $user->first_name = $firstName;
        $user->email      = $email;
        $user->password   = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * write brief description
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSignIn(Request $request)
    {
        $this->validate(
            $request , [
                'email' => 'required|email',
                'password' => 'required'
                     ]
        );
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }

    /**
     * Return the user to dashboard if logged in.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDashBoard()
    {
        $userName = Auth::user()->first_name;

        return view('includes.dashboard', compact('userName'));
    }
}
