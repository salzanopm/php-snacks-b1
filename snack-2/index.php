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
// Se la mail non ha la chiocciola.
$test_mail_at = strpos($mail_to_check, '@');
// Se la mail non ha il punto.
$test_mail_dot = strpos($mail_to_check, '.');

// controllo nome
// se il nome inserito non è più lungo di 3 caratteri.
$test_name = strlen($name_to_check);

// controllo età
// se l'età inserita non è un numero.
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
    
    <?php if($test_mail_at === false || $test_mail_dot === false) {
        $mail_error = 1;
    } else {
        $mail_error = 0;
    } ?>
    <?php if( $test_name < 3 ) {
        $name_error = 1;
     } else {
        $name_error = 0;
    } ?>
    <?php if($test_age === false ) {
        $age_error = 0;
    } else {
        $age_error = 1;
    }   
    ?>
    <?php if (($mail_error + $name_error + $age_error) > 0 ) { ?>
        <h1>Accesso NON consentito</h1>
    <?php }  else { ?>
        <h1>Accesso consentito</h1>
        
    <?php } ?>

    <!-- test funzionamento logica -->
    <!-- <?php $total_error = $mail_error + $name_error + $age_error;
    var_dump($mail_error);
    var_dump($name_error);
    var_dump($age_error);
    var_dump($total_error); 
    ?> -->
</body>
</html>