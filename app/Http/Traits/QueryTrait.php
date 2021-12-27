<?php

namespace  App\Http\Traits;

use App\Models\User;

trait QueryTrait{

    public function get_users(){
         $user = User::all();
         return $user;

    }
    
   

  
}





