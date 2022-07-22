<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text exploding</title>
</head>
<body>
        
    <!-- ## Snack 4
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. -->

    <?php 
        $myString = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, repellendus? Maiores id perspiciatis. magnam consectetur eveniet alias deserunt voluptas. natus dicta esse consequatur itaque. Perspiciatis non exercitationem dolorem dignissimos nihil!';

        $myStringArray = explode('.', $myString);
        var_dump($myStringArray);
    ?>

</body>
</html>