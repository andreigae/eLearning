<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Skins | HTML5 Video Player | Video JS</title>

  <script src="http://videojs.github.io/video.js/video-js/video.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="http://videojs.github.io/video.js/video-js/video-js.css" type="text/css" media="all" charset="utf-8" />
 <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://videojs.github.io/video.js/video-js/skins/vim.css" type="text/css" media="screen" title="Video JS" charset="utf-8">

  <!--[if !IE 7]>
    <style type="text/css">
      #wrap {display:table;height:100%}
    </style>
  <![endif]-->

  <script type="text/javascript" charset="utf-8">
     window.onload = function(){
       VideoJS.setup();
     }
  </script>

</head>
<body>
      <div class="video-js-box vim-css">
        <video class="video-js vjs-16-9" width="640" height="264" poster="//vjs.zencdn.net/v/oceans.png" controls preload>
          <source src="//vjs.zencdn.net/v/oceans.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
          <source src="//vjs.zencdn.net/v/oceans.webm" type='video/webm; codecs="vp8, vorbis"'>
          <source src="//vjs.zencdn.net/v/oceans.ogg" type='video/ogg; codecs="theora, vorbis"'>
        </video>
      </div>


</body>
</html>