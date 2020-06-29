<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function author()
    {
        return $this->belongsTo('App\Author', 'author_id');
    }

    public function scopeSearch($query, $s)
    {
        return $query->where('title', 'like', '%' . $s . '%');
    }
}
