<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// MODEL LARAVEL

class Identitas extends Model
{
    protected $fillable = [
        'id', 'name', 'birthday', 'gender', 'email', 'phone', 'address'
    ];
}
