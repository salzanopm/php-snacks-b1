<!-- CONSEGNA -->
<!-- Per ogni snack create una sottocartella 
col relativo numero dello snack, quindi se una sottocartella 
contiene la soluzione dello snack 6 chiamatela: snack-6. -->

<!-- ## Snack 1
Creiamo un array contenente le partite di basket di
un’ipotetica tappa del calendario. Ogni array avrà una 
squadra di casa e una squadra ospite, punti fatti dalla squadra 
di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte 
le partite con questo schema.
Olimpia Milano - Cantù | 55-60  -->

<!-- creo array di partite -->

<?php
$games = [
    [
        "homeTeam" => "genova",
        "visitingTeam" => "roma",
        "homeScore" => "12",
        "visitingScore" => "25"
    ],
    [
        "homeTeam" => "roma",
        "visitingTeam" => "lazio",
        "homeScore" => "13",
        "visitingScore" => "26"
    ],
    [
        "homeTeam" => "torino",
        "visitingTeam" => "roma",
        "homeScore" => "14",
        "visitingScore" => "27"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Partite Roma basket</h1>

    <?php for($i = 0; $i < count($games); $i++) { ?>
        <?php $this_game = $games[$i]; ?>
        <h3>
            <?php echo $this_game['homeTeam']; ?>
                - 
            <?php echo $this_game['visitingTeam']; ?>
                | 
            <?php echo $this_game['homeScore']; ?>
                -
            <?php echo $this_game['visitingScore']; ?>
        </h3>
       
    <?php } ?>
</body>
</html>
