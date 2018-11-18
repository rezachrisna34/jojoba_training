<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BookModel;

class BookController extends Controller
{
	function __construct($foo = null)
	{
		// $this->BookModel = new BookModel;
		$this->BookModelAuthor = new BookModel;
	}

    public function index(Request $request, $author = 0, $nama = 0)
    {
    	dd($this->BookModelAuthor->get_book());
    }

    public function book_save(Request $request)
    {
    	for ($i=1; $i < 51; $i++) { 
			$book         = new BookModel;
			$book->id     = $i;
			$book->nama   = 'Book_'.$i;
			$book->author = '0';
			$save         = $book->save();
    	}
    }
}
