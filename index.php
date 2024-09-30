<?php
//script obf di sini
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>OBFkakatoji</title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" type="text/css" href="css/kakatoji.css">
    </head>
    <body>
        <nav class="navbar bg-primary-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvKItTjW3CPaI2lVF0ng_MmmeRg3RUAVAENN8M7FZQDQ&s"
                        alt="Logo"
                        width="30"
                        height="24"
                        class="d-inline-block align-text-top"
                    />
                    CodingXtools
                </a>
            </div>
        </nav>
<div id="content">
        <iframe
            data-aa="2351446"
            src="//acceptable.a-ads.com/2351446"
            style="
                border: 0px;
                padding: 0;
                width: 100%;
                height: 50%;
                overflow: hidden;
                background-color: transparent;
            ">
            
        </iframe>
                <style>
                    .block {
                        display: block;
                        width: 100%;
                        border: none;
                        background-color: #04aa6d;
                        color: white;
                        padding: 14px 28px;
                        font-size: 16px;
                        cursor: pointer;
                        text-align: center;
                    }

                    .block:hover {
                        background-color: #ddd;
                        color: black;
                    }
                    a:link {
                        text-decoration: none;
                    }
                    a:visited {
                        text-decoration: none;
                    }
                    a:hover {
                        text-decoration: none;
                    }
                    a:active {
                        text-decoration: none;
                    }
                </style>
            
            <?php
            $um = ["RXWkv-ZK7Ak","12WCu9hTqMM","BNEllysawfQ","kSh77AcYrpw","Y_S7GJauleY","hdLyqVtU6z4","0LDtgao7XkI","EJtkgDAtdhw","VPVgLMuzie8","TqRwse3CAT8","A50lqgDaQFU","o_d4WOCpiAg"];
            $ck = array_rand($um);
            ?>
                <!-- 1. The <iframe> (and video player) -->
                <div id="player"></div>

                <!-- The Play-Link will appear in that div -->
                <div id="play"></div>

                <script>
                  function getRandomItem(arr) { // get random index value
                      const randomIndex = Math.floor(Math.random() * arr.length);
                      // get random item
                      const item = arr[randomIndex];
                      return item;
                    }
                  const um = ["RXWkv-ZK7Ak"];
                  const result = getRandomItem(um);
                    // 2. This code loads the IFrame Player API code asynchronously.
                    var tag = document.createElement("script");

                    tag.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag =
                        document.getElementsByTagName("script")[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                    // 3. This function creates an <iframe> (and YouTube player)
                    var player;
                    function onYouTubeIframeAPIReady() {
                        player = new YT.Player("player", {
                            height: "200%",
                            width: "100%",
                            vidoId: '<?php echo $um[$uk];?>',
                            events: {
                                onReady: onPlayerReady,
                                onStateChange: onPlayerStateChange
                            }
                        });
                    }

                    // 4. call this function when the video player is ready.
                    function onPlayerReady(event) {
                        play();
                        document.getElementById("play").innerHTML =
                            "<a style='bold: 3px; text-align: center;'>Jangan lupa bantu subrek nya om</a>";
                    }

                    function play() {
                        player.playVideo();
                    }

                    // 5. The API calls this function when the player's state changes.
                    //    The function indicates that when playing a video (state=1),
                    //    the player should play for six seconds and then stop.
                    var done = false;
                    function onPlayerStateChange(event) {
                        if (event.data == YT.PlayerState.PLAYING && !done) {
                            setTimeout(stopVideo, 10000);
                            done = true;
                        }
                    }
                    function stopVideo() {
                        //player.stopVideo();
                        document.getElementById("play").innerHTML =
                            "Your Wellcome";
                    }
              </script>
              <form method="POST" enctype="multipart/form-data">
              <input name="farea" type="file" id="files"/><br/>
              <br/>
              <textarea name="area" id="area" rows="5" cols="25" style="display:none"></textarea>
              <!--<div class="g-recaptcha" data-sitekey="6Lc5DjwqAAAAAG19uXE9RQNQi2CC-62GLkIquVhX"></div><br/>-->
              <!--<input id="obf" type="submit" value="START OBF" name="obf" onclick="showAds()">--> 
               <?php
                  require_once("validate.php");
                  #echo '<div id="reca" class="g-recaptcha" data-sitekey="6Lc5DjwqAAAAAG19uXE9RQNQi2CC-62GLkIquVhX"></div><br/>';
                  if(isset($_POST["obf"])) {
                      if(!empty($_FILES["farea"])){
                           $new = new PhpObf();
                           $olah = $new->olah(file_get_contents($_FILES["farea"]["tmp_name"]));
                           $b64cde = base64_encode($olah);
                           $fnm = "Obf-".time()."-kakatoji.php";
                           echo '<div class="form-group my-2"><textarea class="form-control my-2" rows="8">'.$olah.'</textarea></div>';
                           #echo '<div id="reca" class="g-recaptcha" data-sitekey="6Lc5DjwqAAAAAG19uXE9RQNQi2CC-62GLkIquVhX"></div><br/>';
                           if($error == 0){
                               echo "<a name='donlod' class='btn btn-success btn-block' href='data:application/octet-stream;base64,$b64cde' download='$fnm'>download</a>";
                           }else{
                               echo $error;
                           }
                        }
                    }else{
                        echo '<div id="reca" class="g-recaptcha" data-sitekey="6Lc5DjwqAAAAAG19uXE9RQNQi2CC-62GLkIquVhX"></div>';
                        echo '<input id="obf" type="submit" value="START OBF" name="obf" >';
                    }
               ?>
              </form>
            </body>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
        <script src="js/kucik.js"></script>
        </div>

          <!-- Histats.com  (div with counter) -->
          <div id="histats_counter"></div>
        <!-- Histats.com  START  (aync)-->
        <script type="text/javascript">var _Hasync= _Hasync|| [];
        _Hasync.push(['Histats.start', '1,4894165,4,605,110,55,00011111']);
        _Hasync.push(['Histats.fasi', '1']);
        _Hasync.push(['Histats.track_hits', '']);
        (function() {
        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
        })();</script>
        <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4894165&101" alt="" border="0"></a></noscript>
        <!-- Histats.com  END  -->
        <iframe id='banner_advert_wrapper_3184' src='https://api.fpadserver.com/banner?id=3184&size=240x400' width='240px' height='400px' frameborder='0'></iframe>
        <div id="footer">
    Copyright &copy; kakatoji
  </div>
    </body>
</html>
