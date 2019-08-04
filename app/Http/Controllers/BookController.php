<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    
    public function addBook(Request $request){
        $book = new Book;
        $book->book_name = $request->nama;
        $book->book_color = $request->warna;
        $book->book_year = $request->tahun;
        $book->save();
    }
    public function checkBook(){
        $books = Book::All();
        return view('homepage',compact('books'));
    }

    public function update(Request $request){
        $book = Book::findorfail($request->id);
        $book->book_name = $request->nama;
        $book->book_color = $request->warna;
        $book->book_year = $request->tahun;
        $book->save();
    }

    public function delete(Request $request){
        $book = Book::findorfail($request->id);
        $book->delete();
    }
    
    public function updateView(Request $request)
    {
        $book = Book::findorfail($request->id);
        return view('addBook',compact('book'));
    }
}



