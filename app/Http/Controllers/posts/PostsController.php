<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;

class PostsController extends Controller
{

    public function index() {

        //first section
        $posts= PostModel::all()->take(2);
        $postOne= PostModel::take(1)->orderBy('id', 'desc')->get();
        $postTwo= PostModel::take(2)->orderBy('id', 'desc')->get();




        //business section
        $postBus= PostModel::where('category' , 'business')->take(2)->get();
        $postBusTwo= PostModel::where('category' , 'business')->take(3)->orderBy('id', 'desc')->get();
        return view('posts.index',
        compact('posts', 'postOne', 'postTwo', 'postBus', 'postBusTwo'));
    }


    public function single($id){

    }
}
