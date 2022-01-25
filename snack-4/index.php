<!-- CONSEGNA -->
<!-- Per ogni snack create una sottocartella 
col relativo numero dello snack, quindi se una sottocartella 
contiene la soluzione dello snack 6 chiamatela: snack-6. -->

<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->
<?php 
$paragraph = 'È giunta l’ora di rimarginare le ferite.
 È giunta l’ora di colmare i divari che ci dividono. 
 Questo è il tempo di costruire. Abbiamo finalmente 
 raggiunto l’emancipazione politica. Ci impegniamo 
 a costruire una pace completa, giusta e durevole. 
 Assumiamo ufficialmente il compito di costruire 
 una società in cui tutti i sudafricani, neri e 
 bianchi, potranno camminare a testa alta, senza 
 alcun timore, certi del loro inalienabile diritto 
 alla dignità umana. Una nazione di tutti i colori, 
 in pace con se stessa e con il mondo.';
 

 $new_paragraph = explode('.', $paragraph);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite</title>
</head>
<body>
    <h2>Paragrafo originale</h2>
    <p><?php echo $paragraph ?></p>
    <?php ?>
    <h2>Sottoparagrafi</h2>
    <?php for($i = 0; $i < count($new_paragraph); $i++) { ?>
        <?php $this_paragraph = $new_paragraph[$i]; ?>
        <h3>
            <?php if (!empty($this_paragraph)) { ?>
                <?php echo $this_paragraph.'.'; ?>
            <?php } ?>
            
        </h3>
    <?php } ?>
    
</body>
</html>


