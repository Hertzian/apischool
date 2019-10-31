<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $table = 'homeworks';

    protected $fillable = [
        'title',
        'description'
    ];

    public function matter(){
        return $this->belongsTo('App\Matter', 'matter_id');
    }
}
