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

    public function book()
    {
        return $this->hasMany('App\Book');
    }

    public function journal()
    {
        return $this->hasMany('App\Journal');
    }

    public function chapter()
    {
        return $this->hasMany('App\Chapter');
    }

    public function getTotalDownloadsAttribute()
    {
        $book = Book::where('author_id', $this->id)->sum('total_download');
        $journal = Journal::where('author_id', $this->id)->sum('total_download');

        return $book + $journal;
    }


    public function getTotalUBookAttribute()
    {
        $book = Book::where('author_id', $this->id)->sum('unclaimed_download');
        $journal = Journal::where('author_id', $this->id)->sum('unclaimed_download');

        return $book + $journal;
    }

    public function getUnclaimedDownloadsAttribute()
    {
        $books = Book::where('author_id', $this->id)
            ->select(DB::raw('price * unclaimed_download AS product1'))
            ->get();

        $journals = Journal::where('author_id', $this->id)
            ->select(DB::raw('price * unclaimed_download AS product2'))
            ->get();

        return $books->sum('product1') + $journals->sum('product2') ?? 0;
    }

    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'like', '%' . $s . '%')
                    ->orWhere('email', 'like', '%' . $s . '%');
    }

}
