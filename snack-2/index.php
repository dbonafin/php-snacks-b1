<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email access</title>
</head>
<body>

    <!-- Snack 2
        Passare come parametri GET name, mail e age e verificare 
        che name sia più lungo di 3 caratteri, 
        che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <?php
        // Get the values from the user
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        // Messages for the user
        $instructions = 'Type your name, email and age in the url';
        $message;

        // Name, email and age validations 
        if(
            strlen($name) > 3 &&
            strpos($mail, '@') !== false && 
            strpos($mail, '.') !== false && 
            is_numeric( $age)) 
        { $message = 'Succesful access';} 
        elseif(
            !strlen($name) > 3 ||
            strpos($mail, '@') == false ||
            strpos($mail, '.') == false ||
            !is_numeric( $age)) 
        { $message = 'Denied access';}
    ?>

    <div> <?php echo $instructions; ?> </div>

    <div> <?php echo $message; ?> </div>
    
</body>
</html>