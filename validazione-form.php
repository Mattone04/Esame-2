<html>
<head>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="il mio sito web">
    <title>Validazione dati form</title>
  
</head>
<body>
   <h1>Validazione form</h1>
 <?php
 /*Pagina per la validazione dei dati del form
 */
$nome = "nome";
$cognome = "cognome";
$mail = "mail";
$richiesta = "Richiesta";
 $var1 = $_POST["nome"];
 $var2 = $_POST["cognome"];
 $var3 = $_POST["mail"];
 $var4 = $_POST["Richiesta"];
 if(filter_var($var3, FILTER_VALIDATE_EMAIL)) {
    echo "L'elemento $mail è valido! <br> <h1>Il form è valido!</h1>";
    echo "<style> html{
      background-color: green;
      color: white;
      font-size: larger;
      text-align: center;
    }</style>";
    echo "<img src='https://cdn.discordapp.com/attachments/906882508635926608/1195380634437288047/checkmark.jpg?ex=65b3c7f8&is=65a152f8&hm=357d5b3e155291473c610e3f892ac9755b20d7c497b8aea40ffe3b97388f5424&' name='Checkmark' title='Checkmark' alt='Checkmark' width='350px' height='350px'>";
 } else{
    echo "L'elemento $mail non è valido! <br>";
    echo "<style> html{
      background-color: red;
      color: black;
      font-size: larger;
      text-align: center;
    }
    img{
      margin-top: 20px;
    }</style>";
    echo "<img src='https://cdn.discordapp.com/attachments/906882508635926608/1195382658759397496/x-rossa.jpeg?ex=65b3c9da&is=65a154da&hm=261b6cbb9ca846835446b1aece59e61e09af8eaff7e3dbe41530f15dbd9891c7&' name='X-Rossa' title='X Rossa' alt='X-Rossa' width='350px' height='350px'>";
 }
 ?>




</body>






</html>
