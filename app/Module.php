<?php

namespace App;

use App\Lesson;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function course()
	{
		return $this->belongsTo(Course::class, 'course_id', 'id');
 	}

 	public function lessons()
    {
        return $this->hasMany(Lesson::class,'module_id');
    }
}
