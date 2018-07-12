<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/12
 * Time: 0:23
 */

namespace Blue\Http\Controllers\Auth;


use Blue\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function getSignin()
    {
        return view('component.auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Can not sign in with your account!');
        }

        return redirect()->route('home');
    }

}