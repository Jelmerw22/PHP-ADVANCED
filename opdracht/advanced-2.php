<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Advanced Eindopdracht.</title>
</head>
<style>
    *{
        margin: auto;
        font-variant-caps: <?php echo $_POST["font"]?>;
    }
    table, th, td{
        border: <?php echo $_POST["tableborder"] ?> solid black;
        padding: <?php echo $_POST["cel-padding"] ?>;
        border-style: <?php echo $_POST["borderstyle"]?>;
        border-color: <?php echo $_POST["borderkleur"]?>;
    }

</style>
<body>
    <?php
        $data = array("Voornaam"=>"Jelmer", "Leeftijd"=>"17", "Klas"=>"0C", "Sport"=>"Voetbal", "Woonplaats"=>"Amstelveen");
        $achtergrondkleur= $_POST["achtergrondkleur"];
        echo "<body style ='background-color:$achtergrondkleur'>";
        $tekstkleur= $_POST["tekstkleur"];
        echo "<span style='color:$tekstkleur'>";
    ?>

    <table style="width: 40%;">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
    </table>

    <?php function maakRij($value,$key){ ?>
        <table style="width: 40%">
            <tr>
                <td><?php echo "$value"; ?></td>
                <td><?php echo "$key"; ?></td>
            </tr>
        </table>
    <?php } ?>
    <?php
        foreach ($data as $key => $value) {
            maakRij("$key", "$value");
        }
    ?>

</body>
</html>