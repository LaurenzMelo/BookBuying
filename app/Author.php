<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function getTotalDownloadsAttribute()
    {
        return Book::where('author_id', $this->id)->sum('total_download');
    }
    public function getTotalUBookAttribute()
    {
        return Book::where('author_id', $this->id)->sum('unclaimed_download');
    }

    public function getUnclaimedDownloadsAttribute()
    {
        $books = Book::where('author_id', $this->id)
            ->select(DB::raw('price * unclaimed_download AS product'))
            ->get();

        return $books->sum('product') ?? 0;
    }

}
