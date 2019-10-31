<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
        'name',
        'grade'
    ];

    public function matter(){
        return $this->hasMany('App\Matter');
    }

    public function student(){
        return $this->hasMany('App\Student');
    }
}
