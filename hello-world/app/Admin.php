<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'university',
        'class_id',
        'is_active',
        'email',
        'password'
    ];
    protected $hidden = [
        'password'
    ];
    public function classRoom() {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }
}
