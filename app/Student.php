<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'surname',
        'lastsurname',
        'bloodtype',
        'status',
    ];

    public function group(){
        return $this->hasOne('App\Group', 'group_id');
    }

    public function tutor(){
        return $this->hasMany('App\Tutor');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
