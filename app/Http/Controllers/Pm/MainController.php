<?php

namespace App\Http\Controllers\Pm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('/pm/index');
    }
}
