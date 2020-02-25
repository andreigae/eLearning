<?php

use App\Course;
use App\File;

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
            	'image' => 'assets/images/coverBig.jpg'

        	]);

            for($id=1;$id<=3;$id++)
            {
                $modules = $course->modules()->create([
                    'course_id' => $i,
                    'position' => $id,
                    'name' => "Module {$i}.{$id}: Primera Parte"
                ]);

                for($ids=1;$ids<=3;$ids++)
                {
                    $lessons = $modules->lessons()->create([
                        'name' => "Lesson for Course:{$course->id}, Module:{$id} ({$modules->id}), Esta clase es la clase:{$ids}, de este modulo",
                        'module_id' => $modules->id,
                        'position' => $ids,
                    ]);
                    for($idsx=1;$idsx<=3;$idsx++){
                        $lessons->files()->save(File::find($idsx)); // IDsx se utilizan en este caso como INDICE DE LOS REGISTOS DE FILES, AUNQUE IDS NO ESTA RELACIONADO, LOS REGISTROS SE GENERAN ANTES QUE LA TABLA DE CURSOS
                    }

                }
            }

       	}
    }
}
