<html lang="en">
    <!--
    Naam: Owen Ramaekers
    Datum: 14/03/2024
    -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        echo $_GET['naam'] . "<br>";
        echo $_GET['studentnummer'] . "<br>";
        echo $_GET['datum'] . "<br>";
        echo $_GET['reden'] . "<br>";
        if(array_key_exists('succesklas', $_GET)){
            echo $_GET['succesklas'];
        }
        else{
            echo 'Niet in Succesklas' . "<br>";
        }
        if(array_key_exists('verwijder', $_GET)){
            echo $_GET['verwijder'];
        }
        else{
            echo 'Niet mijn gegevens verwijderen' . "<br>";
        }
        if(array_key_exists('Uitschrijf reden', $_GET)){
            echo $_GET['Uitschrijf reden'];
        }
        else{
            echo 'Geen gegeven reden' . "<br>";
        }
        ?>
    </pre>
</body>
</html>


