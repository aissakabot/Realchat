<?php

namespace App\Http\Controllers;

use jwt;
use App\Models\Like;
use App\Models\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }
   
    public function likeIt(Reply $reply)
    {
        //
        $reply->like()->create([
            "user_id"=>auth()->id
            ]);

    }
    public function unlikeIt(Reply $reply)
    {
        //
        $reply->like()->where("user_id",auth()->id)->first()->delete();

    }
}
