<?php

namespace App\Http\Controllers;

use App\Models\TopPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index() {
       return view('index');
   }//
}
