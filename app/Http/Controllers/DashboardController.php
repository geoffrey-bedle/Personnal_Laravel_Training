<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show(User $user)
    {
        if ($user == auth()->user()){

        return view('user/dashboard',
            [
                'user' => $user,
            ]);
        }else{
            return 'Vous n\'êtes pas ' . $user->name;
        }
    }

    public function destroy(Post $post)
    {

            $post->delete();

            return redirect(route('user.dashboard',[auth()->user(),auth()->user()->name]))->with('danger', 'Votre article a bien été supprimé');
    }
}
