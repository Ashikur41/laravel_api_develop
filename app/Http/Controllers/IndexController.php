<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class IndexController extends Controller
{
    public function bookStore(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->year_of_publication = $request->year_of_publication;
        $book->isbn = $request->isbn;
        $book->copies_available = $request->copies_available;
        // $book->save();
     
        return response()->json($book);
    }

}
