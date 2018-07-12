<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/11
 * Time: 23:44
 */

namespace Blue\Http\Controllers\Auth;


use Blue\Models\User;
use Illuminate\Http\Request;
use Blue\Http\Controllers\Controller;

class SignupController extends Controller
{
    public function getSignup()
    {
        return view('component.auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'alpha|required|max:50',
            'last_name' => 'alpha|required|max:50',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'confirmed|required|min:6',
        ]);

        User::create([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('home')->with('info', 'Your account is created');
    }
}