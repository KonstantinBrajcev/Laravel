<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    return view('test');
    }
    public function store(Request $request) {
    $userData = ['name' => $request->name, 'email' => $request->email];
    return response()->json($userData);
    }
    public function hello() {
        return view('hello');
    }
}
