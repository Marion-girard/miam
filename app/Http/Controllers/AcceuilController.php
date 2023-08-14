<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    
        public function showrecette(){
            return view("recipe");
        }
    
}
