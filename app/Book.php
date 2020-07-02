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

    public function chapter()
    {
        return $this->hasMany('App\Chapter');
    }

    public function scopeSearch($query, $s)
    {
        $author = Author::where('name', 'LIKE', "%{$s}%")->select('id');

        return $query->whereIn('author_id', $author)
                    ->orWhere('title', 'like', '%' . $s . '%');
    }
}
