<?php

require("funzioni.php");
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$titolo = "I miei servizi e progetti";
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
<style>
    p{
        margin-right: 50px;
        margin-left: 50px;
    }
  #nav {
    background-color: black;
    height: 50px;
    width: 1470px;
}
#home,#link1,#link2{
        color: #fff;
        font-size: larger;
        margin-left: 10px;
        text-decoration: none;
    }
    html{
      font-size: larger;
      overflow-x: hidden;
      width: fit-content;
    }
    #home{
      position: absolute;
      left: 900px;
      top: 15px
    }
    #link1{
        position: absolute;
        left: 1000px;
        top: 15px
    }
    #link2{
        position: absolute;
        left: 1190px;
        top: 15px
    }
    #logo{
    position: absolute;
    left: 30px;
    top: -17px;
    font-size: 35px;
    color: #fff;
    text-decoration: line-through;
    font-family: fantasy;
}
#logo:hover{
    color: grey;
    opacity: 0.9;
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
h1,#align{
  text-align: center;
}
footer{
    background-color: #5A5A5A;
    color: whitesmoke;
    height: fit-content;
}
#link>li>a{
    text-decoration: none;
    color: yellow;
}
#link>li{
    margin-top: 10px;
}
#contatti>li{
    margin-top: 10px;
}
#link{
    padding-top: 60px;
    padding-left: 60px;
    display: inline-block;
    margin-bottom: 170px;
}
#link>li>a:hover{
    text-decoration: underline;
    opacity: 0.6;
}
#secondoLogo{
    text-align: right;
    font-family: fantasy;
    margin-right: 50px;
    font-size: 65px;
    color: yellow;
    text-decoration: line-through;
}
#contatti{
    margin-left: 100px;
    display: inline-block;
}
#ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: rgb(225, 239, 38);
    text-decoration: underline;
    height: fit-content;
    font-size: 15px;
    width: 300px;
    height: 40px;
}
#invia{
    background-color: rgb(225, 239, 38);
    color:white;
    width: 70px;
    height: 40px;
}
#invia:hover{
    color:aquamarine;
    text-decoration: underline;
    opacity: 0.7;
    border-style: groove;
    border-radius: 10px;
}
#form2{
    display: inline-block;
    margin-left: 300px;
}
h5{
    font-size: 25px;
}
h4{
    text-align: center;
}
#social-bar {
    top: 0;
    margin-top: 100px;
    bottom: 0;
    left: 0;
    margin-left: 100px;
    height: -moz-fit-content;
    height: fit-content
}

#social-bar a {
    text-align: center;
    transition: .5s;
    padding: 15px;
    font-size: 20px;
    text-decoration: none;
    color: #fff
}

#social-bar a:hover {
    opacity: .8;
    color: #258ce6;
    border-radius: 10px;
    border-style: groove
}
html{
    overflow-x: hidden;
    background-color: rgb(225, 239, 38);
}

.facebook {
    background: #3b5998
}

.instagram {
    background: #dd2a7b
}

.twitter {
    background: #55acee
}
.instagram,.twitter{
  margin-left: 60px;
}
figure{
    text-align: center;
}
@media(min-width: 768px)and (max-width: 1024px) {

    p{
        margin-right: 1000px;
    }
    h1{
        text-align: left;
        margin-left: 80px;
    }
    #home{
        left: 200px
    }
    #link1{
        left: 300px
    }
    #link2{
        left: 500px
    }
    figure{
        text-align: left;
    }
    footer{
        font-size: 15px;
    }
    #contatti{
        margin-left: 30px;
    }
    #form2{
        margin-left: 20px;
    }
    h5{
        font-size: 13px;
    }
    #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
  
        width: fit-content;

    }
    h4{
        margin-left: -400px;
    }
    #secondoLogo{
        margin-left: -70px;
        text-align: center;
        color: yellow;
        font-size: 50px;
    }


}


@media(min-width: 320px)and (max-width: 480px) {

   
p{
    margin-right: 1px;
}
figure{
    text-align: left;
}
img{
    width: 250px;
}
#home,#link1,#link2{
    font-size: 11px;
}
#home{
    left: 140px;
}
#link1{
    left: 180px
}
#nav{
    width: 320px
}
#link2{
    left: 260px
}
.twitter,.instagram{
    margin-left: 20px;
}
footer{
    font-size: large;
}
#contatti{
    font-size: 15px;
    margin-left: -10px;
}
#link{
    margin-bottom: 100px;
}
#form2{
    margin-left: 100px;
}
h4{
   left: 100px
}
#secondoLogo{
    font-size: 40px;
}
h5{
    font-size: 13px;
}
#ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
    width: fit-content;
}
html{
    max-width: 100%;
}

}
</style>
</head>
<body>
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id='nav'><b><?php link5() ?></b></div>
<?php
ini_set("auto_detect_line_endings", true);
$file = "servizi-e-progetti.json";
$arrJSON = json_decode(UT::leggiTesto($file));
$ID = UT::richiestaHTTP("id");
$ID = ($ID == null) ? 1 : $ID;



?>

<?php printf("<h1>%s</h1>", $arrJSON[$ID - 1]->testo); 
printf("<p>%s</p>", $arrJSON[$ID - 1]->paragrafoConImmagine); ?>
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

  <ul id='contatti'>I miei contatti
    <li>Indirizzo: <strong>Via dei Prati 26, Roma</strong></li><br>
    <li>Numero di telefono: <strong>+39 3480349156</strong></li><br>
    <li>Mail: <strong>matteo.malandrino@gmail.com</strong></li>
  </ul>

  <div id='form2'>
  <h5>Se hai bisogno di ulteriori informazioni, compila <br> pure questo form</h5>
  <form action='validazione-form.php' method='post'>
        <input type='text' id='ilTuoNome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' required><br><br>
        <input type='text' id='ilTuoCognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='laTuaEmail' name='mail' minLength='0' maxLength='40' placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' id='laTuaRichiesta' minLength='40' maxLength='200' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form></div>



  <h4>Copyright © 2024 Matteo</h4>
  
  <h2 id='secondoLogo'>Matteo</h2>


 </footer>
</body>
</html>
