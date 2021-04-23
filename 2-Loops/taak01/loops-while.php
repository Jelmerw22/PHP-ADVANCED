<?php
$leeftijd = 0;

while ($leeftijd < 18) {
    echo "Ik ben ".$leeftijd." jaar oud ik mag dus niet stemmen. </br>";
    $leeftijd ++;
        if ($leeftijd == 18) {
        echo "Ik ben ".$leeftijd." jaar oud en mag dus wel stemmen. </br>";
        }
}
?>