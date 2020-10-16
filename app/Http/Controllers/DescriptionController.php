<?php

namespace App\Http\Controllers;
use App\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index()
    {
        $dsc=Description::latest()->get();
        return view('home',compact('dsc'));
    }
    
    //
}
