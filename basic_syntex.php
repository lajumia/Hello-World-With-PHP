<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP Basic Syntax</h1>
    <?php echo "Hello PHP, You are printed with basic php syntax";?>
    <?= "</br>";?>
    <?= "This is another method to print PHP block but this syntax no need to write echo";?>



    
    <?php 
    $x = 10;
    if ($x==10):?>
    <p>The value of x is 10</p>
    <?php else:?>
    <p>The value of x is not 10</p>
    <?php endif;?>    
    



    <h1>Instruction separation </h1>
    <?php echo "We dont need to add semicolon at the end of PHP code block " ?>



    <h1>PHP Comment </h1>
    <?php
    echo 'This is a test'; // This is a one-line c++ style comment
    /* This is a multi line comment
       yet another line of comment */
    echo 'This is yet another test';
    echo 'One Final Test'; # This is a one-line shell-style comment
?>




</body>
</html>