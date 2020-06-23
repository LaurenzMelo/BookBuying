<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(){
        return view('admin.list-books', [
            'books' => auth()->user()->bookPaginate(),
            'authors' => auth()->user()->authorlist(),

        ]);
    }

    public function store(Request $request){

        Book::create($this->validateBook());

        return redirect()->route('list-books');
    }

    public function destroy($id){

        $book = Book::where('id', $id)->delete();

        return redirect()->route('list-books');
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

        return redirect('admin/list-books/' . $book->id);
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
