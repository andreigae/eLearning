<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++)
       	{
       		$course = Course::create([
            	'name' => "Course {$i}",
            	'slug' => "course-{$i}",
            	'image' => 'assets/images/coverBig.jpg'

        	]);
       	}
    }
}
