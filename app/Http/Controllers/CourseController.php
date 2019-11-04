<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{







    public function show($Modulo, $class )
    {

        $datos = array(
            [
                ["Modulo"=> 1,
                    "class"=>1,
                    "title0" => "1",
                    "title1" => "Introduccion",
                    "Estado" => 1,
                    "onlyText"=>0,
                    "videourl" => "",
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
                    "title0" => "2",
                    "title1" => "The MVC architectural pattern",
                    "Description" =>"",
                    "Estado" => 1,
                    "onlyText"=>0,

                ],

                ["Modulo"=> 1,  "class"=>3, "title0" => 3,"title1" => "Database Models", "Description" =>"","Estado" => 1,"onlyText"=>0],
                ["Modulo"=> 1, "class"=>4, "title0" => 4,"title1" => "Database Access", "Description" =>"","Estado" => 1,"onlyText"=>0],
                ["Modulo"=> 1, "class"=>5, "title0" => 5,"title1" => "Eloquent Basics", "Description" =>"","Estado" => 0,"onlyText"=>0],
                ["Modulo"=> 1, "class"=>6,"title0" => 6,"title1" => "Take Quiz", "Description" =>"","Estado" => 1,"onlyText"=>0],
                ["Modulo"=> 1, "class"=>7,"title0" => 7,"title1" => "Action Items", "Description" =>"", "Estado" => 0,"onlyText"=>1],
            ]
        );

        /*
            [
                'Modulo' => $Modulo, 'class' =>$class,
            ],
        */

        $EncontrarReg = null;
        $findModule=null;
        $findClass=null;

        foreach( $datos[0] as $clave => $valor){

            if($Modulo==$valor['Modulo']){
                $findModule=1;
            }

            if($class==$valor['class']){
                $findClass=1;
            }


            if($findModule and $findClass){
                $EncontrarReg=1;
                array_push($datos, $valor);
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

        array_push($datos, ["next"=>$nextClass, "previews"=>$previewsClass]);


        return view('view-course-tasks', ["data" => $datos] );

    }
}
