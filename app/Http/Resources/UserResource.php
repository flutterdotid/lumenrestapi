<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource{

     public function toArray($request){
          return[
               'id' => $this->id,
               'username' => $this->username,
               'email' => $this->email,
          ];   
     }
}