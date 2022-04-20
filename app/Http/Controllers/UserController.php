<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function reviewSend(Request $request)
    {
        $this->validate($request,[
           'review'=>['required']
        ]);
        $review = new Review();
        $review->user_id = \Auth::id();
        $review->post_id = $request->post_id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->type = 'Channel';
        $review->status = 'Active';
        $review->save();
        toast('Thanks for your feedback','success');
        return redirect()->back();
    }
}
