<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
?>
<!DOCTYPE html>
<html>
<body>
    <label for="Klas">Kies een Klas:</label>
    <select name="klassen">
    <?php
    foreach ($klassen as $value):
        echo '<option value="'.$klassen.'">'.$value.'</option>';
    endforeach;
    ?>
    </select>
    <input type="submit">
</body>
</html>
<?php
foreach ($klassen as $value) {
    echo "<li>$value</li>";
}
?>
