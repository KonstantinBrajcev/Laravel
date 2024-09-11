<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // public function index() {
    // return view('test');
    // }
    // public function store(Request $request) {
    // $userData = ['name' => $request->name, 'email' => $request->email];
    // return response()->json($userData);
    // }
    // public function hello() {
    //     return view('hello');
    // }
    // public function showUser () {
    public function __invoke () {
        $users = DB::connection('mysql')->table('user')->select(['id', 'first_name', 'last_name', 'email'])->get();
        //БЫЛО
        // print_r($user);
        //СТАЛО
        // foreach ($users as $user){
        //     echo $user->first_name . '<br>';
        // }
        //НОВОЕ
        return view('user', ['users' => $users]);
    }
}
