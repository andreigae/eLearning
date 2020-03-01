@push('styles')
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <style type="text/css">
        /* https://unpkg.com/@videojs/themes@1/dist/forest/index.css */
        .vjs-theme-forest{--vjs-theme-forest--primary:#2196f3;--vjs-theme-forest--secondary:#fff}.vjs-theme-forest.vjs-big-play-button:focus,.vjs-theme-forest:hover .vjs-big-play-button{background-color:transparent;background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='88' fill='%236fb04e'%3E%3Cpath fill-rule='evenodd' d='M44 88C19.738 88 0 68.262 0 44S19.738 0 44 0s44 19.738 44 44-19.738 44-44 44zm0-85C21.393 3 3 21.393 3 44c0 22.608 18.393 41 41 41s41-18.392 41-41C85 21.393 66.607 3 44 3zm16.063 43.898L39.629 60.741a3.496 3.496 0 01-3.604.194 3.492 3.492 0 01-1.859-3.092V30.158c0-1.299.712-2.483 1.859-3.092a3.487 3.487 0 013.604.194l20.433 13.843a3.497 3.497 0 01.001 5.795zm-1.683-3.311L37.946 29.744a.49.49 0 00-.276-.09.51.51 0 00-.239.062.483.483 0 00-.265.442v27.685c0 .262.166.389.265.442.1.053.299.118.515-.028L58.38 44.414A.489.489 0 0058.6 44a.49.49 0 00-.22-.413z'/%3E%3C/svg%3E")}.vjs-theme-forest .vjs-big-play-button{width:88px;height:88px;background:none;background-repeat:no-repeat;background-position:50%;background:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='88' fill='%23fff'%3E%3Cpath fill-rule='evenodd' d='M44 88C19.738 88 0 68.262 0 44S19.738 0 44 0s44 19.738 44 44-19.738 44-44 44zm0-85C21.393 3 3 21.393 3 44c0 22.608 18.393 41 41 41s41-18.392 41-41C85 21.393 66.607 3 44 3zm16.063 43.898L39.629 60.741a3.496 3.496 0 01-3.604.194 3.492 3.492 0 01-1.859-3.092V30.158c0-1.299.712-2.483 1.859-3.092a3.487 3.487 0 013.604.194l20.433 13.843a3.497 3.497 0 01.001 5.795zm-1.683-3.311L37.946 29.744a.49.49 0 00-.276-.09.51.51 0 00-.239.062.483.483 0 00-.265.442v27.685c0 .262.166.389.265.442.1.053.299.118.515-.028L58.38 44.414A.489.489 0 0058.6 44a.49.49 0 00-.22-.413z'/%3E%3C/svg%3E");border:none;top:50%;left:50%;margin-top:-44px;margin-left:-44px;color:purple}.vjs-theme-forest .vjs-big-play-button .vjs-icon-placeholder{display:none}.vjs-theme-forest .vjs-button>.vjs-icon-placeholder:before{line-height:1.55}.vjs-theme-forest .vjs-control:not(.vjs-disabled):not(.vjs-time-control):hover{color:var(--vjs-theme-forest--primary);text-shadow:var(--vjs-theme-forest--secondary) 1px 0 10px}.vjs-theme-forest .vjs-control-bar{background:none;margin-bottom:1em;padding-left:1em;padding-right:1em}.vjs-theme-forest .vjs-play-control{font-size:.8em}.vjs-theme-forest .vjs-play-control .vjs-icon-placeholder:before{background-color:var(--vjs-theme-forest--secondary);height:1.5em;width:1.5em;margin-top:.2em;border-radius:1em;color:var(--vjs-theme-forest--primary)}.vjs-theme-forest .vjs-play-control:hover .vjs-icon-placeholder:before{background-color:var(--vjs-theme-forest--primary);color:var(--vjs-theme-forest--secondary)}.vjs-theme-forest .vjs-mute-control{display:none}.vjs-theme-forest .vjs-volume-panel{margin-left:.5em;margin-right:.5em;padding-top:.3em}.vjs-theme-forest .vjs-volume-bar.vjs-slider-horizontal,.vjs-theme-forest .vjs-volume-panel,.vjs-theme-forest .vjs-volume-panel.vjs-volume-panel-horizontal:hover,.vjs-theme-forest .vjs-volume-panel:active .vjs-volume-control.vjs-volume-horizontal,.vjs-theme-forest .vjs-volume-panel:hover,.vjs-theme-forest .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-horizontal{width:3em}.vjs-theme-forest .vjs-volume-level:before{font-size:1em}.vjs-theme-forest .vjs-volume-panel .vjs-volume-control{opacity:1;width:100%;height:100%}.vjs-theme-forest .vjs-volume-bar{background-color:transparent;margin:0}.vjs-theme-forest .vjs-slider-horizontal .vjs-volume-level{height:100%}.vjs-theme-forest .vjs-volume-bar.vjs-slider-horizontal{margin-top:0;margin-bottom:0;height:100%}.vjs-theme-forest .vjs-volume-bar:before{content:"";z-index:0;width:0;height:0;position:absolute;top:0;left:0;border-left:3em solid transparent;border-bottom:2em solid var(--vjs-theme-forest--primary);border-right:0 solid transparent;border-top:0 solid transparent}.vjs-theme-forest .vjs-volume-level{overflow:hidden;background-color:transparent}.vjs-theme-forest .vjs-volume-level:before{content:"";z-index:1;width:0;height:0;position:absolute;top:0;left:0;border-left:3em solid transparent;border-bottom:2em solid var(--vjs-theme-forest--secondary);border-right:0 solid transparent;border-top:0 solid transparent}.vjs-theme-forest .vjs-progress-control:hover .vjs-progress-holder{font-size:1em}.vjs-theme-forest .vjs-play-progress:before{display:none}.vjs-theme-forest .vjs-progress-holder{border-radius:.2em;height:.5em;margin:0}.vjs-theme-forest .vjs-load-progress,.vjs-theme-forest .vjs-load-progress div,.vjs-theme-forest .vjs-play-progress{border-radius:.2em}

        .vjs-theme-forest .vjs-play-control .vjs-icon-placeholder:before {
            background-color: var(--vjs-theme-forest--secondary);
            height: 45px;
            width: 45px;
            margin-top: -8px;
            border-radius: 1em;
            color: var(--vjs-theme-forest--primary);
        }
        .vjs-theme-forest .vjs-play-control {

            width: 60px;
        }
        .vjs-play-control:focus {
            outline: none;
        }

        .vjs-picture-in-picture-control:focus {
            outline: none;
        }

        .vjs-fullscreen-control:focus {
            outline: none;
        }

        .video-js .vjs-time-control {
            font-size: 15px;
            line-height: 2em;
            margin-top: 5px;
        }

        .vjs-button > .vjs-icon-placeholder:before {
            font-size: 30px;
            line-height: 2em;
        }

        .vjs-fullscreen-control > .vjs-icon-placeholder:before{
            margin-top: -13px!important;
             font-size: 40px;
        }
        .vjs-picture-in-picture-control > .vjs-icon-placeholder:before{
             margin-top: -2px!important;
             font-size: 28px;
        }

        .vjs-theme-forest.vjs-big-play-button:focus, .vjs-theme-forest:hover .vjs-big-play-button {
            background-color: transparent;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='88' fill='%23fff'%3E%3Crect id='backgroundrect' width='100%25' height='100%25' x='0' y='0' fill='none' stroke='none'/%3E%3Cg class='currentLayer' style=''%3E%3Ctitle%3ELayer 1%3C/title%3E%3Cpath fill-rule='evenodd' d='M44 88C19.738 88 0 68.262 0 44S19.738 0 44 0s44 19.738 44 44-19.738 44-44 44zm0-85C21.393 3 3 21.393 3 44c0 22.608 18.393 41 41 41s41-18.392 41-41C85 21.393 66.607 3 44 3zm16.063 43.898L39.629 60.741a3.496 3.496 0 01-3.604.194 3.492 3.492 0 01-1.859-3.092V30.158c0-1.299.712-2.483 1.859-3.092a3.487 3.487 0 013.604.194l20.433 13.843a3.497 3.497 0 01.001 5.795zm-1.683-3.311L37.946 29.744a.49.49 0 00-.276-.09.51.51 0 00-.239.062.483.483 0 00-.265.442v27.685c0 .262.166.389.265.442.1.053.299.118.515-.028L58.38 44.414A.489.489 0 0058.6 44a.49.49 0 00-.22-.413z' id='svg_1' class='selected' fill='%232196f3' fill-opacity='1'/%3E%3C/g%3E%3C/svg%3E");
        }

        .vjs-theme-forest .vjs-progress-holder {
            border-radius: .2em;
            height: 10px;
            margin: 0;
        }

        .vjs-time-tooltip{
            font-size: 12px!important;
        }

        .vjs-theme-forest .vjs-play-control .vjs-icon-placeholder:before {
            background-color: #ffffff;
            color: #2196f3;
        }
        .vjs-theme-forest .vjs-play-control:hover .vjs-icon-placeholder:before {
             background-color: #2196f3;
             color: #ffffff;
        }

        .vjs-theme-forest .vjs-volume-level:before {
            border-left: 3em solid transparent;
            border-bottom: 2em solid #ffffff;
        }

        .vjs-theme-forest .vjs-control-bar {
            margin-bottom: 0;
            padding-left: 1em;
            padding-right: 1em;
            background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.7));
            padding-bottom: 45px;
            padding-top: 20px;
        }

        .vjs-theme-forest .vjs-progress-holder {
            margin-top: 38px!important;
        }

        .vjs-theme-forest .vjs-volume-panel {
            max-width: 30px;
            height: 25px;
             margin-top: 8px;
        }


        .video-js .vjs-control {
            padding: 0!important;
        }

        .vjs-playback-rate:focus {
            outline: none;
        }
        .vjs-playback-rate {
            height: 39px!important;
            margin-top: 3px!important;
            font-size: 11px;
            padding: 0px!important;
            margin-left: 6px!important;
        }

        .vjs-menu-content{
              min-width: 45px!important;
              overflow-y: hidden!important;
          }


    </style>

