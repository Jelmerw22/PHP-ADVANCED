<?php
echo "Voornaam is; ".$_POST["voornaam"];
echo "<br>";
echo "Achternaam is; ".$_POST["achternaam"];
echo "<br>";
echo "Klas is; ".$_POST["klas"];
echo "<br>";
echo "Leeftijd is; ".$_POST["leeftijd"];
echo "<br>";
echo "Adress is; ".$_POST["adress"];
echo "<br>";
echo "Plaatsnaam is; ".$_POST["plaatsnaam"];
echo "<br>";
echo "Favoriete muziekband is; ".$_POST["favorieten-muziekband"]; 
echo "<br>";
echo "Geslacht is; ".$_POST["geslacht"]; 
echo "<br>";
echo "Lievelingskleur is; ".$_POST["lievelingskleur"]; 
$achtergrondkleur= $_POST["lievelingskleur"];
echo "<body style ='background-color:$achtergrondkleur'>";
?>

