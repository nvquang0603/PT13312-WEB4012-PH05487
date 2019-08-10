<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'teacher_name',
        'major',
        'max_student'
    ];

    public function admins() {
        return $this->hasMany('App\Admin', 'class_id', 'id');
    }

    public function students() {
        return $this->hasMany('App\Info', 'class_id', 'id');
    }
}
