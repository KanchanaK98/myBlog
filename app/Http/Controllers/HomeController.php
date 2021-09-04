<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /*public function view()
    {
        return view('welcome');
    }*/


    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $post=new Post;
        $this -> validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpeg'
          
        ]);

        $imgName=time().".".$request->image->extension();
        $request->image->move(public_path('images'),$imgName);


        $post->user_id=auth()->user()->id;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image=$imgName;
        $post->save();
        //$data=Post::all();
        return view('home');
      // return redirect()->back()->with('datas',$data);
    }

    
}
