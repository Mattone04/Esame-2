<?php
/**
 * Pagina home del sito + chi sono + servizi
*/
$titolo = "Il mio sito web";
$michiamo = "Mi chiamo";
$nome = "Matteo Malandrino";
$professione = "Sono un <strong>full-stack developer</strong>";
$img = "https://www.addlance.com/blog/wp-content/uploads/2016/10/logo-apple-300x188.png";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$altro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor mauris nulla, id ornare lorem dapibus ut. <br> Vestibulum consectetur ultricies lacus, sit amet condimentum lectus fringilla in.";
$altro2 = "Aenean varius vestibulum suscipit. Nulla facilisi. Aliquam quis ex enim. Curabitur non dolor vitae orci fermentum hendrerit ullamcorper id sapien. Vivamus vel mi porttitor, porttitor arcu eget, tempus arcu. Ut et nibh quam.";
$altro3 = "Integer facilisis erat a ligula ultricies vehicula. Aenean imperdiet nibh et felis iaculis, vel pulvinar velit elementum. Pellentesque malesuada volutpat odio, vel pellentesque justo tristique bibendum.";
$contattami = "Contattami";
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
    <link href="css/index.min.css" type="text/css" rel="stylesheet">

</head>
<body>
 <!-- Presentazione sito (chi sono) -->
 <a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
  <div id='nav'><b><?php link2() ?></b></div>
 
 
<div id='chi-sono'>

 <h2 id="mi-chiamo"><?php echo $michiamo; ?></h2><br>
 <h1 id="nome"><?php echo $nome; ?></h1>
 <p id="professione"><?php echo $professione; ?></p>
</div>
 
 

 <div>
 <form action="preventivo.php" method="post">
<button id="bottone" type="submit">Chiedici un preventivo</button></form></div>


<div id='img'> <img src=<?php echo $img; ?> id="logo-Apple" title="Logo Apple full-stack developer"></div>
 <hr>
 
   <img id="imgAltro" name="Informazioni" title="Informazioni" alt="Informazioni" src="https://www.ticonsiglio.com/wp-content/uploads/2023/01/smart-working-lavoro.jpg">
    <div id='altro'>
      <h2 id="info">Informazioni sulla nostra azienda</h2>
      <h3>Di cosa ci occupiamo</h3>
      <p id="testo"><?php echo $altro; ?></p>
      <hr>
      <h3>Perché sceglierci</h3>
      <p id="testo2"><?php echo $altro2 ?></p>
      <hr>
      <h3>Le nostre priorità per il cliente</h3>
      <p id="testo3"><?php echo $altro3 ?></p>
   </div>
 <hr>
 <div id='elenco'>
 <h2 id="servizi">I nostri servizi e progetti</h2>
 <?php
ini_set("auto_detect_line_endings", true);
$file = "servizi-e-progetti.json";
$arrJSON = json_decode(UT::leggiTesto($file));
$ID = UT::richiestaHTTP("id");
$ID = ($ID == null) ? 1 : $ID;
$file2 = "cat2.json";
$arrCat = json_decode(UT::leggiTesto($file2));
echo "<ul>";
foreach($arrCat as $categoria){
    //creo elementi LI della lista delle categorie
    echo "<li>". $categoria->cat;
    echo ": ". $categoria->testo. "<br><br><br>";
    //faccio un altro ciclo foreach sui lavori
    foreach($arrJSON as $progetti){
    //controllo (if) se la categoria è uguale alla categoria del lavoro
    if($progetti->idcat==$categoria->id){
    //se uguale scrivo LI del lavoro
    $n = $progetti->id;
    $classeID = ($n == $ID) ? ' class="id"' : '';
    printf('<ul><li %s><a href="%s?id=%u" title="%s" >%s</a><h3 id="scritta">Quali sono i vantaggi di questi servizi e progetti?</h3><p id="loremIpsum">%s</p></li></ul><br><br>', $classeID, $progetti->link, $progetti->id, $progetti->title, $progetti->testo, $progetti->scritta);
    echo "</li>";  
  
  
}}}
?></div>
 <hr>
 <h1 id='team'>Il nostro team di sviluppo</h1>
 <div id='align1'><p><strong>Leonida Rossi</strong></p><u><p>Software Architect</p></u><img src='https://cdn.discordapp.com/attachments/906882508635926608/1215664684997414952/portrait-beautiful-young-woman-standing-grey-wall_231208-10760.png?ex=65fd92f6&is=65eb1df6&hm=e756ff6c564a90582207b7c45b4b871f0db154d4ea7e2216a3fe711d21fdd993&' width='350px' alt='Membro 1' name='Membro 1' id='membro-1' title='Primo membro del team'></div><div id='align2'><p><strong>Cristiano Barese</strong></p><p><u>Mobile App Developer</u></p><img src='https://cdn.discordapp.com/attachments/906882508635926608/1215669704912408666/depositphotos_188781580-stock-photo-handsome-cheerful-young-man-standing.png?ex=65fd97a3&is=65eb22a3&hm=4ac7ec86a954d0e4317780820802e29e545a08a689d308461b1c6348d7364200&' width="350px" alt='Membro 2' name='Membro 2' id='membro-2' title='Secondo membro del team'></div><div id='align3'><p><strong>Assunta Milanesi</strong></p><u><p>Data Scientist</p></u><img src='https://cdn.discordapp.com/attachments/906882508635926608/1215677647556714496/images.png?ex=65fd9f09&is=65eb2a09&hm=45c954d5f73f371beb0f3f149968663efa2dd266a5fb1fc90ab369d5d8b6632a&' alt='Membro 3' name='Membro 3' id='membro-3' title='Terzo membro del team' width="350px" height="235px"></div><div id='align4'><p id='matteo'><strong>Matteo Malandrino</strong></p><u><p id='founder'>Founder (CEO)</p></u><img src='https://cdn.discordapp.com/attachments/906882508635926608/1215680668479135785/maglie-ai-ferri-uomo-modello-pullover-lana-grossa-merino-superiore.png?ex=65fda1d9&is=65eb2cd9&hm=571e69e76355b6cfdc025bf4b229a6518be1adb69a15666ee41e1f3ac92b7735&' alt='Membro 4' name='Membro 4' id='membro-4' title='Quarto membro del team' width='350px' height="235px"></div>
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
  <h5>Se hai bisogno di ulteriori informazioni, <br> compila pure questo form</h5>
  <form id='secondoForm' action='validazione-form.php' method='post'>
        <input type='text' id='ilTuoNome' name='nome' minlength="0" maxlength="25" placeholder='Il tuo nome' required><br><br>
        <input type='text' id='ilTuoCognome' name='cognome' minlength="0" maxlength="25" placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='laTuaEmail' name='mail' minlength="0" maxlength="40" placeholder='La tua email' required><br><br>
        <textarea minlength="40" maxlength="200" name='Richiesta' id='laTuaRichiesta' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form></div>



  <h4>Copyright © 2024 Matteo</h4>
  
  <h2 id='secondoLogo'>Matteo</h2>


 </footer>
</body>
</html> 