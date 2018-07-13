<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model {
	protected $table = 'blog_posts';
	//variable para que nos permita insertar datos.
	protected $fillable = ['title', 'content'];
}