<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/12
 * Time: 1:15
 */

namespace Blue\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}