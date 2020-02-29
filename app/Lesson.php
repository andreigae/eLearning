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

 	public function files()
    {
        return $this->belongsToMany(File::class, 'assigned_files');
    }



}
