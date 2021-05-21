<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Advanced Eindopdracht.</title>
</head>
<body>
<form name="invoerform" action="advanced-2.php" method="POST">
    Achtergrondkleur;
    <br>
    <select name="achtergrondkleur">
        <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
            foreach ($kleuren as $value) {
                echo  "<option>$value</option>";
            }
        ?>
    </select>
    <br>

    Tekstkleur;
    <br>
    <select name="tekstkleur">
        <?php
            foreach ($kleuren as $value) {
                echo  "<option>$value</option>";
            }
            ?>
    </select>
    <br>

    Font variant;
    <br>
    <select name="font">
        <?php
            $font = array("normal", "small-caps", "all-small-caps", "petite-caps", "all-petite-caps", "unicase");
            foreach ($font as $value) {
                echo "<option>$value</option>";
            }
        ?>
    </select>
    <br>    

    Border style;
    <br>
    <select name="borderstyle">
        <?php
            $styles= array("none", "groove", "dashed", "solid", "dotted", "double");
            foreach ($styles as $value) {
                echo "<option>$value</option>";
            }
        ?>
    </select>
    <br>
    Border kleur;
    <br>
    <select name="borderkleur">
        <?php
            foreach ($kleuren as $value) {
                echo  "<option>$value</option>";
            }
        ?>
    </select>
    <br>
    Table border (px);
    <input type="text" name="tableborder">
    <br>
    Cel-padding (px);
    <input type="text" name="cel-padding">
    <br>
    <input type="submit" name="Verstuur antwoord.">
</form>
</body>
</html>

