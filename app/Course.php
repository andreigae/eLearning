<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

	// // Reescribir el motodo de busqueda de laravel, buscar por url en vez de por id -> URL AMIGABLE
	// public function getRouteKeyName()
	// {
	// 	return 'slug';
	// }
	public function user()
	{
 		return $this->belongsTo(User::class, 'id');
	}

	public function modules()
    {
        return $this->hasMany(Module::class,'course_id');
    }




}
