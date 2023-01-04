<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function show_post_list(){
      $post = Post::all()->sortByDesc("created_at");
      return view('home',['postdata'=>$post]);
    }
}