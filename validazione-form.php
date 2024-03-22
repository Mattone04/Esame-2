<?php
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
require("public-functions.php");
use MieClassi\Utility as UT;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="il mio sito web">
    <title>Validazione form</title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
  <style>
    #home{
    position:absolute;
    top:20px;
    left:900px;
    font-size: larger;
  }
  #link1{
    position:absolute;
    top:20px;
    left:1000px;
    font-size: larger;
  }
  #link2{
    position: absolute;
    top:20px;
    left:1190px;
    font-size: larger;
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
html{
  background-color: rgb(225, 239, 38)
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
    margin-right: 200px;
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
#invia2{
    background-color: rgb(225, 239, 38);
    color:white;
    width: 70px;
    height: 40px;
}
#invia2:hover{
    color:aquamarine;
    text-decoration: underline;
    opacity: 0.7;
    border-style: groove;
    border-radius: 10px;
}
#form2{
    display: inline-block;
    margin-left: 170px;
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
#logo{
    position: absolute;
    left: 20px;
    top: -17px;
    font-size: 35px;
    color: #fff;
    text-decoration: line-through;
    font-family: fantasy;
}
#logo:hover{
  opacity: 0.9;
  color: grey;
}
  /* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
  /* CSS */
  html,body{
        overflow-x: hidden;
        max-width: 100%;
  }
  #logo{
      font-family: cursive;
      font-size: 30px;
    }
    #secondoLogo{
      font-size: 40px;
      font-family: cursive;
    }
    #home,#link1,#link2{
      font-size: 11px;
    }
    #home{
      left: 135px;
    }
    #link1{
      left: 185px;
    }
    #link2{
      left: 265px
    }

}
  </style>
