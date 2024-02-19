<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data=array(
            "h1"=>"Watching Anime",
            "h2"=>"Grooming Fishes",
            "h3"=>"PLaying Online Games"
    );
        return view('Hobbies', ['data'=>$data]);
    }
}
