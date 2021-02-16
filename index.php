<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */


 ?>


<?php get_header(); ?>

<div class="container">




  <h1>THIS IS THE INDEX PAGE</h1>

    <div class="row">
      <div class="col">
        <!-- <div id="ytplayer" style="border-color: red"></div>
          <script>
            // Load the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/player_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // Replace the 'ytplayer' element with an <iframe> and
            // YouTube player after the API code downloads.
            var player;
            function onYouTubePlayerAPIReady() {
              player = new YT.Player('ytplayer', {
                height: '360',
                width: '640',
                videoId: 'YDy57p4JaE4'
              });
            }
          </script> -->


      <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
        <!-- <div id="player"></div>

          <script>
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // 3. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;
            function onYouTubeIframeAPIReady() {
              player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: 'YDy57p4JaE4',
                playerVars: { 'autoplay': 1, 'playsinline': 1, 'mute': 1 },
                events: {
                  'onReady': onPlayerReady,
                  'onStateChange': onPlayerStateChange
                }
              });
            }

            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
              event.target.playVideo();
            }

            // 5. The API calls this function when the player's state changes.
            //    The function indicates that when playing a video (state=1),
            //    the player should play for six seconds and then stop.
            var done = false;
            function onPlayerStateChange(event) {
              if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
              }
            }
            function stopVideo() {
              player.stopVideo();
            }
          </script>

        </div>
      </div>
    </div> -->

    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/YDy57p4JaE4?rel=0&autoplay=1&controls=0&playlist=YDy57p4JaE4&loop=1&modestbranding=1&enablejsapi=1" frameborder="0" allow="autoplay"></iframe> -->


</div>

<?php get_footer(); ?>