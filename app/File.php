<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
     public function user()
	{
		return $this->hasMany(Lesson::class);
	}
}
