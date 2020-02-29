<?php

use App\Course;
use App\User;
use Illuminate\Database\Seeder;

class CourseTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $modules = json_decode('[
	    				"Modulo 1: Introducción",
						"Modulo 2: Crear tu portfolio y ser tu propio cliente",
						"Modulo 3: Buscar clientes",
						"Modulo 4: Ser un profesional",
						"Proyecto Final"
					]', true);



		$lessons = json_decode('[
								   {
								      "name":"1. Presentación",
								      "module_id":1,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-01/1.mp4",
								      "recursos": []
								   },
								   {
								      "name":"2. Freelance = emprendedor",
								      "module_id":1,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-02/2.mp4",
								       "recursos": []
								   },
								   {
								      "name":"3. Construir un portfolio",
								      "module_id":2,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-03/1.mp4",
								      "recursos": []
								   },
								   {
								      "name":"4. Cómo presentarte a ti mismo",
								      "module_id":2,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-04/2.mp4",
								      "recursos": []
								   },
								   {
								      "name":"5. Encontrar clientes: dónde y cómo",
								      "module_id":3,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-05/1.mp4",
								      "recursos": []
								   },
								   {
								      "name":"6. Un representante",
								      "module_id":3,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-06/2.mp4",
								      "recursos": []
								   },
								   {
								      "name":"7. Construir una audiencia. Redes Sociales",
								      "module_id":3,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-07/3.mp4",
								      "recursos": []
								   },
								   {
								      "name":"8. Cómo poner precio a tu trabajo",
								      "module_id":4,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-08/1.mp4",
								      "recursos": []
								   },
								   {
								      "name":"9. El primer contacto",
								      "module_id":4,
									  "position":2,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-09/2.mp4",
									  "recursos": []
								   },
								   {
								      "name":"10. Un proceso de trabajo profesional",
								      "module_id":4,
									  "position":3,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-10/3.mp4",
								      "recursos": []
								   },
								   {
								      "name":"11. Administrar el tiempo y la organización",
								      "module_id":4,
									  "position":4,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-11/4.mp4",
								      "recursos": []
								   },
								   {
								      "name":"12. Fijar estándares en tu trabajo",
								      "module_id":4,
									  "position":5,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-12/5.mp4",
								      "recursos": []
								   },
								   {
								      "name":"13. Freelance: claves y herramientas para triunfar siendo tu propio jefe",
								      "module_id":5,
									  "position":1,
								      "type":"video",
								      "drive":"cloud",
								      "path":"courses/freelance/resource-13/cierre.mp4",
								      "recursos": []
								   }
								]', true);



       		$course = Course::create([
            	'name' => "Freelance: claves y herramientas para triunfar siendo tu propio jefe",
            	'image' => 'courses/freelance/introduction/intro.jpg',
            	'videointro' => 'courses/freelance/introduction/intro.mp4'

        	]);

       		User::find(1)->courses()->save($course);

       		$modules =  collect($modules);

       		$i=0;
        	foreach ($modules as $module){
        		$i++;
        		$moduleDB = $course->modules()->create([
                    'course_id' => $course->id,
                    'position' => $i,
                    'name' => $module
                ]);

				$Module_documents = collect($lessons)->whereIn('module_id', $i);

       	   		foreach($Module_documents as $lesson)
                {
                    $lessonDB = $moduleDB->lessons()->create([
                        'name' => $lesson['name'],
                        'module_id' => $lesson['module_id'],
                        'type' => $lesson['type'],
                        'position' => $lesson['position'],
                        'videourl' => $lesson['path'],
                        'videodriver' => $lesson['drive'],
                    ]);
                }


       	   }
       	}


}