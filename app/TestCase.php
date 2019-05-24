<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestCase extends Model
{
    protected $fillable = [
        'steps', 'expectation','status','action_id'
    ];
    
    protected $table= 'testcase';

}
