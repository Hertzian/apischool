<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $table = 'matters';

    protected $fillable = [
        'name'
    ];

    public function exam(){
        return $this->hasMany('App\Exam');
    }

    public function homework(){
        return $this->hasMany('App\Homework');
    }

    public function group(){
        return $this->belongsTo('App\group', 'group_id');
    }
}
