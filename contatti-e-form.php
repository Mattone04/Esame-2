<?php 
/**
 * Pagina contenente i recapiti e il form da compilare
*/
$titolo = "Dove contattarmi + form";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$mappa = "https://cdn.discordapp.com/attachments/906882508635926608/1186697652889456781/mappa-sede-legale.png?ex=65943150&is=6581bc50&hm=a88346ce02f934d3bfad04db044ea74a6e340fae3c82a870561ea212d6d1eda8&";
function recapiti() {
    echo("Vi lascio qui l'indirizzo:<address>Via dei Prati 26, Roma</address><br>");
    echo("Telefono: +39 3480349156<br><br>");
    echo("Indirizzo e-mail: matteo-malandrino@gmail.com<br><br><hr><br><br>");
}
function form() {
    echo("<form action='validazione-form.php' method='post' name='datiUtenti'>
    <input type='text' id='nome' name='nome' placeholder='Il tuo nome' required><br><br>
    <input type='text' id='cognome' name='cognome' placeholder='Il tuo cognome' required><br><br>
    <input type='text' id='email' name='mail' placeholder='La tua email' required><br><br>
    <textarea name='Richiesta' id='richiesta' placeholder='Richiesta' required></textarea><br><br>
    <input type='checkbox' id='spunta-dati'>
    <label for='spunta-dati'>Acconsento al trattamento dei dati personali</label><br><br>
    <input type='submit' id='invia' name='Invia'></form>");
}
require("funzioni.php")
?>





<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/contatti-e-form.min.css" type="text/css" rel="stylesheet">

</head>


<body>
<!--I miei finti contatti: la mia mail, il mio numero, indirizzo e mappa sede legale-->
<?php link4() ?>
<h1 id="Contatti">Contatti</h1>
<div id="mappa-e-contatti">
    <p>Ecco a voi una mappa per la mia sede legale:<br><br>
    <img src=<?php echo $mappa ?> id="sede-legale" title="Posizione mia sede legale" alt="Posizione sede" width="500px"></p>
 
 <?php recapiti() ?>
</div>
 <!--Il form che gli utenti possono compilare per richiedere eventuali informazioni-->
 <div id="form">
  <h1 id="informazioni">Form per richiesta informazioni</h1>
  <?php form() ?>
 </div>
 <hr><br><br><br>
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