<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use Sohibd\Laravelslug\Generate; // This bangla Slug Plugin 

class PostController extends Controller
{
    function post(){
        $posts = Post::all();
        return view('post', compact('posts'));
    }
    function postcreate(Request $request){
        
       $data =new Post;
       $data -> title = $request->title;
       $data -> content = $request->content;
    //    $data -> slug = Generate::Enslug($request->title); // bangla to English URL Slug
       $data->save();
        return redirect()->back();
    }
    function singlepost($slug){
        $single_post = Post::where('slug', $slug)->get();
        return view('single_post', compact('single_post'));
    }
}
