<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorsController extends Controller
{
    public function index(){
        // Get a list of books
        $books = Book::orderBy('title', 'ASC')->paginate(5);

        // Get a list of authors
        $authors = Author::orderBy('name', 'ASC')->paginate(5);

        return view('/admin/list-authors', compact('books', 'authors'));
    }

    public function store(Request $request){

        Author::create($this->validateAuthor());

        return redirect()->route('authors.create');
    }

    public function destroy($id){
        $author = Author::where('id', $id)->delete();

        return redirect()->route('authors.index');
    }

    public function show(Author $author){
        return view('admin.show-authors', ['author' => $author]);
    }

    public function edit(Author $author){
        return view('admin.edit-authors', compact('author'));
    }

    public function update(Author $author){

        $author->update($this->validateAuthor());

        return redirect()->route('authors.update', $author->id);
    }

    /**
     * @return array
     */
    public function validateAuthor(): array
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_num' => 'required',
            'affiliation' => 'required',
        ]);
    }
}
