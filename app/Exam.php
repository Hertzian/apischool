<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'title',
        'description'
    ];

    public function matter(){
        return $this->belongsTo('App\Matter','matter_id');
    }
}
