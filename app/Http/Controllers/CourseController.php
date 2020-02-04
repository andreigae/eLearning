<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function getUserCourses()
    {

      //  $course = Course::findOrFail(1)->modules()->findOrFail(1)->lessons;
       // dd($course);

        //dd(auth()->user()->courses);

        $courses=[];
        if(auth()->check()){
            $courses = auth()->user()->courses;
        };




        return view('my-programs', [
            'courses' => $courses
        ]);
    }

    public function show(Course $course, $module=1, $lesson=1 )
    {
        $module = $course->modules()->findOrFail($module);
        $lesson = $module->lessons()->findOrFail($lesson);
        //$progres = $lesson->progress()->with($module->lessons);

        auth()->user()->progress()->sync([$lesson->id => ['status' => 1, 'module_id'=>$module->id, 'course_id'=>$course->id]], false);


        $datos2 = array (
            [
            "Modulo"=> 1,
            "ModuloTitle"=>"Sección 1: Introduccion al curso",
            ],
             [
            "Modulo"=> 2,
            "ModuloTitle"=>"Sección 2: Algunas herramientas",
            ]
        );

        $datos = array(
            [
                ["Modulo"=> 1,
                    "class"=>1,
                    "title0" => "58",
                    "title1" => "Desplegando y configurando Laravel en el VPS",
                    "Estado" => 1,
                    "onlyText"=>0,
                    "VideoDriver"=>"gdrive",
                    "videourl" => "1Q9d8dWDk9gbpRvB_bIzPP0lfHUENotgd",
                    "ShortDescription1" =>"",
                    "Description" =>
                        "Congratulations on<div>hola</div> <script>alert('holaa')</script> completing week one! As soon as you've finished watching all of the training videos in full please complete the action items below.

                                This is an 'implementation program' and to get results you must do the work. Completing the worksheets and uploading them to our action items storage system keeps all of your worksheets safe in one place. We refer back to these worksheets throughout the program so we recommend you upload them.

                                 A full overview of the program and the core parts we focus on to get results. This video is extremely important to understand the road ahead

                               ",
                    "Transcripcion" => "",

                ],

                ["Modulo"=> 1,
                    "class"=>2,
                    "title0" => "59",
                    "title1" => "Acerca de Letsencrypt y acme.sh como cliente",
                    "Estado" => 1,
                    "onlyText"=>0,
                    "VideoDriver"=>"gdrive",
                    "videourl" => "1RxAVP39WIoczLJlvUbVEsRcM17Tglsxe",
                    "Description" =>"",
                    "Transcripcion" => "",

                ]
            ]
        );

        $EncontrarReg = null;
        $findModule=null;
        $findClass=null;

        foreach( $datos[0] as $clave => $valor){

                $findModule=1;
                $findClass=1;

            if($findModule and $findClass){
                $EncontrarReg=1;
                array_push($datos, $valor); //2
                break;
            }else{
                $EncontrarReg=0;
            }
        }

        if($EncontrarReg==0){
            if($findModule==1){
                return redirect()->route('ShowClass', ['Modulo' =>($Modulo-1), "class"=>1]);
            }else{
                return redirect()->route('ShowClass', ['Modulo' =>1, "class"=>1]);
            };

        }

        $class=1;
        $ArrayLong=count($datos[0]);
        $nextClass=$class;
        $previewsClass=$class;

        if($class<=$ArrayLong ){
            if($class>1) $previewsClass=$class-1;
            if($class<$ArrayLong) $nextClass=$class+1; else $nextClass=$ArrayLong;

        }else{
            $nextClass=2;
            $previewsClass=1;
        }

        array_push($datos, ["next"=>$nextClass, "previews"=>$previewsClass]); // 2
        array_push($datos, $datos2); // 4

        // $datos[0] -> array Todas las clases
        // $datos[1] -> clase Actual
        // $datos[2] -> next - previews
        // $data[3] -> array Todos los modulos


        return view('courses.showcourse', [
            "data" => $datos,
            'course' => $course,
            'module' => $module,
            'lesson' => $lesson,
            'progress' => auth()->user()->progress
        ]);

    }


    public function getlink($url){
        $client = new Client(['verify' => false ]);
        $res  = $client->get('https://googledrivelaravel.dev/get/'.$url);
        $data = $res->getBody();
        $data = json_decode($data);
        return $data;
       // idvideo
    }







}



