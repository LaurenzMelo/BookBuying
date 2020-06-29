<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(Request $request){
        $s = $request->input('s');

        // Get a list of books
        $books = Book::orderBy('title', 'ASC')
                    ->search($s)
                    ->paginate(10);

        // Get a list of authors
        $authors = Author::orderBy('name', 'ASC');

        return view('/admin/list-books', compact('books', 'authors', 's'));
    }

    public function store(Request $request){

        Book::create($this->validateBook());

        return redirect()->route('books.create');
    }

    public function destroy($id){

        $book = Book::where('id', $id)->delete();

        return redirect()->route('books.index');
    }

    public function show(Book $book){
        return view('admin.show-books', ['book' => $book]);
    }

    public function edit(Book $book){
        return view('admin.edit-books', compact('book'), [
            'authors' => auth()->user()->authorlist()
        ]);
    }

    public function update(Book $book){

        //$book = Book::find($id);

        $book->update($this->validateBook());

        return redirect()->route('books.update', $book->id);
    }

    public function validateBook(): array
    {
        return request()->validate([
            'title' => 'required',
            'chapters' => 'required',
            'author_id' => 'required',
            'doi' => 'required',
            'price' => 'required',
        ]);
    }
}
