<?php 

    $quote = "Voilà! Alla vista un umile veterano del vaudeville,
            chiamato a fare le veci sia della vittima che del violento dalle vicissitudini del fato. 
            Questo viso non è vacuo vessillo di vanità, ma semplice vestigia della vox populi, ora vuota, ora vana. 
            Tuttavia questa visita alla vessazione passata acquista vigore ed è votata alla vittoria 
            sui vampiri virulenti che aprono al vizio, garanti della violazione vessatrice e vorace della volontà. 
            L’unico verdetto è vendicarsi… Vendetta… E diventa un voto non mai vano
            poiché il suo valore e la sua veridicità vendicheranno un giorno coloro che sono vigili e virtuosi. 
            In verità questa vichyssoise verbale vira verso il verboso,
            quindi permettimi di aggiungere che è un grande onore per me conoscerti e che puoi chiamarmi V.";

    
    $censoredWord = $_GET['word']
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
    
    <h2>
        Il paragrafo contiene 
        <?php echo strlen($quote) ?>
        caratteri
    </h2>    

    <p>
        <?php echo str_replace($censoredWord, '***', $quote); ?>
    </p>

    <form action="" method="GET">
        <input type="text" name="word">
        <button type="submit">Censura</button>
    </form>


</body>
</html>