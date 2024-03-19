<?php
/**
 * Pagina contenente il portfolio con l'elenco di tutti i lavori 
*/
$titolo = "Il mio portfolio";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
require("public-functions.php");
use MieClassi\Utility as UT;

?>
<!DOCTYPE html>
<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/portfolio.min.css" type="text/css" rel="stylesheet">

</head>

<body>
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
  <div id='nav'><b><?php link3() ?></b></div>
 <!--Elenco lavori finti (raggruppati in categorie) con relative immagini-->
 <div id="portfolio">
 
 <?php ini_set("auto_detect_line_endings", true);
$file = "lavori.json";
$arrJSON = json_decode(UT::leggiTesto($file));
$ID = UT::richiestaHTTP("id");
$ID = ($ID == null) ? 1 : $ID;
$file2 = "cat.json";
$arrCat = json_decode(UT::leggiTesto($file2));
echo "<ul>";
foreach($arrCat as $categoria){
    //creo elementi LI della lista delle categorie
    echo "<li>". $categoria->cat;
    echo ": ". "<br>". $categoria->testo. "<br><br><br>";
    //faccio un altro ciclo foreach sui lavori
    foreach($arrJSON as $lavori){
    //controllo (if) se la categoria è uguale alla categoria del lavoro
    if($lavori->idcat==$categoria->id){
    //se uguale scrivo LI del lavoro
    $n = $lavori->id;
    $classeID = ($n == $ID) ? ' class="id"' : '';
    printf('<ul %s><li><a href="%s?id=%u" title="%s" >%s</a><h3 id="descrizione">Breve descrizione del lavoro:</h3><p id="loremIpsum">%s</p></li></ul><br><br>', $classeID, $lavori->link, $lavori->id, $lavori->title, $lavori->testo, $lavori->descrizioneLavoro);
    echo "</li>";
    
  
}}}
echo "</ul>";
?>
</div>
     <hr>
     <br><br><br>
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
  <h5 id='infoForm'>Se hai bisogno di ulteriori informazioni, <br> compila pure questo form</h5>
  <form action='validazione-form.php' method='post'>
        <input type='text' id='ilTuoNome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' required><br><br>
        <input type='text' id='ilTuoCognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='laTuaEmail' name='mail' minLength='0' maxLength='40' placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' id='laTuaRichiesta' minLength='40' maxLength='200' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form></div><br><br><br>



  <h4>Copyright © 2024 Matteo</h4><br><br><br>
  
  <h2 id='secondoLogo'>Matteo</h2>


 </footer>
    
    
    
    
    
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    </html>
   
      
     
   
 