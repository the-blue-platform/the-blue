<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 17:10
 */

namespace Blue\Http\Controllers\User;


use Blue\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index($newsId)
    {
        return view('component.user.user-page');
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'first_name' => 'alpha|required|max:50',
            'last_name' => 'alpha|required|max:50',
            'work' => 'required|max:50',
            'address' => 'required|max:50',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $user = Auth::user();

        $avatarName = $user->id . '_avatar' . '.' . request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars', $avatarName);

        $user->avatar = $avatarName;
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->work = $request->input('work');
        $user->location = $request->input('address');
        $user->save();

        return back();
    }
}