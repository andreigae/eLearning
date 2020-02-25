<footer class="fixed-bottom d-md-none d-xs-block ">
    <div class="row p-1 " style=" background:#fff; border-top: 1px solid #e6e6e6">
        {{-- <div class="col">
            @if($lesson->position>1)
                <button type="button" class="btn" style="padding-top:3px; padding-bottom:3px;">
                    <i class="text-primary fa fa-angle-left pr-1" style="font-size:28px;"></i>
                    <a style="text-decoration: none;" href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id, 'module'=>$module->position, 'lesson'=>$lesson->position-1 ])}}"> Lección Anterior </a>
                </button>
             @else
                @if($module->position > $modules->first()->position)
                    <button type="button" class="btn" style="padding-top:3px; padding-bottom:3px;">
                        <i class="text-primary fa fa-angle-left pr-1" style="font-size:28px;"></i>
                        <a style="text-decoration: none;" href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id, 'module'=>$module->position-1, 'lesson'=>$course->modules()->findOrFail($module->position-1)->lessons()->latest('position')->first()->position ])}}">Lección Anterior </a>
                    </button>
                @endif
            @endif


        </div>
        <div class="col text-right">
            <button type="button" class="btn" style="padding-top:3px; padding-bottom:3px;">

                 @if($lesson->position+1>$module->lessons->count())
                        @if($course->modules()->find($module->position))
                           <a  style="text-decoration: none;" href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id, 'module'=>$module->position+1, 'lesson'=>1 ])}}">Lección Siguiente</a>
                        @else
                           <a  style="text-decoration: none;" href="/final">Felicidades  </a>
                        @endif
                   @else
                    <a  style="text-decoration: none;" href="{{ URL::route('ShowCouseLesson', ['course'=>$course->id, 'module'=>$module->position, 'lesson'=>$lesson->position+1 ])}}">Lección Siguiente</a>
                @endif
                <i class="text-primary fa fa-angle-right pl-1" style="font-size:26px;"></i>
            </button>
        </div> --}}
    </div>
</footer>




