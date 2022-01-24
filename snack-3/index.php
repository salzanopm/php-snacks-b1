<!-- CONSEGNA -->
<!-- Per ogni snack create una sottocartella 
col relativo numero dello snack, quindi se una sottocartella 
contiene la soluzione dello snack 6 chiamatela: snack-6. -->

<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta -->

<!-- creo array vuoto -->
<?php 
$array = [];


// genera numero random

for ($i = 0; $i <= 15; $i++ ) { 
    $random_number = rand(1,100);

    if (!in_Array($random_number, $array)) {
        $array = $random_number;
    }

    echo $array . ' '; 

}

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
   
</body>
</html>


