<html lang="en">
    <!--
    Naam: Owen Ramaekers
    Datum: 14/03/2024
    -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitschrijf formulier</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Uitschrijf formulier KW1C</h1>
    <form action="Oefenining5.1-resultaat.php" method="GET">
        <p>voor en achternaam</p><input type="text" name="naam" id="naam"><br>
        <p>Studentnummer</p><input type="text" name="studentnummer" id="studentnummer"><br>
        <p>Datum van Uitschrijving</p><input type="text" name="datum" id="datum"><br>
        <p>reden van Uitschrijving</p>
        <select name="reden">
            <option value="Verkeerde opleiding">Verkeerde opleiding</option>
            <option value="Niet langer op school">Niet langer op school</option>
            <option value="Andere Reden">Andere Reden</option>
        </select>
        <p>Leerjaar</p>
        <input type="radio" name="leerjaar" id="Leerjaar 1" value="1" checked="checked">
        <label for="Leerjaar 1">Leerjaar 1</label>
        <input type="radio" name="leerjaar" id="Leerjaar 2" value="2">
        <label for="Leerjaar 2">Leerjaar 2</label>
        <input type="radio" name="leerjaar" id="Leerjaar 3" value="3">
        <label for="Leerjaar 3">Leerjaar 3</label>
        <script>
            var button1 = document.getElementById('Leerjaar 1');
            var button2 = document.getElementById('Leerjaar 2');
            var button3 = document.getElementById('Leerjaar 3');
            var buttonArray = [button1, button2, button3];
            for(var i = 0; i < buttonArray.length; i++){
                buttonArray[i].onclick = function(){
                    for(var j = 0; j < buttonArray.length; j++){
                        if(buttonArray[j] != this){
                            buttonArray[j].checked = false;
                        }
                    }
                }
            }
        </script>
        <input type="checkbox" name="succesklas" id="checkbox1">
        <label for="checkbox1">Ik wil me aanmelden bij de Succesklas</label>
        <input type="checkbox" name="verwijder" id="checkbox2">
        <label for="checkbox2">Verwijder mijn gegevens uit het systeem</label>
        <p>Geef hier onder de reden van uitschrijving aan</p>
        <textarea name="Uitschrijf reden" id="Text_area" cols="60" rows="10"></textarea>
        <br>
        <input type="submit" value="Versturen">
    </form>
</body>
</html>
