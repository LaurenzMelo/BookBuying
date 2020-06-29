<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Journal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        $authors = Author::all();
        $journals = Journal::all();

        return view('home', compact('books', 'authors', 'journals'));
    }
}
