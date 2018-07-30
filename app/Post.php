<?php

namespace App;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file', 'date', 'time', 'place'
    ];
    public function user()
    {
        // Un post "pertenece" a un Usuario
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
        //Un Post "pertenece" a una Categoria
    	return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        // Un Post "pertenece y tiene" muchas Etiquetas
    	return $this->belongsToMany(Tag::class);
    }

    public function portfolio()
    {
        // Un Post "tiene" a un Portafolio
         return $this->hasOne(Portfolio::class);
    }

     // Camel Case
     public function getCreatedAtAttribute($created_at)
     {
        return  new Date($created_at);
     }

    // hasOne($related, $foreignKey = null, $localKey = null)
    // belongsTo($related, $foreignKey = null, $ownerKey = null, $relation = null)
    // hasMany($related, $foreignKey = null, $localKey = null)
    // belongsToMany($related, $table = null, $foreignPivotKey = null, $relatedPivotKey = null, $parentKey = null, $relatedKey = null, $relation = null)
}
