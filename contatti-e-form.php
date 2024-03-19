<?php 
/**
 * Pagina contenente i recapiti e il form da compilare
*/
$titolo = "Dove contattarmi + form";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$mappa = "https://cdn.discordapp.com/attachments/906882508635926608/1186697652889456781/mappa-sede-legale.png?ex=6602ef50&is=65f07a50&hm=9c71194e2edfbe017ec987e0bfd097b7d28628bf200def6c0516f306881fe144&";
function recapiti() {
    echo("Vi lascio qui l'<strong>indirizzo:</strong><address>Via dei Prati 26, Roma</address><br>");
    echo("<strong>Telefono:</strong><br> +39 3480349156<br><br>");
    echo("Indirizzo <strong>e-mail:</strong><br> matteo.malandrino@gmail.com<br><br>");
}
function form() {
   echo "<h1 id='informazioni'>Form per richiesta <br> informazioni</h1> 
  <form action='validazione-form.php' method='post'>
  <input type='text' id='nome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' required><br><br>
        <input type='text' id='cognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='email' name='mail' minLength='0' maxLength='40' placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' id='richiesta' minLength='40' maxLength='200' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form>";
}
require("funzioni.php");


?>



<html lang="it">
<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/contatti-e-form.min.css" type="text/css" rel="stylesheet">

</head>


<body>
<!--I miei finti contatti: la mia mail, il mio numero, indirizzo e mappa sede legale-->
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id="nav"><b><?php link4() ?></b></div>
<div id="mappa-e-contatti">
<h1 id="Contatti">Contatti</h1>
<p>Ecco a voi una <strong>mappa</strong><br> per la mia <strong>sede legale:</strong><br><br>
    <img src=<?php echo $mappa ?> id="sede-legale" title="Posizione mia sede legale" alt="Posizione sede" width="500px"></p>
 
 <?php recapiti() ?>
</div>
<hr>
<div id='primoForm'><br><br><?php form() ?></div>
<hr>
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

  <ul id='contatti2'>I miei contatti
    <li>Indirizzo: <strong>Via dei Prati 26, Roma</strong></li><br>
    <li>Numero di telefono: <strong>+39 3480349156</strong></li><br>
    <li>Mail: <strong>matteo.malandrino@gmail.com</strong></li>
  </ul>

  <div id='form2'>
  <h5>Se hai bisogno di ulteriori informazioni, compila <br> pure questo form</h5>
  <form action='validazione-form.php' method='post'>
        <input type='text' id='ilTuoNome' name='nome' minLength='0' maxlength="25" placeholder='Il tuo nome' required><br><br>
        <input type='text' id='ilTuoCognome' name='cognome' minLength='0' maxlength="25" placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='laTuaEmail' name='mail' minLength='0' maxlength="40" placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' id='laTuaRichiesta' minlength="40" maxlength="200" required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form></div>


  <h4>Copyright © 2024 Matteo</h4>
  
  <h2 id='secondoLogo'>Matteo</h2>

 </footer>





 
</body>
</html>
