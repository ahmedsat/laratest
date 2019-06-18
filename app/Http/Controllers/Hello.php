<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function index(){
    	return 'Hello World !<br> from Controller';
    }

    public function show($name){
    	return view('Hello',array('name' => $name ));
    }
}