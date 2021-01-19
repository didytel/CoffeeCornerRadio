<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeCorner Radio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h3><span class="bg-dark text-white text-bold px-20">White</span> noise for <span class="text-white" style="background: #E95420">colourful</span> ears.</h3>
                <i class="float-right"> - Radio vinil din coltul blocului.</i>
                <!-- <p><a class="btn btn-primary btn-lg" href="expectations.html" role="button">Learn more &raquo;</a></p> -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery row">
                        <div class="photo col">
                            <span></span>
                            <img src="assets/001.jpg" class="img-fluid img-thumbnail"></img>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div id="skin-loader"></div>

                    <div id="skin-wrapper" data-skin-name="premium-pixels">

                        <div id="jquery_jplayer_1" class="jp-jplayer"></div>

                        <div id="jp_container_1" class="jp-audio">
                            <div class="jp-type-playlist">
                                <div class="jp-gui jp-interface">
                                    <ul class="jp-controls">
                                        <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                                        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                        <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                                        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                    </ul>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                    <div class="jp-time-holder">
                                        <div class="jp-current-time"></div>
                                        <div class="jp-duration"></div>
                                    </div>
                                    <ul class="jp-toggles">
                                        <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                                        <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
                                        <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                        <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                    </ul>
                                </div>
                                <div class="jp-playlist">
                                    <ul>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="jp-no-solution">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your browser to a recent version or update your <a href="https://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div><!-- .jp-audio -->
                    </div><!-- .wrapper -->
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/jplayer/aurora.js"></script>
    <script src="assets/jplayer/ogg.js"></script>
    <script src="assets/jplayer/opus.js"></script>
    <script type="text/javascript" src="assets/player_wrapper.js"></script>
    <script type="text/javascript" src="assets/jplayer/dist/jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="assets/jplayer/dist/jplayer/jplayer.playlist.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {
            let playlistContent;
            $.getJSON("assets/playlist.json?", function(json) {
                playlistContent = json;
                new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_1",
                    cssSelectorAncestor: "#jp_container_1"
                }, playlistContent, {
                    playlistOptions: {
                        autoPlay: true
                    },
                    swfPath: "assets/jplayer/dist/jplayer",
                    supplied: "oga, mp3",
                    wmode: "window",
                    solution: "html, aurora, flash",
                    auroraFormats: "oga"
                });
            });
        });
        //]]>
    </script>
</body>
</html>