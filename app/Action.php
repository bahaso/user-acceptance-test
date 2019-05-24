<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Action extends Model
{
    
    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
 
     protected $fillable = [
         'action_name','type'
     ];
     
     protected $table= 'action';

     public function cases()
     {
         return $this->hasMany(TestCase::class);
     }
}
