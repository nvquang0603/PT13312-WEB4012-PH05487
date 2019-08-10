<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['name', 'address', 'university','class_id'];

    public function classRoom() {
        return $this->belongsTo('App\ClassRoom');
    }
}
