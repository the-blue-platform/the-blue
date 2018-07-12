<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/12
 * Time: 10:07
 */

namespace Blue\Http\Controllers\Auth;


use Blue\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SignoutController extends Controller
{
    public function signout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}