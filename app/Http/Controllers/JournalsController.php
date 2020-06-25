<?php

namespace App\Http\Controllers;

use App\Author;
use App\Journal;
use Illuminate\Http\Request;

class JournalsController extends Controller
{
    public function index()
    {
        $journals = Journal::orderBy('title', 'ASC')->paginate(10);

        $authors = Author::orderBy('name', 'ASC');

        return view('/admin/list-journals', compact('journals', 'authors'));
    }

    public function show(Journal $journal)
    {
    }
}
