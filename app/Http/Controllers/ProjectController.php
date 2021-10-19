<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProjectController extends Controller
{
    public function project() {
        $data = "Data All Project";
        return response()->json($data, 200);
    }

    public function projectAuth() {
        $data = "Welcome " . Auth::user()->name;
        return response()->json($data, 200);
    }
}
