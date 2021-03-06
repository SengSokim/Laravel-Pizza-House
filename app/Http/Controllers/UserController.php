<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    // get=> /admin/users
    public function index(){
        if(Gate::allows('isadmin')){
            return view('admindash');
        }
        Abort(403);
    }
}
