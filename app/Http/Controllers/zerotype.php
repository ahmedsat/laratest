<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zerotype extends Controller
{
    public function index(){
    	return view('zerotype.zerotype_home');
    }
    public function features(){
    	return view('zerotype.zerotype_features');
    }
    public function news(){
    	return view('zerotype.zerotype_news');
    }
    public function about(){
    	return view('zerotype.zerotype_about');
    }
    public function contact(){
    	return view('zerotype.zerotype_contact');
    }

}
