<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class continueReading extends Controller
{
    //
    public function continue($id)
    {   
        $post=Post::findOrFail($id);
        //$post=DB::table('users')->join('posts','users.id','=','posts.user_id')->where('posts.id', '=', $id)->get();
        //dd($post);
        return view('continueReading')->with('posts',$post);
    }
}
