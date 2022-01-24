<!-- CONSEGNA -->
<!-- Per ogni snack create una sottocartella 
col relativo numero dello snack, quindi se una sottocartella 
contiene la soluzione dello snack 6 chiamatela: snack-6. -->

<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un 
punto e una chiocciola e che age sia un numero. Se tutto è 
ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// Leggiamo la variabile get che contiene la mail.
$mail_to_check = $_GET['email'];

// Leggiamo la variabile get che contiene il nome.
$name_to_check = $_GET['name'];

// Leggiamo la variabile get che contiene l'età.
$age_to_check = $_GET['age'];

// controllo email
// Se la mail non ha la chiocciola oppure non ha il punto scriviamo KO, altrimenti scriviamo OK.
$test_mail_at = strpos($mail_to_check, '@');
// Se la mail non ha la chiocciola oppure non ha il punto scriviamo KO, altrimenti scriviamo OK.
$test_mail_dot = strpos($mail_to_check, '.');

// controllo nome
// se il nome inserito non è più lungo di 3 caratteri scriviamo KO, altrimenti scriviamo OK.
$test_name = strlen($name_to_check);

// controllo età
// se l'età inserita non è un numero scriviamo KO, altrimenti scriviamo OK.
$test_age = is_nan($age_to_check);

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Controllo email</h1>
    <?php if($test_mail_at === false || $test_mail_dot === false) { ?>
        <div>KO</div>
    <?php } else { ?>
        <div>OK</div>
    <?php } ?>
    <h1>Controllo nome</h1>
    <?php if( $test_name < 3 ) { ?>
        <div>KO</div>
    <?php } else { ?>
        <div>OK</div>
    <?php } ?>
    <h1>Controllo età</h1>
    <?php if($test_age === false ) { ?>
        <div>OK</div>
    <?php } else { ?>
        <div>KO</div>
    <?php } ?>    
</body>
</html>