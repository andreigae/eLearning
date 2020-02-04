<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            	'course_id' => 1,
            	'name' => 'Module 1.1: Primera Parte'
        ]);

        Module::create([
            	'course_id' => 1,
            	'name' => 'Module 1.2: Segunda Parte'
        ]);

        Module::create([
            	'course_id' => 1,
            	'name' => 'Module 1.3: Tercera Parte'
        ]);


        Module::create([
            	'course_id' => 2,
            	'name' => 'Module 2.1: Primera Parte'
        ]);

        Module::create([
            	'course_id' => 2,
            	'name' => 'Module 2.2: Segunda Parte'
        ]);

        Module::create([
            	'course_id' => 2,
            	'name' => 'Module 2.3: Tercera Parte'
        ]);
    }
}
