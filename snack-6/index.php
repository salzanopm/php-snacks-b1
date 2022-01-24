<!-- CONSEGNA -->
<!-- Per ogni snack create una sottocartella 
col relativo numero dello snack, quindi se una sottocartella 
contiene la soluzione dello snack 6 chiamatela: snack-6. -->

<!-- ## Snack 6
Creare un array contenente qualche alunno 
di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!-- creo array di partite -->
<?php
$students = [
    [
        "name" => "Dante",
        "surname" => "Alighieri",
        "scores" => [10, 10 ],
    ],
    [
        "name" => "Ugo",
        "surname" => "Foscolo",
        "scores" => [10, 8],
    ],
    [
        "name" => "Italo",
        "surname" => "Svevo",
        "scores" => [10, 6 ],
    ],
    
];

// funzione media voti
function calcolaMedia($nums) {
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
      $res += $n;
    }
    return $res/$qt;
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
    <h1>ALUNNI</h1>
    <?php for($i = 0; $i < count($students); $i++) { ?>
        <?php $this_student = $students[$i]; ?>
        <div>
            <p>nome: <?php echo $this_student['name']; ?></p>
            <p>cognome: <?php echo $this_student['surname']; ?></p> 
            <p>media voti: 
                <?php
                    $student_score = $students[$i]['scores'];
                    $average_score = calcolaMedia($student_score);
                    echo($average_score); 
                ?>
            </p>
            <br>
        </div>
    <?php } ?>
</body>
</html>
