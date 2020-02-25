<?php

use Illuminate\Database\Seeder;
use App\File;

class FilesLessonsSeeder extends Seeder
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
       		$file = File::create([
            	'name' => "File {$i}",
            	'path' => 'assets/images/coverBig.jpg'
        	]);


        }
    }
}
