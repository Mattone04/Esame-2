<?php 

$titolo = "Lavori singoli";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
require("funzioni.php");

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
     html{
        font-size: larger;
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
  #home,#link1,#link2{
    color: blue;
    font-size: 17px;
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
  h1,p{
    text-align: right;
  }
  #immagine{
    margin-bottom: 50px;
    position: absolute;
    top: 100px;
    left: 20px;
  }
  #testo, #titolo{
    margin-right: 350px;
  }
  /* 
  ##Device = Desktops
  ##Screen = 1281px to higher resolution desktops
*/

@media (min-width: 1281px) {
  
  /* CSS */
  #testo, #titolo{
    margin-right: 350px;
  }
}

/* 
  ##Device = Laptops, Desktops
  ##Screen = B/w 1025px to 1280px
*/

@media (min-width: 1025px) and (max-width: 1280px) {
  
  /* CSS */
  #testo, #titolo{
    margin-right: 50px;
  }
}

/* 
  ##Device = Tablets, Ipads (portrait)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) {
  
  /* CSS */
  #testo, #titolo{
    margin-right: 50px;
  }
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
  /* CSS */
  #testo, #titolo{
    margin-right: 50px;
  }
}

/* 
  ##Device = Low Resolution Tablets, Mobiles (Landscape)
  ##Screen = B/w 481px to 767px
*/

@media (min-width: 481px) and (max-width: 767px) {
  
  /* CSS */
  #testo, #titolo{
    margin-right: 50px;
  }
}

/* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
  /* CSS */
  #testo, #titolo{
    margin-right: 50px;
  }
}

    </style>

</head>

<body>
<div id="nav"><?php link5() ?></div>
<h1 id="titolo">Il mio lavoro</h1>

<p id="testo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Vestibulum vitae vestibulum eros, vitae vulputate magna. <br> Phasellus finibus nulla quis ex euismod, nec luctus lectus cursus. <br><br><br> Maecenas rhoncus dapibus eros, id egestas nibh lobortis non. <br> Phasellus ullamcorper eu elit auctor aliquam. <br> Aliquam vestibulum odio et congue dignissim. <br> Cras augue est, feugiat in est sed, interdum mattis lorem. <br><br><br> Vivamus non dui tincidunt, consequat nulla ut, blandit augue. <br> Suspendisse vel bibendum lectus. <br> Curabitur laoreet lorem in augue varius, ut accumsan erat commodo. <br><br><br> Integer fringilla eu nisi non vulputate. <br> Lorem, vehicula dapibus lacus nec, efficitur elementum quam. <br> Nunc semper vestibulum lectus, at euismod lorem condimentum ac. <br><br><br> Vivamus efficitur dolor eu mollis vestibulum. <br> Mauris eu consectetur ante. <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Suspendisse vehicula neque sit amet mauris tempor, vel accumsan nulla vulputate. <br><br><br> Pellentesque aliquet urna diam, at molestie tellus varius et. <br> Vivamus a dolor quis justo pellentesque venenatis ac quis nibh. <br> Aenean in ultrices sem, id imperdiet nibh. <br><br><br> Aenean viverra nunc augue, nec cursus quam varius sed. <br> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. <br> Donec pharetra magna ut neque lobortis, eget scelerisque tellus aliquet. <br><br><br> Morbi luctus malesuada lectus, eget dictum magna accumsan vulputate. <br> Donec efficitur, urna vel tincidunt convallis, <br> magna turpis imperdiet augue, <br> vitae egestas orci velit sit amet enim. <br><br><br> Proin id ipsum nec mauris pharetra ullamcorper non sit amet turpis. <br> Pellentesque eget elit pharetra, laoreet quam eu, aliquet ipsum. <br><br><br>

Nunc maximus, orci a porttitor fermentum, diam odio aliquet quam, nec vestibulum elit enim id urna. <br> Donec erat arcu, euismod et justo volutpat, ultrices tempus dui. <br><br><br> Nulla accumsan, dui id pretium ornare, lacus orci luctus elit, eu convallis eros elit eu nunc. <br> Nam a erat et est lobortis ultricies quis vel magna. <br> Nunc sed pulvinar justo, eu feugiat risus. <br><br><br> Vivamus ut ipsum non sem scelerisque posuere. <br> Aliquam sed ligula ultrices, rutrum quam ut, tempor turpis. <br> Donec non leo sed nisl pretium consectetur. <br><br><br> Vestibulum aliquam, <br> enim sit amet tempus varius, <br> est dolor molestie nunc, <br> ut tincidunt ex metus tempus lacus.</p>
<img src="https://cdn.discordapp.com/attachments/906882508635926608/1202543405226270800/lavori.png?ex=65cdd6d1&is=65bb61d1&hm=d1d2f4e9a024febc1370af891366d90383e74e6cbad138c406dd9f2f57c74b32&" alt="Lavori" id="immagine" name="Lavori" width="400px" height="390px">
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