<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request) {
        return view('admin.config');
    }

    
}