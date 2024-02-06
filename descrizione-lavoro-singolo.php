<?php

/**
 * Pagina contenente descrizione e spiegazione del lavoro singolo sviluppato
*/
$titolo = "Full-stack developer";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$datalavoro = "11/10/2023";
$timestamp = strtotime($datalavoro);
$data = date("d-m-Y", $timestamp);
$descrizione = "Lavoro attualmente come full-stack developer, <br> un lavoro che <br> richiede molta dedizione e a cui sono sempre stato portato, <br> essendo nato <br> nell'era digitale e praticamente cresciuto scrivendo codici. <br> Questo lavoro mi ha divertito fin dall'inizio: <br> ho scritto codici, <br> designato siti per aziende molto importanti come la Apple, <br> azienda a cui sono sempre stato legato, <br> essendo loro <br> cliente da tempo ormai grazie all'acquisto di iPhone e iPad. <br> Lo consiglio come lavoro? <br> Assolutamente sì, <br> è un'esperienza unica e, <br> se ci siete portati <br> e vi piace scrivere codici, <br> questa è decisamente la via migliore da prendere. <br> Se avete questo dono, <br> non lasciatevi scappare quest'opportunità, <br> poiché è un lavoro ben retribuito e, <br> se saprete dargli il giusto tempo, <br> impegnandovi come non mai, <br> vi saprà soddisfare.</p>";
$img = "https://cdn.discordapp.com/attachments/906882508635926608/1175082289739337758/images.png?ex=6569efa9&is=65577aa9&hm=9272322df269dc392681a4e27acbcd724a89c78a3e7253d61b7f5e1d813b5f85&";
function elenco() {
    echo("<h2 id='elenco'>Un elenco di lavori che potrebbero interessarvi che concernono sempre questo settore:</h2>
    
    <ul>
     <li>Front-end developer</li>
     <li>Back-end developer</li>
     <li>Web designer</li>
     <li>Sviluppatore di software</li>



    </ul>


    <hr>
 <br>
 <br>
 <br>");
}
require("funzioni.php");
?>

<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/descrizione-lavoro-singolo.min.css" type="text/css" rel="stylesheet">

</head>
<body>
 <!--Descrizione singolo lavoro + immagine-->
 <div id="nav"><?php link1() ?></div>
 <h1 id="esperienza">La mia esperienza come full-stack developer</h1>
 <p id="data"><?php echo $data ?>, Roma</p>
 <p id="descrizione"><?php echo $descrizione ?></p>
 <div id="align"><img id="immagine" src=<?php echo $img ?> id="full-stack-developer" title="Cosa vuol dire veramente fare il fullstack" alt="Foto fullstack" height="230px"></div>
 <hr>
 <!--Elenco eventuali professioni legate a questo settore-->
 <?php elenco() ?>
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