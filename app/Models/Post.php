<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

	protected $table = TABLE_PREFIX . 'posts';

	public $timestamps = false;


}