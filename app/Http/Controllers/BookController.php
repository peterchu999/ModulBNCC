<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function AddBook(Request $request){
        $book = new Book;
        $book->book_name = $request->nama;
        $book->book_color = $request->warna;
        $book->book_year = $request->tahun;
        $book->save();
    }
    public function CheckBook(){
        $book = Book::All();
        return view('welcome',compact('book'));
    }

    public function Update(Request $request){
        $book = Book::findorfail($request->id);
        $book->book_name = $request->nama;
        $book->book_color = $request->warna;
        $book->book_year = $request->tahun;
        $book->save();
    }

    public function Delete(Request $request){
        $book = Book::findorfail($request->id);
        $book->delete();
    }
}



