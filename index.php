<?php
/**
 * Pagina home del sito + chi sono + servizi
*/

$titolo = "Il mio sito web";
$michiamo = "Mi chiamo";
$nome = "Matteo Malandrino";
$professione = "Sono un full-stack developer";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1179003537993248818/logo-apple-300x188.png?ex=65a6581c&is=6593e31c&hm=5c5759f8f597ef0dc91e491fb907061d6f3e022cbcfee23a98ca50847e3ff3b2&";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$altro = "Appena ho finito la scuola, mi ci è voluto poco per capire cosa volevo fare davvero, da allora in poi mi sono dedicato giornate intere alla scrittura e stesura di codici, finché non ho trasformato tutto questo nel mio lavoro ideale: seguite i vostri sogni con passione e dedizione finché non si realizzano.";
$contattami = "Contattami";
function servizi() {
  echo("<div id='frontend' class='col-1'><h3>Front-end</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris libero, elementum ac mollis fringilla, tristique sed quam. Aliquam hendrerit viverra convallis. Pellentesque tincidunt leo dui, vel faucibus turpis mattis ac.</p></div>
   <br>
   <div id='backend' class='col-2'><h3>Back-end</h3>
   <p>Maecenas nec ultrices sem, vel consectetur ligula. Praesent quis vestibulum turpis. Duis finibus nulla ac quam consequat scelerisque. Proin bibendum sem ac tempor convallis. Suspendisse arcu urna, maximus eu scelerisque luctus, ultrices nec sem.</p></div>
   <br>
   <div id='web-designing' class='col3'><h3>Web design</h3>
   <p>Cras et lacus hendrerit, suscipit dui vestibulum, tincidunt mauris. Integer purus massa, tempus elementum sapien facilisis, vulputate suscipit libero. In ex turpis, condimentum et pellentesque quis, malesuada ac erat.</p></div>
   <br>
   <div id='cloud-engineering' class='col-4'><h3>Cloud Engineering</h3>
   <p>Phasellus placerat massa ut neque porttitor imperdiet. Phasellus maximus risus placerat ligula faucibus, eu sagittis est dapibus. Donec viverra, eros nec accumsan tincidunt, risus nibh sagittis arcu, sit amet sodales metus elit non lectus.</p></div>");

}
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php")




?>

<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/index.min.css" type="text/css" rel="stylesheet">

</head>

<body>

 <!-- Presentazione sito (chi sono) -->
 <?php link2() ?>
 <a href="json.php">A</a>
 <div id="chi-sono">
  


 <h2 id="mi-chiamo"><?php echo $michiamo; ?></h2><br>
 <h1 id="nome"><?php echo $nome; ?></h1>
 <p id="professione"><?php echo $professione; ?></p>

 </div>

 <div><img src=<?php echo $img; ?> id="logo-Apple" title="Logo Apple full-stack developer"></div>

 <div id="altro">
    <p><?php echo $altro; ?></p>
 </div>
 <div id="contattami">
  <form action="contatti-e-form.php">
   <button id="link3" name=<?php echo $contattami; ?> type="submit"><?php echo $contattami; ?></button>
  </form>
 </div>

 <hr>
 <h2 id="servizi">I nostri servizi</h2>
 <?php servizi() ?>
 <hr>
 <br><br><br>
 <!-- Il mio finto logo e social -->
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