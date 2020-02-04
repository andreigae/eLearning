<?php

use App\Course;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador de la plataforma'
        ]);

        $role2 = Role::create([
            'name' => 'teacher',
            'display_name' => 'Profesor',
            'description' => 'Profesor  de la plataforma'
        ]);

        $role3 = Role::create([
            'name' => 'student',
            'display_name' => 'Estudiante',
            'description' => 'Estudiante de la plataforma'
        ]);



        $user1 = User::create([
            'name' => 'Andrei',
            'email' => 'gae.andrei@gmail.com',
            'password' => 'andrei1226',
            'avatar'=>'assets\images\people\50\guy-6.jpg'
        ]);
        $user1->roles()->save($role1);
        $user1->courses()->save(Course::find(1));
        $user1->courses()->save(Course::find(2));
        $user1->courses()->save(Course::find(3));
        $user1->courses()->save(Course::find(4));

        $user2 =User::create([
            'name' => 'Adin',
            'email' => 'gae.adin@gmail.com',
            'password' => 'andrei1226',
            'avatar'=>'assets\images\people\50\guy-2.jpg'
        ]);
        $user2->roles()->save($role2);
        $user2->courses()->save(Course::find(2));
        $user3 =User::create([
            'name' => 'Iosif',
            'email' => 'gae.iosif@gmail.com',
            'password' => 'andrei1226',
            'avatar'=>'assets\images\people\50\guy-2.jpg'
        ]);
        $user3->roles()->save($role3);
    }
}
