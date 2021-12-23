<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function showPost(Request $request)
    {
        return view('admin.create-post');
    }

    public function createPost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $postArray      =   array( 
            "title"  =>  $request->title,
            "description" => $request->description
        );

        $post  = Post::create($postArray);

        return redirect()->route('createPost')
            ->with("success", "Success! Post created"); 

    }

    public function editPost($id)
    {
        $editPost = Post::find($id);

         //return $editPost;
        return view('admin.edit-post', compact('editPost'));
    }

    public function updatePost(Request $request,$id)
    {
        $updateData = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = Post::whereId($id)->update($updateData);
        return redirect()->route('editPost', $id)->with('updated', 'Post updated');
    }

    public function deletePost(Request $request, $id)
    {
        $postDelete = Post::find($id);
        $postDelete->delete();
        return redirect()->route('dashboard')->with('delete', 'Post deleted');
    }

    
}
