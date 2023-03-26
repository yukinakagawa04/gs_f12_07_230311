<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Comment;

use Auth;

class CommentController extends Controller
{
    public function store(Contnet $content, Request $request)
    {
        $user = auth()->user();
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'comment' => 'required|max:191',
        ]);
        
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::user()->id;
        
        $validator->validate();
        $comment->save();
        
        $comment->commentStore($user->id, $data);
        $comments = Comment::getAllOrderByUpdated_at();
        // return response()->view('content.show',compact('comments'));
        //return response()->view('content.show',compact('comments'));
        //return view('content.show',['comment' => $comments]);
        // return response()->view('tweet.index',compact('tweets'));
        //return view('content.show')->with('comments', $comments);
        return redirect()->back();
    }
    
    

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
