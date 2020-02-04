@push('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
<style>
    @media (max-width: 768px) {
        .plyr__volume {
            display: none!important;
        }
    }
</style>
@endpush

<div class="card">

    @if($data[1]["VideoDriver"] == "gdrive")


    @if(isset($data[4]['udemy']))
    <div class="cardnobordervideo">
        <video id="myVideo2" preload="none"  rel="preload"   class="js-player " playsinline controls poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
            <source id="mp4_src" src="{{$data[4]['url']}}"/>
        </video>
    </div>
    @else
     <div class="cardnobordervideo">
        <video id="myVideo" preload="none"  rel="preload"   class="js-player " playsinline controls poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
            <source id="mp4_src" src="https://googledrivelaravel.dev/getfiles/{{ $data[1]["videourl"] }}"/>
        </video>
    </div>

    @endif


    @else
        <div class="embed-responsive embed-responsive-16by9 vimeoembed" >
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
        </div>
    @endif


    <div class="row d-none  d-md-flex d-lg-flex" style="padding: 10px; ">
        <div class="col">

             @if($data[1]['class']>1)
                <a type="button" class="btn btn-dark" href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>$data[2]["previews"])) }}">
                    <i class="material-icons mr-1">chevron_left</i> Lección Anterior
                </a>
            @else
                <a type="button" class="btn btn-secondary disabled"  href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>1)) }}">
                    <i class="material-icons mr-1">chevron_left</i> Lección Anterior
                </a>
            @endif


        </div>

        <div class="col text-right">

           <a type="button" class="btn btn-dark" href="{{ URL::route('ShowClass', array('Modulo' => $data[1]['Modulo'], "class"=>  $data[2]["next"])) }}">
                Lección Siguiente  <i class="material-icons mr-1">chevron_right</i>
            </a>

        </div>
    </div>


</div>










@push('scripts')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.6/plyr.js"></script>
 <script>


        document.addEventListener('DOMContentLoaded', () => {
           const controls = [
            'play-large', // The large play button in the center
            // 'restart', // Restart playback
            // 'rewind', // Rewind by the seek time (default 10 seconds)
            'play', // Play/pause playback
            // 'fast-forward', // Fast forward by the seek time (default 10 seconds)
            'progress', // The progress bar and scrubber for playback and buffering
            'current-time', // The current time of playback
            'duration', // The full duration of the media
            'mute', // Toggle mute
            'volume', // Volume control
            'captions', // Toggle captions
            'settings', // Settings menu
            //'pip', // Picture-in-picture (currently Safari only)
            'airplay', // Airplay (currently Safari only)
            // 'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
            'fullscreen' // Toggle fullscreen
        ];

        const player = new Plyr('.js-player', { controls });
        player.on('loadeddata', () => { player.currentTime = player.currentTime; });

        });
    </script>
@endpush



