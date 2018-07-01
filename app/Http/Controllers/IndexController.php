<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Post;


class IndexController extends Controller
{

    public function index(){
        $posts =Post::all()->toArray();
        return view('post.post', compact('posts'));

    }
    public function edit($id){
        $post = Post::find($id);
        return view('post.editPost', compact('post', 'id'));
    }
    public function save(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'post' => 'required',
            'author' => 'required'
        ]);
        Post::create([
            'title' => $request->get('title'),
            'post' => $request->get('post'),
            'author'=>$request->get('author')
        ]);
        return redirect('posts')->with('success', 'Successfully added!');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'post' => 'required',
            'author' => 'required'
        ]);
        $user = Post::find($id);
        $user->title= $request->get('title');
        $user->post = $request->get('post');
        $user->author= $request->get('author');
        $user->save();
        return redirect('posts')->with('success', 'Successfully updated!');
    }

    public function add(){
        return view('post.create');
    }



}
