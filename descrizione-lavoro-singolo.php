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
$descrizione = "Lavoro attualmente come <br> full-stack developer, <br> un lavoro che <br> richiede molta dedizione <br> e a cui sono sempre stato portato, <br> essendo nato <br> nell'era digitale <br> e praticamente cresciuto <br> scrivendo codici. <br><br><br> Questo lavoro mi ha divertito <br> fin dall'inizio: <br> ho scritto codici, <br> designato siti per aziende <br> molto importanti come la Apple, <br> azienda a cui sono <br> sempre stato legato, <br> essendo loro <br> cliente da tempo ormai grazie <br> all'acquisto di iPhone e iPad. <br><br><br> Lo consiglio come lavoro? <br> Assolutamente sì, <br> è un'esperienza unica e, <br> se ci siete portati <br> e vi piace scrivere codici, <br> questa è decisamente <br> la via migliore da prendere. <br><br><br> Se avete questo dono, <br> non lasciatevi scappare <br> quest'opportunità, <br> poiché è un lavoro <br> ben retribuito e, <br> se saprete dargli il giusto tempo, <br> impegnandovi come non mai, <br> vi saprà soddisfare.</p>";
$img = "https://i0.wp.com/otero.edu/wp-content/uploads/2023/10/full-stack-developer-ges375.jpg?resize=768%2C384&ssl=1";
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

<!DOCTYPE html>
<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/descrizione-lavoro-singolo.min.css" type="text/css" rel="stylesheet">

</head>
<body>
 <!--Descrizione singolo lavoro + immagine-->
 <a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
 <div id="nav"><b><?php link1() ?></b></div>
 <h1 id="esperienza">La mia <br> esperienza come <br> full-stack <br> developer</h1>
 <p id="data"><?php echo $data ?>, Roma</p>
 <p id="descrizione"><?php echo $descrizione ?></p>
 <div id="align"><img id="immagine" src=<?php echo $img ?> id="full-stack-developer" title="Cosa vuol dire veramente fare il fullstack" alt="Foto fullstack" height="230px"></div>
 <hr>
 <!--Elenco eventuali professioni legate a questo settore-->
 <?php elenco() ?>
 <!-- I miei finti link + contatti e informazioni -->
 <footer>
<br><br><br>
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
  <ul id='link'>Accesso rapido
    <li><a href='index.php' title='Vai alla home page'>Home</a></li><br>
    <li><a href='portfolio.php' title='Vai alla pagina del portfolio'>Portfolio</a></li><br>
    <li><a href='contatti-e-form.php' title='Vai alla pagina dei contatti'>Contatti + form</a></li><br>
  </ul>

  <ul id='contatti'>I miei contatti
    <li>Indirizzo: <strong>Via dei Prati 26, Roma</strong></li><br>
    <li>Numero di telefono: <strong>+39 3480349156</strong></li><br>
    <li>Mail: <strong>matteo.malandrino@gmail.com</strong></li>
  </ul>

  <div id='form2'>
  <h5>Se hai bisogno di ulteriori informazioni, compila <br> pure questo form</h5>
  <form action='validazione-form.php' method='post'>
        <input type='text' id='ilTuoNome' name='nome' placeholder='Il tuo nome' required><br><br>
        <input type='text' id='ilTuoCognome' name='cognome' placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='laTuaEmail' name='mail' placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' id='laTuaRichiesta' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form></div>



  <h4>Copyright © 2024 Matteo</h4>
  
  <h2 id='secondoLogo'>Matteo</h2>


 </footer>






</body>






</html>