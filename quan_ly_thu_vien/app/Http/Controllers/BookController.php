<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatFormRequest;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('admin.list', compact('books'));
    }

    public function createBook()
    {
        return view('admin.create');
    }

    public function store(CreatFormRequest $request)
    {
        $book = new Books();
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->category = $request->input('category');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $book->image = $path;
        };
        $book->save();
        return redirect()->route('home');
    }

    public function editBook($id)
    {
        $book = Books::findOrFail($id);
        return view('admin.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Books::findOrFail($id);
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->category = $request->input('category');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $book->image = $path;
        };
        $book->save();
        return redirect()->route('home');
    }

    public function delete($id)
    {
        Books::where('id', $id)->first()->delete();
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $books = Books::where('name','LIKE','%'.$keyword.'%')->get();
        return view('admin.list', compact('books'));
    }
}
