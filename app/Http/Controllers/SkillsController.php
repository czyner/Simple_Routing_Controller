<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $data=array(
            "skills"=>"This is the Skills Page",
    );
        return view('Skills', ['data'=>$data]);
    }
}
