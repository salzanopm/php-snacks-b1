<!-- CONSEGNA -->
<!-- Per ogni snack create una sottocartella 
col relativo numero dello snack, quindi se una sottocartella 
contiene la soluzione dello snack 6 chiamatela: snack-6. -->

<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un 
rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $teachers_array = $db['teachers'];
    $pm_array = $db['pm'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-container">
        <h1>elenco insegnanti e PM</h1>
            <div class="teachers-container">
                <h2>lista insegnanti</h2>
                <?php for($i = 0; $i < count($teachers_array); $i++) { ?>
                    <?php $this_teacher = $teachers_array[$i]; ?>
                    <h3>
                        <p>Name: <?php echo $this_teacher['name']; ?></p>
                        <p>lastname: <?php echo $this_teacher['lastname']; ?></p>
                    </h3>
                <?php } ?>
            </div>
            <div class="pm-container">
                <h2>lista PM</h2>
                <?php for($i = 0; $i < count($pm_array); $i++) { ?>
                    <?php $this_pm = $pm_array[$i]; ?>
                    <h3>
                        <p>Name: <?php echo $this_pm['name']; ?></p>
                        <p>lastname: <?php echo $this_pm['lastname']; ?></p>
                    </h3>
                <?php } ?>
            </div>
    </div>
</body>
</html>