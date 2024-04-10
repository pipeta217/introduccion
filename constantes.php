<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
            <!--Dos formas de declararlas-->
        <?php
            //Forma 1
            define('GRAVEDAD', 10.8);  
            //Forma 2
            const GRAVEDAD2 = 9.8;
            echo "La gravedad 1 es: ", GRAVEDAD, ", gravedad 2: ", GRAVEDAD2; 
        ?>
    </body>
</html>