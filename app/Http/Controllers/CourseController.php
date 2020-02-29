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
            'PaginaAnterior' => '',
            'PaginaSiguiente' => ''
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



