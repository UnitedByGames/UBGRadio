<!doctype html>

<html>

<head>

<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ubgradio.chisdealhd.xyz/js/api.js"></script>
<script src="http://ubgradio.chisdealhd.xyz/js/radio.js"></script>
<script>
        setTimeout(function(){
                API_song($(".song"),10000);
                API_artwork($(".artwork"),10000);
        },1000);
</script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<title>UnitedbyGames || Radio Website</title>

<style type="text/css">

.container {

	width: 70%;

    margin-left: auto;

    margin-right: auto;

}

.social {

    color: #fff;

    margin-left: 145px;

    font-size: 20px;

    float: left;

    margin-top: 20px;

}

.social a:hover {

	color: blue;

}

.social a {

	color: #fff;

}

.logo {

    margin-top: 50px;

    float: left;

    position: absolute;

}

.logo img {

    width: 300px;

}

.navigation {

    float: right;

    margin-top: 70px;

    color: #fff;

    font-size: 20px;

    text-transform: uppercase;

    letter-spacing: 2px;

}

.playing {
    width: 70%;
    margin-top: 200px;
    margin-left: auto;
    margin-right: auto;
    left: 0px;
    right: 0px;
    position: absolute;
    color: #fff;
}
.playing p.title {
    font-size: 50px;
}
.playing p {
    margin: 0;
}
.playing p.song {
    font-size: 30px;
    margin-left: 125px;
    margin-top: 3px;
}
.playing p.icons {
    float: left;
    font-size: 20px;
    position: absolute;
    margin-left: 7px;
    margin-top: 3px;
}


body {

    position: fixed;

    top: 50%;

    left: 50%;

    min-width: 100%;

    min-height: 100%;

    width: auto;

    height: auto;

    z-index: -100;

    -webkit-transform: translateX(-50%) translateY(-50%);

    transform: translateX(-50%) translateY(-50%);

    background: #000 no-repeat;

    background-size: cover;

    font-family: "Open Sans",sans-serif;

    background-image: url("https://cdn.discordapp.com/attachments/318740191131205634/372064444055945216/logo.jpg");

}

video.background {

    position: fixed;

    top: 50%;

    left: 50%;

    min-width: 100%;

    min-height: 100%;

    width: auto;

    height: auto;

    z-index: -100;

    -webkit-transform: translateX(-50%) translateY(-50%);

    transform: translateX(-50%) translateY(-50%);

    background: #000 no-repeat;

    background-size: cover;

}

.notification {

    font-size: 11px;

    bottom: 0px;

    left: 0px;

    background-color: rgba(50, 50, 50, 0.5);

    width: 250px;

    border-radius: 2px;

    padding: 10px;

    position: absolute;

    margin-bottom: 15px;

    margin-left: 15px;

    color: #fff;

}

.notification h1 {

    font-size: 15px;

    margin: 0;

}

.notification p {

    font-size: 11px;

    margin: 0;

    margin-top: 5px;

}

.navigation ul {

    list-style: none;

    margin: 0;

    margin: 0;

}

.navigation li {

    display: inline;

    float: left;

}



.navigation li a:hover {

    color: blue;

    transition: 0.3s;

}

.navigation li a {

    text-decoration: none;

    margin: 0px 10px 0px 10px;

    color: #fff;

}

.overlay {

    background-image: url("https://cdn.tmw.media/ggradio/images/backgrounds/ol-1.png");

    top: 0px;

    left: 0px;

    bottom: 0px;

    right: 0px;

    position: fixed;

    z-index: -99;

}

.copyright a:hover {

	color: blue;

}

.copyright a {

    color: #fff;

    text-decoration: none;

}

.copyright {

    bottom: 0px;

    right: 0px;

    position: absolute;

    color: #fff;

    margin-right: 5px;

    margin-bottom: 5px;

    z-index: 1;

    text-transform: uppercase;

    letter-spacing: 2px;

    font-size: 12px;

}

</style>

</head>



<body onload="player();">

<div class="container">

<div class="logo"><a href="https://unitedbygames.net"><img src="https://cdn.discordapp.com/attachments/318740191131205634/372069875906117633/logo.png"></a></div>

<div class="social">

<a href="https://twitter.com/UnitedbyGamesUS" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

  <a href="http://instagram.com/unitedbygames_official/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

  <a href="http://steamcommunity.com/groups/officialunitedbygames" target="_blank"><i class="fa fa-steam" aria-hidden="true"></i></a>

  <a href="https://www.youtube.com/channel/UCl_74sFMm1Sm3ePaRGrSnqg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

  <a href="https://www.facebook.com/unitedbygames/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

</div>

<div class="navigation">

<ul>

<li class="active"><a href="#">Home</a></li>

<li><a href="https://www.unitedbygames.net/community" target="_blank">Community</a></li>

<li><a href="https://www.unitedbygames.net/community" target="_blank">Feedback</a></li>

<li><a href="https://www.unitedbygames.net" target="_blank">Support UBG</a></li>

<li><a href="https://www.unitedbygames.net/community/login/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

<li><a href="https://www.unitedbygames.net/community/login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>



</ul>

</div>

</div>

  <br><br><br><br><br><br><br><br><br>

<div class="playing">
<p class="title">Now Playing</p>
<p class="icons">
<a id="toggle" onclick="toggle()" href="#"><i class="toggle fa fa-play-circle"></i></a><br>
<a href="http://streaming.radionomy.com/UBGRadio?lang=en-GB"><i class="fa fa-share-square-o" aria-hidden="true" style="color: #F06A00;"></i></a><a><br>
</a><a href="http://ubgradio.chisdealhd.xyz/ubgradio/app/web/"><i class="fa fa-external-link" aria-hidden="true" style="color: #F06A00;"></i></a>
</p>
<p class="artwork"></p>
<p class="song"></p>
</div>

  

<div class="notification">

<h1>Announcement</h1>

<p>this site is in BETA! so there will be few bugs on our new API. make sure take care of site...</p>

<p>Read more on the site?  <a href="https://www.unitedbygames.net/community/">here</a>.</p>

</div>

<div class="overlay"></div>

<div class="copyright">&copy; <a href="https://unitedbygames.net">unitedbygames.net</a> 2017</a>

</div>

</body>

</html>