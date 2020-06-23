<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index(){

        return view('admin.list-authors',[
            'authors' => auth()->user()->authorPaginate(),
            'books' => auth()->user()->booklist()
        ]);
    }

    public function store(Request $request){

        Author::create($this->validateAuthor());

        return redirect()->route('list-authors');
    }

    public function destroy($id){
        $author = Author::where('id', $id)->delete();

        return redirect()->route('list-authors');
    }

    public function show(Author $author){
        return view('admin.show-authors', ['author' => $author]);
    }

    public function edit(Author $author){
        return view('admin.edit-authors', compact('author'));
    }

    public function update(Author $author){

        //$book = Book::find($id);
        $author->update($this->validateAuthor());

        return redirect('admin/list-authors/' . $author->id);
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
