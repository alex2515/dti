<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = ['name', 'logo', 'description', 'address', 'phone', 'email', 'twitter', 'fabook', 'gmail', 'instagram', 'url', ];
}
