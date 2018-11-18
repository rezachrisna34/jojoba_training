<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model
{
    protected $table = 'book';

    public function get_author()
	{
		dd('get_author');
	}
}
