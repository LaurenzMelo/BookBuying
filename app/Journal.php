<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
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
        $author = Author::where('name', 'LIKE', "%{$s}%")->select('id');

        return $query->whereIn('author_id', $author)
            ->orWhere('title', 'like', '%' . $s . '%');
    }
}
