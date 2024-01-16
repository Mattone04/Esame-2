<?php



$lavoriinvolo = ["AssistenteDiVolo", " Pilota", "ControlloreDelTrafficoAereo", "ManutenzioneVelivoli"];
$lavorisupermercato = ["Banconista", "Cassiere", "Scaffalista", "AddettoAlleVendite"];
$lavoriprogrammazione = ["Front-endDeveloper", "Back-endDeveloper", "WebDesigner", "Full-stackDeveloper"];
$servizi = ["Front-end", "Back-end", "WebDesigning", "CloudEngineering"];


$encode = json_encode($lavoriinvolo);
$encode2 = json_encode($lavorisupermercato);
$encode3 = json_encode($lavoriprogrammazione);
$encode4 = json_encode($servizi);

echo "Lavori in volo: $encode<br>";
echo "Lavori al supermercato: $encode2<br>";
echo "Lavori da programmatore: $encode3<br>";
echo "Servizi che offriamo: $encode4<br>";


?>