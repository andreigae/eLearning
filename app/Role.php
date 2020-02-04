<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
	{
		//return $this->hasOne(User::class); // Metodo HasOne devuelve un solo objeto
 		return $this->hasMany(User::class); // Metodo hasMany, devuelve todos los objetos que estan relacionados con el rol
	}
}
