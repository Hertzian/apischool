<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutors';

    protected $fillable = [
        'name',
        'surname',
        'lastsurname',
    ];

    public function student(){
        return $this->belongsTo('App\Student', 'student_id');
    }
}
