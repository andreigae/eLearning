<footer class="fixed-bottom d-md-none d-xs-block ">
    <div class="row p-1 " style=" background:#fff; border-top: 1px solid #e6e6e6">
        <div class="col">

            @if($data[1]['class']>1)
                <button type="button" class="btn" style="padding-top:3px; padding-bottom:3px;">
                    <i class="text-primary fa fa-angle-left pr-1" style="font-size:28px;"></i>
                    <a style="text-decoration: none;" href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>$data[2]["previews"])) }}"> Lección Anterior </a>
                </button>
            @endif
        </div>
        <div class="col text-right">
            <button type="button" class="btn" style="padding-top:3px; padding-bottom:3px;">
                <a  style="text-decoration: none;" href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>  $data[2]["next"])) }}">Lección Siguiente</a>
                <i class="text-primary fa fa-angle-right pl-1" style="font-size:26px;"></i>
            </button>
        </div>
    </div>
</footer>
