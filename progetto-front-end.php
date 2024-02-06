<?php

$titolo = "Progetto 1";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1201529897823244349/front-end-progetto.jpg?ex=65ca26ea&is=65b7b1ea&hm=64f78c8a50330fc53ecd8c7a5e91d51776889505ca8aace82e34a4d9167557ea&";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
function testoRandom() {
    echo("<h2 id='titolo'>Il nostro primo progetto</h2>");
    echo("<p id='testo'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus posuere urna, a blandit leo fringilla et. Sed id purus nec dui elementum sagittis. Curabitur id dui odio. Nullam ac dignissim sem. Phasellus eu scelerisque libero. Pellentesque at pharetra tortor, sed egestas urna. Fusce sagittis pulvinar sagittis. Aenean ut risus vulputate, ultricies ante pretium, auctor erat. Praesent lacinia neque vel nunc ultricies, quis blandit diam facilisis. Proin mattis efficitur elementum. Curabitur nec condimentum risus. Donec ut euismod odio. Integer non lectus lacinia, sagittis leo sit amet, mollis tellus. Fusce ac eros hendrerit, hendrerit ex nec, vestibulum turpis. Ut porta metus eleifend odio lobortis, non vulputate odio lobortis. <br><br><br>

    Cras placerat tincidunt ex sit amet iaculis. Nulla eu tortor pretium, tempor nisi at, dignissim purus. Mauris lacus urna, mattis at metus sed, tempor ullamcorper orci. Aenean nec pretium neque. Sed sit amet nisi purus. Etiam in leo nec enim ullamcorper volutpat. Aenean sit amet tellus ut erat facilisis sodales. Nullam posuere lectus neque, in blandit lacus viverra ac. Sed placerat non lorem ut tempor. Morbi aliquam, nisi nec ullamcorper dictum, dolor odio mattis ante, et sodales nunc ex non ipsum. Aenean iaculis tristique orci eu fringilla. Aenean semper porta placerat. Morbi sed sodales ligula. Donec condimentum augue eget enim blandit faucibus.
    
    Maecenas ac felis eu arcu consectetur mattis non sit amet ex. Suspendisse sed fringilla lacus. Praesent ac lorem viverra purus scelerisque cursus vel in velit. Morbi sapien neque, consectetur et massa at, dignissim imperdiet dui. Phasellus faucibus sollicitudin risus, vitae condimentum felis pretium pellentesque. <br><br><br> Integer sed elit a nisl vestibulum dapibus. Nullam gravida id erat sit amet consectetur. Donec sagittis turpis augue, et gravida felis posuere at. Nullam ornare ipsum sed porttitor eleifend. Etiam eget nulla laoreet, finibus neque at, facilisis massa. Curabitur vitae est at magna volutpat egestas.
    
    Vestibulum vestibulum interdum massa, sit amet cursus enim tempus et. Nam convallis lacinia facilisis. Maecenas faucibus neque nec efficitur auctor. Sed et mauris enim. Nunc sed massa convallis, consequat mi at, consectetur tortor. Cras condimentum sapien vitae dui pulvinar aliquam. Nam molestie, purus sit amet finibus dignissim, ex dui aliquam nisi, eu commodo sem augue eu odio. Integer quis dolor ac dui sagittis mattis. Cras sollicitudin, erat sed ullamcorper malesuada, tortor purus tincidunt lorem, at pretium ex orci id tellus. Nullam ultricies scelerisque magna, et laoreet ex. <br><br><br> Curabitur finibus, quam ut scelerisque rutrum, lacus velit facilisis nibh, eu dictum odio nulla id elit.
    
    Fusce arcu ex, dictum vel semper quis, imperdiet vel lacus. Integer et arcu facilisis, egestas augue ac, blandit orci. Vivamus tincidunt lacus lacus, at auctor ligula convallis et. Suspendisse potenti. Ut ac ex sapien. Ut non porttitor turpis. Phasellus a ipsum at quam tincidunt interdum quis vitae nunc. Integer malesuada ipsum id mi elementum tristique. Maecenas venenatis enim at ligula iaculis egestas. Fusce ultrices nulla lorem, eu tincidunt urna scelerisque non. Nunc tristique, mi in auctor molestie, leo ante lobortis dolor, nec consectetur lectus felis et metus. Nunc consequat velit eu felis condimentum, id luctus tellus dictum. Sed hendrerit, metus eu luctus aliquet, nulla sapien luctus lacus, et finibus lacus orci ac metus. Suspendisse vel risus non lorem egestas ultricies sit amet vel turpis. Ut eget mauris est. Etiam id interdum tellus.</p>");
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
<?php testoRandom() ?>
<div id="immagine"><img src= <?php echo $img ?> title="Il mio primo progetto" name="Il mio primo progetto" id="img" alt="Immagine primo progetto" width="300px" height="250px"></div>
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