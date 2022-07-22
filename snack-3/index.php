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
        // Create an empty array where to put the random numbers
        $randomNumbers = [];

        // Cycle loop till the number of the elements inside randomNumbers is 15
        while(count($randomNumbers) < 15) {
            $randomNumber = rand(1, 1000);
            // Push the random number just in casa the number is not already present
            if(!in_array($randomNumber, $randomNumbers)) {
                $randomNumbers[] = $randomNumber;
            } else {
                $randomNumbers[] = '';
            }
            // Print the 15 numbers of randomNumbers
            echo 'Numero ' . $randomNumber . '<br>';
        }
    ?>

</body>
</html>