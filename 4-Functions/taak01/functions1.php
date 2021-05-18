<?php

function schrijfKleur($kleur){
    echo $kleur;
    echo "<p style='color:$kleur;'>";
    echo "<br>";
}

schrijfKleur("red");
schrijfKleur("blue");
schrijfKleur("purple");
schrijfKleur("yellow");
?>
