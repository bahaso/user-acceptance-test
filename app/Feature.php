<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Feature extends Model
{
    Use Notifiable;
    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
 
     protected $fillable = [
         'features_name', 'description'
     ];
     
     protected $table= 'features';

     public function actions()
     {
         return $this->hasMany(Action::class);
     }
}
