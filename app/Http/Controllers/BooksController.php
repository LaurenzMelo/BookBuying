<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Middleware\TrimStrings;
use App\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(Request $request){
        $s = $request->input('s');

        // Get a list of books
        $books = Book::orderBy('title', 'ASC')
                    ->search($s)
                    ->paginate(5);

        // Get a list of authors
        $authors = Author::orderBy('name', 'ASC');

        $journals = Journal::orderBy('title', 'ASC')
                    ->search($s)
                    ->paginate(5);

        return view('books', compact('books', 'authors', 'journals', 's'));
    }

    public function show(Book $book){
        return view('show-specific', ['book' => $book]);
    }

}
