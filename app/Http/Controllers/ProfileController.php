<?php

namespace App\Http\Controllers;

use App\Http\Traits\QueryTrait;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use QueryTrait;
        public function index($name){
            
            $user =  User::where('name', $name)->first();
            return view('index')->with('user',$user);
        }

        public function show(){
            $user = $this->get_users();
            dd($user);
            return ;
        }
}
