<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data=array(
            "hobby1"=>"Watching Anime",
            "hobby2"=>"Grooming Fishes",
            "hobby3"=>"PLaying Online Games"
    );
        return view('Hobbies', ['data'=>$data]);
    }
}