@endpush



<div class="card" style="border: none!important;">

        <div class="cardnobordervideo">


             @if($lesson->videodriver != "gdrive")



                <video class="video-js vjs-theme-forest vjs-16-9 vjs-fluid vjs-default-skin  {{-- vjs-has-started vjs-paused --}}"
                    id="my-video"
                    controls
                    preload="auto"
                    poster="{{ $videopreview }}"
                    data-setup='{ "playbackRates": [0.50,0.75, 1, 1.25, 1.50, 1.75, 2] }'
                >
                <source src="{{ $videourl }}" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
                </video>
        </div>

    @else
       {{--  <div class="plyr__video-embed embed-responsive embed-responsive-16by9 js-player" id="player">
            <iframe src="https://player.vimeo.com/video/97243285?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media&amp; autoplay=1 " allowfullscreen allowtransparency allow="autoplay"></iframe>
        </div> --}}

{{-- autoplay=1 --}}

        <div class="embed-responsive embed-responsive-16by9 vimeoembed" >
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
        </div>
    @endif










    <div class="row d-none  d-md-flex d-lg-flex" style="padding: 10px; ">
        <div class="col">

             @if($first)
                <a type="button" class="btn btn-secondary disabled"  href="#">
                    <i class="material-icons mr-1">chevron_left</i> Lección Anterior
                </a>
             @else
                <a type="button" class="btn btn-dark" href="{{ URL::route('ShowCouseLesson', $PaginaAnterior)}}">
                    <i class="material-icons mr-1">chevron_left</i> Lección Anterior
                </a>
            @endif

        </div>

        <div class="col text-right">

            @if($latest)
                <a type="button" class="btn btn-primary" href="/final">
                    Felicidades  <i class="material-icons mr-1">chevron_right</i>
                </a>
            @else
                <a type="button" class="btn btn-dark" href="{{ URL::route('ShowCouseLesson', $PaginaSiguiente)}}">
                    Lección Siguiente  <i class="material-icons mr-1">chevron_right</i>
                </a>
            @endif

        </div>
    </div>
</div>




@push('scripts')
 <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
 <script src="http://localhost/js/videojs.persistvolume.js"></script>


 <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
 <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


 <script type="text/javascript">
(function() {
      var vid1 = videojs('my-video');


      console.log(vid1);
      vid1.persistvolume({
        namespace: "VideoJs"
      });
    })();
 </script>
@endpush



