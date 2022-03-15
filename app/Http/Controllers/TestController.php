<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('welcome');
    }
    
    public function testDemo(){
        return view('test');
    }
};