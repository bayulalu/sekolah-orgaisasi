<?php

namespace App\Models;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $guarded = ['id'];


    public function isOwner(){

        if (Auth::guest()) {
          return false;
        }
  
        return Auth::user()->id == $this->user_id;
      }
}
