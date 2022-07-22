<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random numbers array</title>
</head>
<body>

    <!-- ## Snack 3
    Creare un array con 15 numeri casuali, 
    tenendo conto che l’array non dovrà contenere 
    lo stesso numero più di una volta-->

    <?php
        $randomNumbers = [];

        while(count($randomNumbers) < 15) {
            $randomNumber = rand(1, 100);

            echo 'Numero ' . $randomNumber . '<br>';
            if(!in_array($randomNumber, $randomNumbers)) {
                $randomNumbers[] = $randomNumber;
            }
        }
        var_dump ($randomNumbers);

        // while(count($randomNumbers) < 15) {
        //     // Generiamo il numero randonm
        //     $randomNumber = rand(1 ,50);
        //     // e lo aggiungiamo all'array solo se non è già presente
        //     if(!in_array($randomNumber, $randomNumbers)) {
        //         $randomNumbers[] = $randomNumber;
        //     }
        //     $i++
        // } 
        // echo($randomNumbers);
    ?>

</body>
</html>