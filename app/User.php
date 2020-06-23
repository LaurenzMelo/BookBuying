<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    public function booklist(){
        return Book::all()->sortBy('title');
    }
    public function bookPaginate(){
        return Book::paginate(10);
    }

    public function authorlist(){
        return Author::all()->sortBy('name');
    }
    public function authorPaginate(){
        return Author::paginate(10);
    }

}
