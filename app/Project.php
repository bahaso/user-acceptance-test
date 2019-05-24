<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Project extends Model
{
    Use Notifiable;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'project_name', 'platform', 'version'
    ];
    
    protected $table= 'project_list';
}
