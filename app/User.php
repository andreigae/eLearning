<?php

namespace App;

use App\Course;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // LO MEJOR PARA GUARDAR / Actualizar la Contraseña
    public function setPasswordAttribute($password){

        $this->attributes['password'] = Hash::make($password);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'assigned_roles');
    }

    public function courses()
    {
        // return $this->belongsToMany(Course::class, 'assigned_courses');
        return $this->belongsToMany(Course::class, 'assigned_courses')
                        ->withPivot([
                            'user_id',
                            'course_id',
                            'progress'
                        ])->withTimestamps();
    }

    public function progress()
    {
        return $this->belongsToMany(Lesson::class, 'asigned_progress')->withPivot([
                            'user_id',
                            'lesson_id',
                            'status'
                        ])->withTimestamps();
    }





}
