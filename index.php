  
<?php

require("persona.php");

$impiegato_salariato = new ImpiegatoSalariato("Luigi", "Mario", "RSTMNL88M09L219F", "001", 50, 22);

$impiegato_commissione = new ImpiegatoSuCommissione("Mario", "Mario", "MMRMMR88M09L219F", "002", "Manutenzione gabinetti", 400);

$impiegato_ore = new ImpiegatoAdOre("Toad", "Il Fungo", "TDDFNG88M09L219F", "003", 8, 160);


echo "<h1>Impiegato Salariato</h1>";

$impiegato_salariato->to_string();
$impiegato_salariato->calcola_compenso();

echo "<br><br><hr>";

echo "<h1>Impiegato su Commissione</h1>";

$impiegato_commissione->to_string();
$impiegato_commissione->calcola_compenso();

echo "<br><br><hr>";

echo "<h1>Impiegato ad Ore</h1>";

$impiegato_ore->to_string();
$impiegato_ore->calcola_compenso();





?>