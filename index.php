<?php
/**
 * Pagina home del sito + chi sono + servizi
*/
$read = file_get_contents('servizi-e-prodotti.json');
json_decode($read);
$json = json_encode($read,true);
$titolo = "Il mio sito web";
$michiamo = "Mi chiamo";
$nome = "Matteo Malandrino";
$professione = "Sono un <strong>full-stack developer</strong>";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1179003537993248818/logo-apple-300x188.png?ex=65a6581c&is=6593e31c&hm=5c5759f8f597ef0dc91e491fb907061d6f3e022cbcfee23a98ca50847e3ff3b2&";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$altro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor mauris nulla, id ornare lorem dapibus ut. Vestibulum consectetur ultricies lacus, sit amet condimentum lectus fringilla in. Aenean dapibus metus sit amet ante volutpat molestie. Morbi vehicula, risus quis pharetra rhoncus, justo nisi consectetur nisi, eget rutrum orci nisl vel ex.";
$contattami = "Contattami";
function servizi() {
  echo("<div id='frontend' class='col-1'><h3>Front-end</h3>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris libero, elementum ac mollis fringilla, tristique sed quam. Aliquam hendrerit viverra convallis. Pellentesque tincidunt leo dui, vel faucibus turpis mattis ac.</p></div>
   <div id='backend' class='col-2'><h3>Back-end</h3>
   <p>Maecenas nec ultrices sem, vel consectetur ligula. Praesent quis vestibulum turpis. Duis finibus nulla ac quam consequat scelerisque. Proin bibendum sem ac tempor convallis. Suspendisse arcu urna, maximus eu scelerisque luctus, ultrices nec sem.</p></div>
   <div id='web-designing' class='col3'><h3>Web design</h3>
   <p>Cras et lacus hendrerit, suscipit dui vestibulum, tincidunt mauris. Integer purus massa, tempus elementum sapien facilisis, vulputate suscipit libero. In ex turpis, condimentum et pellentesque quis, malesuada ac erat.</p></div>
   <div id='cloud-engineering' class='col-4'><h3>Cloud Engineering</h3>
   <p>Phasellus placerat massa ut neque porttitor imperdiet. Phasellus maximus risus placerat ligula faucibus, eu sagittis est dapibus.</p></div>");

}
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php")




?>

<!DOCTYPE html>
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
 <div id="nav">
  <?php link2() ?>
 </div>
 <div id="chi-sono">
  


 <h2 id="mi-chiamo"><?php echo $michiamo; ?></h2><br>
 <h1 id="nome"><?php echo $nome; ?></h1>
 <p id="professione"><?php echo $professione; ?></p>
 

 </div>
 <form action="preventivo.php" method="post">
<button id="bottone" type="submit">Chiedici un preventivo</button>
 </form>

 <div><img src=<?php echo $img; ?> id="logo-Apple" title="Logo Apple full-stack developer"></div>

 <hr>
   <img id="imgAltro" name="Informazioni personali" title="Informazioni personali" alt="Informazioni personali" src="https://cdn.discordapp.com/attachments/906882508635926608/1199651083941855282/info.jpeg?ex=65c35122&is=65b0dc22&hm=abf764f953dca406c91eca12b7612aa40677477f46a36e6c5bd007f24d1343e9&">
    <div id="altro">
      <h2>Informazioni personali</h2>
      <p><?php echo $altro; ?></p>
    </div>
 <hr>
 <h2 id="servizi">I nostri servizi e progetti</h2>
 <?php servizi() ?>
  <h2 id="progetto-1"><a id="link-progetto" href="progetto-front-end.php">Progetto front-end developer</a></h2>
  <h2 id="progetto-2"><a id="link-progetto2" href="progetto-back-end.php">Progetto back-end developer</a></h2>
  <h2 id="progetto-3"><a id="link-progetto3" href="progetto-web-design.php">Progetto web design</a></h2>
  <h2 id="progetto-4"><a id="link-progetto4" href="progetto-cloud-engineering.php">Progetto cloud engineering</a></h2>
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