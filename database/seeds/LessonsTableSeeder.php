<?php

use App\Lesson;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=8;$i++)
       	{
       		$course = Lesson::create([
            	'name' => "Lesson 1.{$i}",
            	'module_id' => 1
        	]);
       	}

       	for($i=1;$i<=8;$i++)
       	{
       		$course = Lesson::create([
            	'name' => "Lesson 2.{$i}",
            	'module_id' => 2
        	]);
       	}
    }
}
