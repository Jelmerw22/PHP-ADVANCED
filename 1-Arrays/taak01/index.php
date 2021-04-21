<?php

$student1 = array(
    "voornaam" => "Piet",
    "achternaam" => "Peters",
    "leeftijd" => "17",
    "klas" => "5A"
);

$student2 = array(
    "voornaam" => "Mohammed",
    "achternaam" => "Kudus",
    "leeftijd" => "20",
    "klas" => "De Toekomst 1"
);

$student3 = array(
    "voornaam" => "Els",
    "achternaam" => "De Vrij",
    "leeftijd" => "23",
    "klas" => "7A"
);

echo "Gegevens van ". $student2["voornaam"]." ". $student2["achternaam"].": Klas = ". $student2["klas"]." en hij is ". $student2["leeftijd"]." jaar oud.";

?>