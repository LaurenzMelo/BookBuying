<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(){
        return view('/books', [
            'books' => user()->bookPaginate(),
            'authors' => user()->authorlist(),
        ]);
    }

    public function show(Book $book){
        return view('admin.show-books', ['book' => $book]);
    }

}
