<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EditaisAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function new()
    {

        $status =  DB::table('formulario')->get();

        return view("publish.panel.new", compact('status'));
    }

 

}



