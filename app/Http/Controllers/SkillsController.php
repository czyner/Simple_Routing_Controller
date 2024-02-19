<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $data=array(
            "skills"=>"Basic Knowledge in Photoshop Editing",
    );
        return view('Skills', ['data'=>$data]);
    }
}
