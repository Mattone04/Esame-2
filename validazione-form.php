<!DOCTYPE html>
<html>
<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title>Validazione form</title>
    <?php $social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"; ?>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
  <style>
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
  </style>
</head>
<body>
  <?php require("funzioni.php"); ?>
<div id='nav'> <?php link5() ?> </div>
 <?php
 /*Pagina per la validazione dei dati del form
 */
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$nome = "nome";
$cognome = "cognome";
$mail = "mail";
$richiesta = "Richiesta";
 $var1 = $_POST["nome"];
 $var2 = $_POST["cognome"];
 $var3 = $_POST["mail"];
 $var4 = $_POST["Richiesta"];
 if(filter_var($var3, FILTER_VALIDATE_EMAIL)) {
    echo "<h1>Validazione form</h1>";
    echo "<p id='testo'>L'elemento <strong>$var3</strong> è valido! <br> <h1>Il form è valido!</h1></p>";
    echo "<style>
    #testo{
      font-size: 25px;
    }
    h1{
      font-size: 35px;
    }
    #home,#link1,#link2{
      color: blue;
      font-size: large;
      display: inline;
      margin-left: 10px;
      text-decoration: none;
    }
    #home{
      position: absolute;
      top: 20px;
      left: 10px;
    }
    #link1{
      position: absolute;
      top: 20px;
      left: 70px;
    }
    #link2{
      position: absolute;
      top: 20px;
      left: 200px;
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
     html{
      background-color: green;
      color: white;
      text-align: center;
    }</style>";
    echo "<img src='https://cdn.discordapp.com/attachments/906882508635926608/1195380634437288047/checkmark.jpg?ex=65b3c7f8&is=65a152f8&hm=357d5b3e155291473c610e3f892ac9755b20d7c497b8aea40ffe3b97388f5424&' name='Checkmark' title='Checkmark' alt='Checkmark' width='350px' height='350px'>";
 } else{
    echo "<h1>Validazione form</h1>";
    echo "<p id='testo'>L'elemento <strong>$var3</strong> non è valido! Riprovare.</p>";
    echo "<style> #testo{
      color: red;
      font-size: larger;
    }
    h1{
      font-size: 30px;
      text-align: center;
    }
    #home,#link1,#link2{
      color: blue;
      font-size: large;
      display: inline;
      margin-left: 10px;
      text-decoration: none;
    }
    #home{
      position: absolute;
      top: 20px;
      left: 10px;
    }
    #link1{
      position: absolute;
      top: 20px;
      left: 70px;
    }
    #link2{
      position: absolute;
      top: 20px;
      left: 200px;
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
    #nome,#cognome,#email,#richiesta{
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-color: orange;
      text-decoration: underline;
      height: fit-content;
      width: 500px;
      height: 40px;
    }
      html{
        font-size: larger;
      }
      #invia{
        background-color: orange;
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
    }</style>
    <h1 id='informazioni'>Form per richiesta informazioni</h1> 
  <form action='validazione-form.php' method='post'>
  <input type='text' id='nome' name='nome' placeholder='Il tuo nome' required><br><br>
        <input type='text' id='cognome' name='cognome' placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='email' name='mail' autocomplete='off' placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' id='richiesta' placeholder='Richiesta' required></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al trattamento dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form>";
  }
 ?>

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
