<?php

namespace App\Http\Controllers\Admin;

use App\Journal;
use App\Author;
use App\Http\Controllers\Controller;
use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalsController extends Controller
{
    public function index()
    {
        $journals = Journal::orderBy('title', 'ASC')->paginate(10);

        $authors = Author::orderBy('name', 'ASC');

        return view('/admin/list-journals', compact('journals', 'authors'));
    }

    public function store(Request $request)
    {
        Journal::create($this->validateJournal());

        return redirect()->route('journals.create');
    }

    public function destroy($id)
    {
        $journal = Journal::where('id', $id)->delete();

        return redirect()->route('journals.index');
    }

    public function show(Journal $journal)
    {
        return view('admin.show-journals', ['journal' => $journal]);
    }

    public function edit(Journal $journal)
    {
        return view('admin.edit-journals', compact('journal'), [
            'authors' => auth()->user()->authorlist()
        ]);
    }

    public function update(Journal $journal)
    {
        $journal->update($this->validateJournal());

        return redirect()->route('journals.update', $journal->id);
    }

    public function validateJournal(): array
    {
        return request()->validate([
            'title' => 'required',
            'author_id' => 'required',
            'doi' => 'required',
            'price' => 'required',
        ]);
    }
}
