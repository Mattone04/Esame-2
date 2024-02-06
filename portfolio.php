<?php
/**
 * Pagina contenente il portfolio con l'elenco di tutti i lavori 
*/
$read = file_get_contents('lavori.json');
json_decode($read);
$json = json_encode($read,true);
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
function portfolio() {echo("<p id='elenco'>In questa pagina mostrerò un elenco di <strong>12 lavori</strong> effettuati nel corso della mia carriera (scolastica e non):</p>


    <ul id='lista'>
   
     <li id='lavori-in-volo'>Lavori in volo
      <ul id='volo'><li><a id='lavori1' href='lavori.php'>Assistente di volo</a>
           
        <figure>
           <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175071136929824860/Z.png?ex=6569e546&is=65577046&hm=160c3b9d3fcd435276a74a7f5f8418ca2937aa8d31511e866a70174850113bb0&' width='180' id='Lavoro-vero-e-proprio' title='Assistente di volo al lavoro' alt='Le mie interazioni con i passeggeri'>         
           <figcaption>Le mie interazioni con i passeggeri</figcaption>
       </figure></li>
      
       <li><a id='lavori2' href='lavori.php'>Pilota</a>
             <figure>
             <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175074097303134218/2Q.png?ex=6569e808&is=65577308&hm=223bc508242f6c72aca2887386c52fecf50f339f38bcc06e2b24de57facff4db&' width='180' id='La-mia-esperienza-da-pilota' title='Un pilota in volo' alt='La mia esperienza da pilota sul campo'>
             <figcaption>La mia esperienza da pilota sul campo</figcaption>
   
             </figure>
   
           </li>
   
           <li><a id='lavori3' href='lavori.php'>Controllore del traffico aereo</a>
            <figure>
            <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175075688521416744/2Q.png?ex=6569e983&is=65577483&hm=2c19f0c3edf40c82720d19186ce2f3c550fc2b1f8278e5feebbd214e726c2bd4&' width='180' height='150' id='Controllore-traffico-aereo' title='Io che lavoro come controllore del traffico aereo' alt='Foto controllore traffico aereo'>
            <figcaption>Il mio lavoro da controllore del traffico aereo</figcaption>
   
   
            </figure>
           </li>
   
           <li><a id='lavori4' href='lavori.php'>Manutenzione velivoli</a>
            <figure>
             <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175076648274640957/meccanico-aereo-300x200.png?ex=6569ea68&is=65577568&hm=46ec7a8f76c99a80e073a56685d91c1c18d0b21cee7b514ccb2d9e83af2f0717&' width='180' height='150' id='meccanico-aereo' title='Lavorazione meccanico aereo' alt='Foto meccanico aereo'>
             <figcaption>La mia esperienza da meccanico addetto ai velivoli</figcaption>
   
            </figure>
              
   
           </li>
          
   
   
       </ul>
       </li>
       
       
   
       
         <li id='lavori-supermercato'>Lavori al supermercato
   
   
           <ul id='supermercato'><li><a id='lavori5' href='lavori.php'>Cassiere</a>
               <figure>
               <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175077810939904071/9k.png?ex=6569eb7e&is=6557767e&hm=4deb82068ce2bc3f43954798c4a9127ac22d62f5934187ecbc9c3e3727ef8f31&' width='180' id='cassiere' title='Le mie mansioni da cassiere' alt='Foto cassiere'>
               <figcaption>L'inizio della mia professione da cassiere</figcaption>
   
               </figure>
           </li>
   
   
   
           <li><a id='lavori6' href='lavori.php'>Scaffalista</a>
            <figure>
            <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175078455205957712/Z.png?ex=6569ec17&is=65577717&hm=d19c7fd1987e4e5a107a96baefac5425422726c422e2b73fdc398164f7219df7&' width='180' id='scaffalista' title='La mia professione da scaffalista' alt='Foto scaffalista'>
            <figcaption>Mettendo a posto degli scaffali (professione di scaffalista)</figcaption>
   
            </figure>
      
   
   
           </li>
   
   
           <li><a id='lavori7' href='lavori.php'>Banconista</a>
            <figure>
            <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175079028676366357/9k.png?ex=6569eca0&is=655777a0&hm=e43cf4fb2ff0c3c1c2b7ed6c3581616044b2170c28066f57182da8c45efdbc71&' width='180' height='150' id='banconista' title='Il mio mestiere da banconista' alt='Foto banconista'>
            <figcaption>La mia esperienza come banconista</figcaption>
   
            </figure>
        
   
   
           </li>
   
   
           <li><a id='lavori8' href='lavori.php'>Addetto alle vendite</a>
            <figure>
            <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175079538833756160/2Q.png?ex=6569ed19&is=65577819&hm=942e1e72a15ae13075fc72c574159b8edfe53125aaba7a592f71b3b758dcee36&' width='180' id='addetto-alle-vendite' title='Il lavoro di addetto alle vendite' alt='Foto addetto alle vendite'>
            <figcaption>Io con le mie scartoffie, lavorando come addetto alle vendite</figcaption>
   
   
            </figure>
   
   
   
           </li>
       
       
       
       </ul>
       </li>
     
       
       <li id='lavori-programmazione'>Programmazione
   
          <ul id='programmazione'><li><a id='lavori9' href='lavori.php'>Web designer</a>
            <figure>
             <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175080528165220362/9k.png?ex=6569ee05&is=65577905&hm=e40501a5a8a5ae7422892f685989aef68865b6e060bca9dd1b9553fdf7ebd684&' width='180' id='web-designer' title='Io che lavoro da web designer' alt='Foto web designer'>
             <figcaption>Io con i miei schermi di web designer</figcaption>
   
   
            </figure>
   
           </li>
   
   
           <li><a id='lavori10' href='lavori.php'>Front-end developer</a>
             <figure>
              <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175081029741072414/9k.png?ex=6569ee7d&is=6557797d&hm=ddae721f6fe55230feb4ad7e7956b310c3f60f656c063e94a3b3176b3aa91702&' width='180' id='frontend-developer' title='La mia faccia pensierosa davanti agli schermi di front-end developer' alt='Foto frontend developer'>
              <figcaption>Il mio lavoro da front-end developer</figcaption>
   
   
            </figure>
      
   
   
   
           </li>
   
   
           <li><a id='lavori11' href='lavori.php'>Back-end developer</a>
             <figure>
              <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175081612153733290/images.png?ex=6569ef08&is=65577a08&hm=92d93a88e6f5ba6396291eb2592b89f2b9ab04f322513a904c4559072aff73bb&' width='180' id='backend-developer' title='La mia professione (back-end developer)' alt='Foto backend developer'>
              <figcaption>Smanettando alla tastiera come back-end developer</figcaption>
   
   
   
             </figure>
   
   
   
   
           </li>
   
   
           <li><a id='lavoro-singolo' href='descrizione-lavoro-singolo.php'>Full-stack developer</a>
             <figure>
              <img src='https://cdn.discordapp.com/attachments/906882508635926608/1175082289739337758/images.png?ex=6569efa9&is=65577aa9&hm=9272322df269dc392681a4e27acbcd724a89c78a3e7253d61b7f5e1d813b5f85&' width='180' id='fullstack-developer' title='Scritte bizzarre da full-stack developer' alt='Foto fullstack developer'>
              <figcaption>Tutti i codici possibili realizzati grazie alla mia professione da full-stack developer</figcaption>
   
   
   
             </figure>
   
   
   
   
           </ul>
           </li>
   
   
   
   
   
   
   
   
   
       
   
   
   
   
   
   
   
   
   
   
   
   
       
         
     
   
   
   
    </ul>
   
   
    <br>
    <br>
    <br>");}
    require("funzioni.php")
?>
<!DOCTYPE html>
<html lang="it">


<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/portfolio.min.css" type="text/css" rel="stylesheet">

</head>

<body>
 <!--Elenco lavori finti (raggruppati in categorie) con relative immagini-->
 <div id="nav"><?php link3() ?></div>
 <h1 id="titolo">Il mio portfolio</h1>
 <div id="portfolio">
   <?php portfolio() ?>
 </div>
 <br><br><br>
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