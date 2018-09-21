<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'user_id', 'category_id', 'name', 'slug', 'excerpt', 'filepdf', 'file',
    ];
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }
    // public function tags(){
    // 	return $this->belongsToMany(Tag::class);
    // }
}
