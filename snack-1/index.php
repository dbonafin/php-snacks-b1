<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite,
    punti fatti dalla squadra di casa e dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    
    <!-- Matches array -->
    <?php
        $matches = [
            [
                'teamHome' => 'AX Milano',
                'teamAway' => 'Virtus Bologna',
                'pointsHome' => 34,
                'pointsAway' => 55
            ],
            [
                'teamHome' => 'Germani Brescia',
                'teamAway' => 'Umana Rever Venezia',
                'pointsHome' => 48,
                'pointsAway' => 22
            ],
            [
                'teamHome' => 'Ferrara Spal',
                'teamAway' => 'Dolomiti Trentino',
                'pointsHome' => 60,
                'pointsAway' => 81
            ],
        ];
    ?>

    <!-- Print the template just in case there are matches -->
    <?php if(count($matches) > 0) { ?>

        <h2>Results of the matchday 10</h2>

        <!-- For every match in the array - print the results -->
        <?php for($i = 0; $i < count($matches); $i++) { ?>
            <?php $match = $matches[$i]; ?>

            <div>
                <h4>
                    <!-- Team names -->
                    <?php echo $match['teamHome']; ?> - <?php echo $match['teamAway']; ?> 
                    |
                    <!-- Team points -->
                    <?php echo $match['pointsHome']; ?> - <?php echo $match['pointsAway']; ?> 
                </h4>
            </div>
        <?php } ?>
       
    <?php } ?>

</body>
</html>