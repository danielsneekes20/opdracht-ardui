<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;

class CountController extends Controller
{
    public function show(){
        return view('count') -> with('count', Count::first()->amount);
    }
}
