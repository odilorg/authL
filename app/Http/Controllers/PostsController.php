<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
   public function show($slug) {
    //$post = DB::table('posts')->where('slug', $slug)->first();
    
    
    //   /dd($post);
    return view('welcome', ['post' => Post::where('slug', $slug)->firstOrFail()]);
   }
}
