<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Advanced Eindopdracht.</title>
</head>
<body>
    Tekstkleur;
    <br>
    <select name="lievelingskleur">
        <?php
            $kleuren = array("red", "blue", "green", "black", "brown");

            foreach ($kleuren as $value) {
                echo  "<option>$value</option>";
}
        ?>
    </select>
</body>
</html>

