<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function authors()
    {
        return $this->belongsTo('App\Author', 'author_id');
    }

    public function books()
    {
        return $this->belongsTo('App\Book', 'book_id');
    }
}
