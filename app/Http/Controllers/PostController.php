<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function view_post(){
        return view('post');
    }

    public function post_save(Request $request){
        $post = new Post;
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect(route('show_post_list'))->with('status', 'Post Created Successfully');
    }

    public function editForm(Request $request ,$id){
        $post = Post::find($id);
        return view('editForm',['post_detail'=>$post]);
    }

    public function editSave(Request $request){
        $post = Post::find($request->hidden_post_id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect(route('show_post_list'))->with('status', 'Post Updated Successfully');
    }

    public function deleteSave($id){
       Post::destroy($id);
       return redirect(route('show_post_list'))->with('status', 'Post Deleted Successfully');
    }
}