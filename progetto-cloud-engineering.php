<?php

$titolo = "Progetto 4";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$img = "https://cdn.ttgtmedia.com/rms/onlineimages/cloud_computing-cloud_engineer-f_mobile.png";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
function testoRandom4() {
    echo("<h2 id='titolo'>Progetto <br> cloud engineering</h2>");
    echo("<p id='testo'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo arcu, interdum eu felis at, fringilla feugiat tortor. Nulla felis justo, facilisis efficitur dapibus eget, iaculis sit amet turpis. Nulla velit ex, sagittis ac vulputate vel, dictum in ipsum. Duis placerat massa a lacus scelerisque, quis porta elit luctus. Phasellus tortor leo, blandit sit amet libero sed, faucibus molestie dui. Phasellus vel neque felis. Nullam in arcu diam. Suspendisse eget efficitur leo, sit amet molestie nulla. Proin eget finibus nibh. Proin interdum sit amet magna nec semper. Vestibulum egestas dolor justo, at pharetra ligula bibendum sit amet.

    Sed posuere, elit porttitor varius varius, massa dolor convallis odio, eget dictum ante tortor ac sapien. Ut ac dui laoreet, vehicula dui eget, imperdiet nisi. Ut ut mi a magna viverra tincidunt. Vestibulum ut tortor vel odio imperdiet vehicula ac quis elit. Donec ac diam ultrices urna accumsan luctus vel vel arcu. <br><br><br> Proin quis turpis vel ligula venenatis aliquet in in justo. Vestibulum vulputate volutpat nulla, a dignissim elit viverra ac. Suspendisse vitae ligula erat. Sed a lacinia nibh, eu ultricies augue. Nunc vel placerat felis. Vestibulum hendrerit nisl ante, at vulputate diam bibendum eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget rhoncus dui, at ornare tellus. Quisque ornare ligula neque. Sed sed pulvinar dolor.
    
    Ut semper volutpat nisi, eget iaculis sapien. Pellentesque vehicula sapien at urna sagittis maximus. Integer viverra pellentesque diam, ut auctor turpis lobortis ac. Etiam id arcu in massa consequat vulputate. Nulla imperdiet feugiat dolor, nec venenatis nisl. <br><br><br> Praesent in velit eu ex dignissim ultrices eget aliquam urna. Cras sit amet malesuada arcu. Ut eu faucibus justo. Duis bibendum condimentum sollicitudin. Etiam hendrerit, urna nec pretium ultrices, justo elit sodales libero, nec condimentum enim tellus viverra augue.
    
    Nunc vel porttitor nisl. Fusce vitae ex nec tellus congue tristique id a est. Vestibulum posuere lacus et urna vehicula lacinia. Nulla vitae efficitur lectus. Nulla et metus mattis lectus malesuada fringilla. Donec dapibus nisi imperdiet felis volutpat, ut viverra neque finibus. Duis malesuada sapien nec magna ultricies laoreet. Nam tempor tellus id massa dapibus volutpat. Aenean in ipsum lobortis, aliquam quam vitae, laoreet lorem. Suspendisse fringilla urna enim, eu varius ante aliquam vitae. In hac habitasse platea dictumst. Sed sit amet auctor magna. Duis rutrum odio malesuada vestibulum tempus. <br><br><br> Vestibulum tincidunt ac mi eu porttitor. Etiam ut nulla pretium, vestibulum leo imperdiet, sodales lorem.
    
    Phasellus varius, augue et lacinia posuere, velit nisi consequat lectus, sit amet pretium est dolor blandit magna. Praesent interdum est at tortor ultricies pretium. Aliquam erat volutpat. Suspendisse vestibulum purus orci, a faucibus neque posuere ac. Sed at orci feugiat, porttitor lorem sed, fermentum elit. Aliquam ut tellus et leo sagittis malesuada. Quisque et rhoncus nibh, eget tempus nisi. In malesuada diam sit amet nunc consectetur cursus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at nibh quis quam malesuada sollicitudin. Suspendisse potenti. Mauris justo lectus, placerat nec diam et, facilisis euismod quam. Vivamus lacinia posuere tortor, ut fringilla ante imperdiet sit amet.</p>");
}

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
      footer{
    background-color: #5A5A5A;
    color: whitesmoke;
    height: fit-content;
    width: fit-content;
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
   #titolo,p{
    text-align: center;
   }
   #testo{
    margin-left: 50px;
    margin-right: 50px;
   }
   html{
    font-size: larger;
    background-color: rgb(225, 239, 38);
   }
   img{
    margin-top: 50px;
    margin-left: 10px;
   }
   #immagine{
    text-align: center;
   }
   
  #home,#link1,#link2{
    color: #fff;
    font-size: larger;
    margin-left: 10px;
    text-decoration: none;
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



  }

  /* 
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {
  
  /* CSS */

  #img{
    width: 200px;
   }
   #immagine{
    text-align: left;
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
    #testo{
      margin-right: 10px;
    }
   #titolo{
    text-align: left;
    margin-left: 20px;
   }
   html,body{
      max-width: 100%;
      overflow-x: hidden;
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

</head>

<body>
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id="nav"><b><?php link5() ?></b></div>
<?php testoRandom4() ?>
<div id="immagine"><img src= <?php echo $img ?> title="Il mio quarto progetto" name="Il mio quarto progetto" id="img" alt="Immagine quarto progetto" width="500px" height="300px"></div>
<hr>
<!-- I miei finti link + contatti e informazioni -->
<footer>
<br><br><br>
<div id='social-bar'>
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