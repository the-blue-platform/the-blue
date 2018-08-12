<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/11
 * Time: 22:42
 */

namespace Blue\Http\Controllers\Post;


use Blue\Application\Post\PostApplication;
use Blue\Application\Post\PostDataMapper;
use Blue\Domain\Post\Post;
use Blue\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $postApplication = new PostApplication();
        $post = new Post(Auth::user()->id, $request->input('content'));
        $postApplication->createPost($post);
        $post->setCreatedDate(now());
        $postData = PostDataMapper::mapDomainToData($post);

        return response()->json([
            "view" => View::make("component.user.post")
                ->with('post', $postData)
                ->render()
        ]);
    }
}