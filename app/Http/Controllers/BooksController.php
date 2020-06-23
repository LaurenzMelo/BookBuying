<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {
        // Get a list of books
        $books = Book::orderBy('title', 'ASC')->paginate(5);

        // Get a list of authors
        $authors = Author::orderBy('name', 'ASC')->paginate(5);

        return view('books', compact('books', 'authors'));
    }

    public function show(Book $book)
    {
        return view('admin.show-books', ['book' => $book]);
    }

}
