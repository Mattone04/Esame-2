<?php
/*Funzioni utili per non ripetere sempre lo stesso codice per ogni pagina
*/
function link1() {
    echo("<a href='index.php' id='home'>Home</a> <a id='link1' href='portfolio.php'>Il mio portfolio</a> <a id='link2' href='contatti-e-form.php'>Contatti</a>");
}
function link2() {
    echo("<a id='link1' href='portfolio.php'>Il mio portfolio</a>");
}
function link3() {
    echo("<a href='index.php' id='home'>Home</a> <a id='link2' href='contatti-e-form.php'>Contatti</a>");
}
function link4() {
    echo("<a href='index.php' id='home'>Home</a> <a id='link2' href='portfolio.php'>Il mio portfolio</a>");
}
?>