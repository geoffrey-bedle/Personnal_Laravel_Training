<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ArticleRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'tags', 'user')->get();

        return view('post/post_index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('post/post_create',
            [
                'categories' => $categories
            ]);
    }

    public function store(ArticleRequest $request)
    {
        $post = new Post();
//----------------------------------------------------------
//dd($request->input('title'));
// OU
        $post->title = $request->get('title');
//-----------------------------------------------------------
        $post->content = $request->get('content');
        $post->category_id = $request->get('category_id');
        $post->user_id = Auth::id();
        $post->save();

        return redirect(route('post.index'))->with('success', 'Article enregistré avec succès');
    }
//-----------------------------------------------
//----------------INJECTION DE DEPENDANCE--------
    public function destroy(Post $post)
    {
//-----------------------------------------------

        if ($post->user == Auth::user()) {
            $post->delete();
            return redirect(route('post.index'))->with('danger', 'L\'article "' . $post->title . '" a été supprimé');
        } else {
            return redirect(route('post.index'))->with('warning', 'Vous devez être l\'auteur de l\'article');
        }
    }

    public function edit(Post $post)
    {

        $categories = Category::pluck('name', 'id');
        //dd($post);
        return view('post/post_edit',
            [
                'post' => $post,
                'categories' => $categories
            ]);

    }

    public function update(ArticleRequest $request, Post $post)
    {
        $input = $request->all();

        $post->update($input);

        return redirect(route('user.dashboard', [auth()->user(), auth()->user()->name]))->with('success','Votre article a bien été modifié');
    }

    public function show(Post $post)
    {

        return view('post/post_show',
            [
                'post' => $post
            ]);
    }
}
