<?php

$titolo = "Progetto 4";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1201826001982869555/cloud-engineering-progetto.png?ex=65cb3aaf&is=65b8c5af&hm=7bb9431f5717184b8ec90c83ee91eeb82c6ba1c3af0b20ad558e5f1959d95eb1&";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
function testoRandom4() {
    echo("<h2 id='titolo'>Il nostro quarto progetto</h2>");
    echo("<p id='testo'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo arcu, interdum eu felis at, fringilla feugiat tortor. Nulla felis justo, facilisis efficitur dapibus eget, iaculis sit amet turpis. Nulla velit ex, sagittis ac vulputate vel, dictum in ipsum. Duis placerat massa a lacus scelerisque, quis porta elit luctus. Phasellus tortor leo, blandit sit amet libero sed, faucibus molestie dui. Phasellus vel neque felis. Nullam in arcu diam. Suspendisse eget efficitur leo, sit amet molestie nulla. Proin eget finibus nibh. Proin interdum sit amet magna nec semper. Vestibulum egestas dolor justo, at pharetra ligula bibendum sit amet.

    Sed posuere, elit porttitor varius varius, massa dolor convallis odio, eget dictum ante tortor ac sapien. Ut ac dui laoreet, vehicula dui eget, imperdiet nisi. Ut ut mi a magna viverra tincidunt. Vestibulum ut tortor vel odio imperdiet vehicula ac quis elit. Donec ac diam ultrices urna accumsan luctus vel vel arcu. <br><br><br> Proin quis turpis vel ligula venenatis aliquet in in justo. Vestibulum vulputate volutpat nulla, a dignissim elit viverra ac. Suspendisse vitae ligula erat. Sed a lacinia nibh, eu ultricies augue. Nunc vel placerat felis. Vestibulum hendrerit nisl ante, at vulputate diam bibendum eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget rhoncus dui, at ornare tellus. Quisque ornare ligula neque. Sed sed pulvinar dolor.
    
    Ut semper volutpat nisi, eget iaculis sapien. Pellentesque vehicula sapien at urna sagittis maximus. Integer viverra pellentesque diam, ut auctor turpis lobortis ac. Etiam id arcu in massa consequat vulputate. Nulla imperdiet feugiat dolor, nec venenatis nisl. <br><br><br> Praesent in velit eu ex dignissim ultrices eget aliquam urna. Cras sit amet malesuada arcu. Ut eu faucibus justo. Duis bibendum condimentum sollicitudin. Etiam hendrerit, urna nec pretium ultrices, justo elit sodales libero, nec condimentum enim tellus viverra augue.
    
    Nunc vel porttitor nisl. Fusce vitae ex nec tellus congue tristique id a est. Vestibulum posuere lacus et urna vehicula lacinia. Nulla vitae efficitur lectus. Nulla et metus mattis lectus malesuada fringilla. Donec dapibus nisi imperdiet felis volutpat, ut viverra neque finibus. Duis malesuada sapien nec magna ultricies laoreet. Nam tempor tellus id massa dapibus volutpat. Aenean in ipsum lobortis, aliquam quam vitae, laoreet lorem. Suspendisse fringilla urna enim, eu varius ante aliquam vitae. In hac habitasse platea dictumst. Sed sit amet auctor magna. Duis rutrum odio malesuada vestibulum tempus. <br><br><br> Vestibulum tincidunt ac mi eu porttitor. Etiam ut nulla pretium, vestibulum leo imperdiet, sodales lorem.
    
    Phasellus varius, augue et lacinia posuere, velit nisi consequat lectus, sit amet pretium est dolor blandit magna. Praesent interdum est at tortor ultricies pretium. Aliquam erat volutpat. Suspendisse vestibulum purus orci, a faucibus neque posuere ac. Sed at orci feugiat, porttitor lorem sed, fermentum elit. Aliquam ut tellus et leo sagittis malesuada. Quisque et rhoncus nibh, eget tempus nisi. In malesuada diam sit amet nunc consectetur cursus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at nibh quis quam malesuada sollicitudin. Suspendisse potenti. Mauris justo lectus, placerat nec diam et, facilisis euismod quam. Vivamus lacinia posuere tortor, ut fringilla ante imperdiet sit amet.</p>");
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
<?php testoRandom4() ?>
<div id="immagine"><img src= <?php echo $img ?> title="Il mio quarto progetto" name="Il mio quarto progetto" id="img" alt="Immagine quarto progetto" width="500px" height="300px"></div>
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