<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $getData = User::all();
        // foreach ($getData as $d) {
        //     echo "$d->name {$d->Role->role_name} |";

        // }
        dump($getData);

        // return view('index', compact('getData'));
    }
}
