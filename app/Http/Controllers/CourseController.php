<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUserCourses()
    {
        $courses = auth()->user()->courses;
        foreach($courses as $course){
          $course->image  = Storage::disk('miniopublic')->url($course->image);
        }

        return view('my-programs', [
            'courses' => $courses
        ]);
    }

    public function show(Course $course, $module=1, $lesson=1 )
    {
        /** ESTE CODIGO FUNCIONA PERO ESTA BIEN ESTRUCTURADO!! ??? **/
        $UserCourse = auth()->user()->courses()->findOrFail($course);
        $Current_Course_All_modules = $UserCourse->modules;
        $Current_Module =  $course->modules()->where('position', $module)->firstOrFail();
        $Module_LessonsDATA = Lesson::where("module_id", $Current_Module->id );
        $Module_Lessons=[];




        if($Module_LessonsDATA->exists()){
           $Module_Lessons = $Module_LessonsDATA->get();
        }else{
             return abort(404);
        }

        $Current_Lesson = $Module_LessonsDATA->where('position', $lesson)->firstOrFail();

        // END OK ------------------------------------------------------------------------
        $Current_lesson_files = $Current_Lesson->files;
        auth()->user()->progress()->sync([$Current_Lesson->id => ['status' => 1, 'module_id'=>$Current_Module->id, 'course_id'=>$course->id]], false);



        // $urlVideo = Storage::disk('minio')->temporaryUrl(
        //     'courses/vps-server/resource-00/introduction.mp4', Carbon::now()->addMinutes(30)
        // );

        // $videopreview = Storage::disk('minio')->temporaryUrl(
        //     'courses/vps-server/resource-00/vps-server.jpg', Carbon::now()->addMinutes(30)
        // );



        // $urlVideo = Storage::disk('miniopublic')->url('courses/facebook-ads/introduction/intro.mp4');



        if(  $Current_Lesson->videopreview!=null){
            $videopreview = Storage::disk('minio')->temporaryUrl(
                $Current_Lesson->videopreview, Carbon::now()->addMinutes(30)
            );

        }else{
            $videopreview=null;
        }


        if(  $Current_Lesson->videourl!=null){
         $urlVideo = Storage::disk('minio')->temporaryUrl(
             $Current_Lesson->videourl, Carbon::now()->addMinutes(30)
         );
        }else{
             $urlVideo=null;
        }



        // --- PAGINACION ---

        // BACK
         $first = false;
         if($Current_Lesson->position>1){
            // Esta no es la primera clase del modulo, pudo ir hacia atras
            $PaginaAnterior = ['course'=>$UserCourse->id, 'module'=>$Current_Module->position, 'lesson'=>$Current_Lesson->position-1 ];
         }else{
            // Esta ES LA PRIMERA CLASE DEL MODULO, hay que comprobar si se trata del pimer modulo o es otro
            if($Current_Module->position == $UserCourse->modules()->where('position', 1)->firstOrFail()->position){
                // ESTA CLASE PERTENECE AL PRIMER MODULO, del curso, BLOQUEAR BACK BOTON
                $PaginaAnterior = ['course'=>$course->id, 'module'=>1, 'lesson'=>1 ];
                $first = true;
            }else{
                // ESTA CLASE NO PERTENECE al primer modulo, PERO SI ES LA PRIMERA DEL MODULO, Hay que regresar al modulo anterior y su correspondiente ultima clase
                $PaginaAnterior = ['course'=>$UserCourse->id, 'module'=>$Current_Module->position-1, 'lesson'=>$UserCourse->modules()->where('position', ($Current_Module->position-1))->firstOrFail()->lessons()->latest('position')->first()->position];
            }
         }


        // NEXT
        $latest = false;
        if($Current_Lesson->position+1>$Current_Module->lessons->count()){
                if($UserCourse->modules()->where('position', ($Current_Module->position+1))->first()){
                    // IR AL MODULO SIGUIENTE
                    $PaginaSiguiente = ['course'=>$UserCourse->id, 'module'=>$Current_Module->position+1, 'lesson'=>1];
                }else{
                    // NO HAY MAS MODULOS, El Curso se ha acabado
                    $PaginaSiguiente = ['course'=>$UserCourse->id, 'module'=>1, 'lesson'=>1 ];
                    $latest = true;
                }
           }else{
            // aun quedan lecciones en el modulo, IR A LA SIGUIENTE CLASE
             $PaginaSiguiente = ['course'=>$UserCourse->id, 'module'=>$Current_Module->position, 'lesson'=>$Current_Lesson->position+1 ];
         }



        return view('courses.showcourse', [
            'course' => $UserCourse,
            'modules' => $Current_Course_All_modules,
            'module' => $Current_Module,
            'lessons' => $Module_Lessons,
            'lesson' => $Current_Lesson,
            'videourl' => $urlVideo,
            'videopreview' => $videopreview,
            'files' => $Current_lesson_files,
            'progress' => auth()->user()->progress,
            'PaginaAnterior' => $PaginaAnterior,
            'PaginaSiguiente' => $PaginaSiguiente,
            'first' => $first,
            'latest' => $latest
        ]);

    }


    public function getlink($url){
        $client = new Client(['verify' => false ]);
        $res  = $client->get('https://googledrivelaravel.dev/get/'.$url);
        $data = $res->getBody();
        $data = json_decode($data);
        return $data;

    }







}



