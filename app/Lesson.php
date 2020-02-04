<?php

namespace App;

use App\Module;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function module()
	{
 		return $this->belongsTo(Module::class, 'id');
 	}




}