</head>
<body>
  <?php require("funzioni.php"); ?>
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id='nav'><b><?php link5() ?></b></div>
 <?php
 /*Pagina per la validazione dei dati del form
 */
 $nome = UT::richiestaHTTP("nome");
 $cognome = UT::richiestaHTTP("cognome");
 $email = UT::richiestaHTTP("mail");
 $richiesta = UT::richiestaHTTP("Richiesta");
 if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h1>Validazione form</h1>";
    echo "<p id='testo'>L'elemento <strong>'$email'</strong> è valido! <br> <h1>Il form è valido!</h1></p>";
    echo "<style>
    #testo{
      font-size: 25px;
    }
    h1{
      font-size: 35px;
    }
    #home,#link1,#link2{
      color: #fff;
      font-size: 20px;
      margin-left: 10px;
      text-decoration: none;
    }
    #home{
      position: absolute;
      top: 20px;
      left: 1005px;
    }
    #link1{
      position: absolute;
      top: 20px;
      left: 1105px;
    }
    #link2{
      position: absolute;
      top: 20px;
      left: 1305px;
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
      background-color: black;
      height: 50px;
    }
     html{
      background-color: rgb(225, 239, 38);
      color: black;
      text-align: center;
      font-size: larger
     }
    .facebook,.instagram,.twitter{
      margin-left: 10px;
    }
    #contatti>li{
      margin-left: -110px;
      font-size: 18px;
    }
    #form2{
      margin-left: 40px;
    }
    #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
      width: fit-content;
    }
    h5{
      font-size: 13px;
    }
    h4{
      margin-left: -50px;
    }
    #secondoLogo{
      text-align: left;
      margin-left: 20px;
      font-family: cursive;
    }
    @media(min-width: 768px)and (max-width: 1024px) {
      #home{
       left: 200px
      }
      #link1{
       left: 300px
      }
      #link2{
       left: 500px;
      }
      form{
        margin-left: 20px
      }
      #testo{
        margin-left: 20px
      }
      }
      
    @media (min-width: 320px) and (max-width: 480px) {
  
      /* CSS */
      h1,#testo{
        text-align: left;
      }
      #home,#link1,#link2{
        font-size: 11px;
        color: #fff;
        position: absolute
      }
      html{
        max-width: 100%
      }
      #home{
        left: 145px;
      }
      #link1{
        left: 185px;
      }
      #link2{
        left: 265px
      }
      #checkmark{
        width: 270px;
        margin-left: 20px
      }
      p,h1,h2{
        margin-left: 20px
      }
      #align{
        text-align: left;
      }
      #logo{
        font-family: cursive;
        font-size: 30px;
      }
      .facebook,.instagram,.twitter{
        margin-left: 10px;
      }
      #contatti>li{
        margin-left: -110px;
        font-size: 18px;
      }
      #form2{
        margin-left: 40px;
      }
      #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
        width: fit-content;
      }
      h5{
        font-size: 13px;
      }
      h4{
        margin-left: -50px;
      }
      #secondoLogo{
        text-align: left;
        margin-left: 20px;
        font-family: cursive;
      }
      }
    </style>
  <div id='align'><img src='https://cdn.discordapp.com/attachments/906882508635926608/1195380634437288047/checkmark.jpg?ex=6606d678&is=65f46178&hm=f5e4aeebd2bf7192e21288be3a47f8a232c685b1b38c690efbe790b906bcafea&' name='Checkmark' id='checkmark' title='Checkmark' alt='Checkmark' width='350px' height='350px'></div><hr>";
 } else {
    echo "<h1>Validazione form</h1>";
    echo "<p id='testo'>L'elemento <br> <strong>'$email'</strong> non è valido o non è presente! <br> Riprovare.</p> <hr>";
    echo "<style> #testo{
      color: red;
      font-size: larger;
    }
    h1{
      font-size: 30px;
      text-align: center;
    }
    #home,#link1,#link2{
      color: #fff;
      font-size: 25px;
      margin-left: 10px;
      text-decoration: none;
    }
    #home{
      position: absolute;
      top: 20px;
      left: 900px;
    }
    #link1{
      position: absolute;
      top: 20px;
      left: 1000px;
    }
    #link2{
      position: absolute;
      top: 20px;
      left: 1190px;
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
      background-color: black;
      height: 50px;
    }
    #nome,#cognome,#richiesta{
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-color: orange;
      text-decoration: underline;
      height: fit-content;
      width: 500px;
      height: 40px;
    }
    #email{
      font-family: Georgia, 'Times New Roman', Times, serif;
      background-color: #FF7F7F;
      text-decoration: underline;
      height: fit-content;
      width: 500px;
      height: 40px;
    }
    ::-webkit-scrollbar {
      display: none;
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
    }

    @media(min-width: 768px)and (max-width: 1024px) {
      #home{
       left: 200px
      }
      #link1{
       left: 300px
      }
      #link2{
       left: 500px;
      }
      form{
        margin-left: 20px
      }
      #testo{
        margin-left: 20px
      }



 }
    /* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
    /* CSS */
    h1{
      text-align: center;
      font-size: 25px;
    }
    #informazioni{
      text-align: center
    }
    html{
      font-size: large;
    }
    #home,#link1,#link2{
      font-size: 11px;
    }
    #home{
      left: 135px;
    }
    #link1{
      left: 185px;
    }
    #link2{
      left: 265px
    }
    form{
      margin-left: 20px
    }
    #testo{
      margin-left: 20px
    }
  #nome,#cognome,#email,#richiesta{
    width: 190px;
  }
  #logo{
    font-family: cursive;
    font-size: 30px;
  }
  .facebook,.instagram,.twitter{
    margin-left: 10px;
  }
  #contatti>li{
    margin-left: -110px;
    font-size: 18px;
  }
  #form2{
    margin-left: 40px;
  }
  #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
    width: fit-content;
  }
  h5{
    font-size: 13px;
  }
  h4{
    margin-left: -50px;
  }
  #secondoLogo{
    text-align: left;
    margin-left: 20px;
    font-family: cursive;
  }}</style>
    <h1 id='informazioni'>Form per richiesta <br> informazioni</h1> 
    <form action='validazione-form.php' method='post'>
        <input required type='text' id='nome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' value=$nome><br><br>
        <input required type='text' id='cognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' value=$cognome><br><br>
        <input required type='text' id='email' name='mail' minLength='0' maxLength='40' placeholder='La tua email' value=$email><br><br>
        <textarea name='Richiesta' id='richiesta' minLength='40' maxLength='200' required placeholder='Richiesta'>$richiesta</textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento dei <br> dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia'></form><br><br><hr>";
  } 

 ?>
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
        <input type='text' id='ilTuoNome' minLength='0' maxLength='25' name='nome' placeholder='Il tuo nome'><br><br>
        <input type='text' id='ilTuoCognome' minLength='0' maxLength='25' name='cognome' placeholder='Il tuo cognome' required><br><br>
        <input type='text' id='laTuaEmail' minLength='0' maxLength='40' name='mail' placeholder='La tua email' required><br><br>
        <textarea name='Richiesta' minLength='40' maxLength='200' id='laTuaRichiesta' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia2' name='Invia'></form></div>



  <h4>Copyright © 2024 Matteo</h4>
  
  <h2 id='secondoLogo'>Matteo</h2>


 </footer>

</body>






</html>
