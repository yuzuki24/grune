<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $guarded = ['id'];

    public static $rules = [

        'profile_img' => 'image|file',
    ];
}
