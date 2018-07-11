<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = [
    	'user_id', 'post_id', 'film', 'body',
    ];

    public function user(){
        // Un Portfolio "pertenece a" un Usuario
    	return $this->belongsTo(User::class);
    }

    public function post(){
        // Un Portfolio "pertenece a" un Post
    	return $this->belongsTo(Post::class);
    }
}
