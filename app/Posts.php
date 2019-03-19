<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
	
	
	   protected $fillable = [
        'user_id', 'title', 'description', 'status'
    ];

	
     protected $table = 'posts'; // the table name we make through migration is todo 
}
