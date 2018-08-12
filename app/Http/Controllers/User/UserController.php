<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/09
 * Time: 17:10
 */

namespace Blue\Http\Controllers\User;


use Blue\Application\Notification\NotificationApplication;
use Blue\Application\Post\PostApplication;
use Blue\Application\User\UserApplication;
use Blue\Http\Controllers\Controller;
use Blue\Repository\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index($userId)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->findById($userId);
        $notificationApplication = new NotificationApplication();
        $postApplication = new PostApplication();
        if (!$user) {
            return redirect('/');
        }
        return view('component.user.user-page')
            ->with('user', $user)
            ->with('notifications', $notificationApplication->getNotification())
            ->with('posts', $postApplication->getPosts($userId));
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

        $user->avatar = "/storage/avatars/" . $avatarName;
        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->work = $request->input('work');
        $user->location = $request->input('address');
        $user->save();

        return back();
    }

    public function follow($userId)
    {
        $userApplication = new UserApplication();
        if ($userApplication->follow($userId)) {
            return response()->json(
                [
                    'result' => 'FOLLOW'
                ]
            );
        }

        return response()->json(
            [
                'result' => 'UNFOLLOW'
            ]
        );
    }

    public function notifications()
    {
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }
}