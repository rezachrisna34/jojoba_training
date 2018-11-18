<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
	protected $table = 'book';

    function __construct($author = null, $nama = null)
    {
		$this->id     = random_int(0, 100);
		$this->author = $author;
		$this->nama   = $nama;
    }

	public function get_book()
	{
		$table = $this->get($this->_table);
		dd($table);
	}

	public function get_author()
	{
		dd($this->author);
	}
}
