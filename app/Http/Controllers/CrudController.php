<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    Public function index(){
        $datos=DB::select("select * from ");
        return view("welcome");
    }
}
