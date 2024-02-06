<?php

$titolo = "Progetto 2";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1201815343417536533/back-end-progetto.jpg?ex=65cb30c2&is=65b8bbc2&hm=13b7128ea5214685a78f0d33fd0326c1265697d96c1ff36aaf34aeb26378d6f5&";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
function testoRandom2() {
    echo("<h2 id='titolo'>Il nostro secondo progetto</h2>");
    echo("<p id='testo'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae posuere massa. Vivamus vitae dui vel eros tempor maximus. Nulla convallis odio non lacus imperdiet interdum. Praesent vel egestas purus. Duis ac vestibulum eros. Duis dictum placerat purus, non aliquet nibh volutpat vitae. Aliquam erat volutpat.

    Duis faucibus tempor neque, et faucibus risus luctus eget. Duis auctor metus sed nisl dictum, eget efficitur diam cursus. Vivamus ut consectetur mauris, viverra gravida urna. In facilisis velit in sem finibus euismod. Integer porttitor nisl nisi, eget volutpat nisl volutpat at. Praesent tristique at arcu id lacinia. Quisque eleifend sit amet urna eget rutrum. Curabitur sed condimentum massa, eget volutpat turpis. Phasellus id purus aliquet, iaculis risus sed, sollicitudin odio. Aenean porttitor non orci at auctor.
    
    Mauris imperdiet auctor nibh, non maximus tellus sollicitudin at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam eu purus eget tellus sodales finibus. Nam nec sapien blandit, tincidunt sapien vitae, rutrum nisl. Integer tempus magna in tellus dictum, quis finibus orci efficitur. In et neque nibh. In gravida nisi at nisl semper, egestas auctor odio iaculis. Morbi nunc nulla, congue a felis quis, viverra placerat elit. Sed ut convallis purus, eu pretium est.
    
    Suspendisse cursus, urna eu condimentum mattis, orci eros tristique elit, ut pharetra purus dui vitae velit. Nunc nec eros id felis sodales feugiat. Sed commodo rhoncus magna, vel ullamcorper orci ullamcorper aliquam. <br><br><br> Donec lacinia diam quis elit semper rhoncus. Ut sed gravida magna. Praesent viverra, magna ut efficitur malesuada, dolor magna rhoncus elit, at tempor urna dolor sed arcu. Cras bibendum sem risus, vitae porta libero pharetra et. Aenean pretium, tortor ut maximus tempor, elit massa mattis urna, et aliquet sem ipsum a metus. Vivamus rhoncus, mi quis bibendum iaculis, lectus eros elementum ex, efficitur malesuada arcu mauris non libero. Vestibulum quis arcu nec metus molestie aliquet ut vitae eros. Cras ullamcorper elit in enim pulvinar gravida. Morbi viverra urna in lorem luctus, in consectetur tellus sodales.
    
    Donec maximus, ex eget laoreet auctor, velit ante molestie erat, et mollis lacus arcu rutrum ex. Mauris ut justo ultricies, rhoncus dui in, consequat nisl. In lobortis nisi et mi scelerisque venenatis. Curabitur eu felis maximus, ultrices ante ut, porttitor turpis. Duis in ipsum interdum, aliquam massa id, congue odio. Sed augue lorem, aliquam ac imperdiet cursus, mollis nec ipsum. Vivamus blandit feugiat nibh, ac gravida felis eleifend quis. Aenean sit amet eros faucibus purus varius bibendum eu at turpis. Phasellus hendrerit lorem vel felis consequat pharetra. Donec laoreet dolor ut massa consectetur euismod. Nam bibendum dui at nunc vestibulum tincidunt.orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vestibulum quis nulla eget mollis. Phasellus eget nisl convallis, accumsan purus nec, pharetra nunc. Maecenas tincidunt, ex vitae hendrerit euismod, neque quam feugiat tellus, at iaculis purus odio sit amet erat. Morbi ac auctor est, ac euismod nunc. Vivamus at justo convallis, vestibulum sapien eget, viverra ipsum. </p>");
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
<?php testoRandom2() ?>
<div id="immagine"><img src= <?php echo $img ?> title="Il mio secondo progetto" name="Il mio secondo progetto" id="img" alt="Immagine secondo progetto" width="500px" height="300px"></div>
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