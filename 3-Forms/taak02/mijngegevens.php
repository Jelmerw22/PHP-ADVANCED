<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form name="invoerform" action="invoerform.php" method="POST">
        Voornaam;
        <br>
        <input type="text" name="voornaam">
        <br>
        Achternaam;
        <br>
        <input type="text" name="achternaam">
        <br>
        Klas;
        <br>
        <input type="text" name="klas">
        <br>
        Leeftijd;
        <br>
        <input type="text" name="leeftijd">
        <br>
        Adress;
        <br>
        <input type="text" name="adress">
        <br>
        Plaatsnaam;
        <br>
        <input type="text" name="plaatsnaam">
        <br>
        Favorieten muziekband;
        <br>
        <input type="text" name="favorieten-muziekband">
        <br>
        Wat is uw geslacht?
        <br>
        <input type="radio" id="man" name="geslacht" value="Man">
        <label for="male">Man</label><br>
        <input type="radio" id="vrouw" name="geslacht" value="Vrouw">
        <label for="female">Vrouw</label>
        <br>
        Wat is uw lievelingskleur ?
        <br>
        <select name="lievelingskleur">
            <option value="Red">Rood</option>
            <option value="Blue">Blauw</option>
            <option value="Purple">Paars</option>
            <option value="Yellow">Geel</option>
            <option value="Green">Groen</option>
        </select>
        <br>
        <input type="submit" name="Verstuur antwoord.">
    </form>
</body>
</html>