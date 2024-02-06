<?php

$titolo = "Progetto 3";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1201823473186656297/web-design-progetto.jpg?ex=65cb3854&is=65b8c354&hm=4643691839d4a0da8913ddf059313a28c751bbfaaa5c3f8a9fefc2de6fcc76aa&";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
function testoRandom3() {
    echo("<h2 id='titolo'>Il nostro terzo progetto</h2>");
    echo("<p id='testo'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus est non arcu tempor volutpat. Cras eleifend ligula vitae lorem dapibus, eu bibendum arcu vulputate. Vestibulum a massa consectetur, rutrum dolor bibendum, tincidunt neque. Nulla bibendum dapibus sapien, eu tempus nisi elementum eget. Morbi nec faucibus felis. In finibus eros leo, ut gravida ligula scelerisque in. Phasellus scelerisque placerat lorem et pretium. Aliquam quis erat in dolor sodales convallis a vitae lorem. Maecenas non tincidunt odio. Phasellus at dolor velit. Nunc tempus eget dolor at consectetur. Sed fringilla, metus quis semper lacinia, velit velit sollicitudin velit, sed condimentum augue lacus a dui.

    Integer eu laoreet massa. Nam id purus lectus. Curabitur id venenatis ante, nec suscipit felis. Aenean iaculis sem non sem feugiat ultrices. Sed ultrices aliquet ligula, non dignissim nunc volutpat varius. Vestibulum ut hendrerit metus, et mattis velit. <br><br><br> Vivamus elementum egestas dictum. Fusce vitae porttitor mi. Aenean erat eros, porta quis vulputate eget, pulvinar sit amet nunc. Quisque fermentum, lacus a feugiat venenatis, erat massa condimentum est, eget pretium nisl enim in nisl. Ut pharetra, sapien eget cursus commodo, orci lectus ultrices odio, vel finibus turpis orci et magna. Etiam pharetra augue et turpis lacinia mollis.
    
    Integer ultrices tortor non nisl molestie, sit amet venenatis nibh lobortis. Nulla a posuere sem, sed convallis erat. Aliquam id tellus quis erat commodo cursus. Pellentesque luctus suscipit lectus, quis tincidunt lorem hendrerit in. Integer egestas placerat ultrices. Sed hendrerit est vel posuere mollis. Integer sed luctus risus, sit amet tincidunt eros. Sed mollis mauris at magna laoreet, at tincidunt justo tempor. <br><br><br> Aenean gravida lectus eu iaculis placerat. Vestibulum massa nisl, luctus ut leo nec, fermentum consequat nisl.
    
    Integer tellus libero, porttitor vitae enim rhoncus, aliquet cursus ligula. Phasellus accumsan laoreet orci nec congue. Vestibulum consectetur ante enim, et cursus urna imperdiet vitae. Proin laoreet, tellus sed laoreet ullamcorper, odio lacus viverra ante, eu accumsan nibh ligula eget diam. Quisque suscipit diam quis tempus elementum. Morbi in neque nibh. Duis cursus sapien ornare eros maximus, sit amet ullamcorper ipsum imperdiet. Suspendisse egestas nulla id dui posuere, vel iaculis ipsum dictum. Pellentesque blandit ex odio, eget tristique turpis ornare non. Fusce placerat pretium ligula ac hendrerit. Nullam in ante ac ligula eleifend congue. <br><br><br> Proin tristique pharetra neque id euismod. Donec eu leo egestas, commodo neque a, scelerisque nibh. Donec gravida porttitor diam, vitae consequat tortor tempus eget. Duis vulputate nisl nec ex semper, vitae pretium augue elementum.
    
    Integer fermentum ullamcorper eros, non ultrices orci tempor eu. Nullam luctus ultricies sem at rutrum. Aliquam lacinia orci diam, id dignissim nunc malesuada non. Duis justo felis, imperdiet sed semper ut, lobortis non sapien. Vestibulum quis mi justo. Phasellus ligula magna, imperdiet varius odio sit amet, sagittis fermentum tellus. Vivamus faucibus et mi nec laoreet. Donec sagittis pretium sodales. Morbi in ante at leo hendrerit gravida. Fusce quis fringilla ligula. Suspendisse potenti. Aenean varius et justo non posuere. Pellentesque porta urna sed vehicula mattis. Nullam non consectetur enim. Mauris ac risus vulputate, commodo eros at, vehicula lacus. In lectus metus, varius nec enim sit amet, finibus rutrum ante.</p>");
}

?>

<!DOCTYPE html>
<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <style>
   #titolo,p{
    text-align: center;
   }
   #testo{
    margin-left: 50px;
    margin-right: 50px;
   }
   html{
    font-size: larger;
   }
   img{
    margin-top: 50px;
   }
   #immagine{
    text-align: center;
   }
   footer{
    font-family: fantasy;
    text-align: right;
    font-size:200%;
}
footer>h2{
    margin-top: 100px;
    color:#303a07;
    text-decoration:line-through;
}

#social-bar {
    display:contents;
    top:0;
    bottom:0;
    margin:auto;
    left:0;
    height:fit-content;
  }
  #social-bar a {
    text-align: center;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    padding:15px;
    font-size: 20px;
    text-decoration:none;
    color: white;
  }
  #social-bar a:hover {
    opacity:0.8;
    color:#258ce6;
    border-radius: 10px;
    border-style: groove;
  }
  .facebook {
    background: #3B5998;
  }
  .instagram {
    background: #dd2a7b;
  }
  .twitter {
    background: #55ACEE;
  }
  #seguitemi{
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    display: contents;
  }
  #home,#link1,#link2{
    color: blue;
    font-size: large;
    display: inline;
    margin-left: 10px;
    text-decoration: none;
  }
  #home:hover{
    text-decoration: underline;
    color: #ffd700;
  }
  #link1:hover{
    text-decoration: underline;
    color: #ffd700;
  }
  #link2:hover{
    text-decoration: underline;
    color: #ffd700;
  }
  #nav{
    background-color: red;
    height: 50px;
  }
  #home{
    position:absolute;
    top:20px;
    left:10px;
    font-size: large;
  }
  #link1{
    position:absolute;
    top:20px;
    left:70px;
    font-size: large;
  }
  #link2{
    position: absolute;
    top:20px;
    left:200px;
    font-size: large;
  }
</style>

</head>

<body>
<div id="nav"><?php link5() ?></div>
<?php testoRandom3() ?>
<div id="immagine"><img src= <?php echo $img ?> title="Il mio terzo progetto" name="Il mio terzo progetto" id="img" alt="Immagine terzo progetto" width="500px" height="300px"></div>
<hr>
<footer>
<h2>Matteo</h2>
  <p id="seguitemi">Seguitemi su</p>
  <div id="social-bar">
  <a href=<?php echo $facebook; ?> class="facebook"> 
      <i class="fa-brands fa-facebook">
      </i>
    </a>
    <a href=<?php echo $instagram ?> class="instagram"> 
      <i class="fa-brands fa-instagram">
      </i>
    </a>
    <a href=<?php echo $twitter ?> class="twitter"> 
        <i class="fa-brands fa-twitter">
        </i>
      </a>
  </div>

</footer>
</body>

</html>