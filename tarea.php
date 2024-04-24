<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $amigos = [
            'Facundo',
            'Ramiro',
            'Gianfranco'
        ];
        $ciudades = [
            'San Jose',
            'Paso de los toros',
            'Montevideo'
        ];

        echo $amigos[0] ." se va de viaje <br>";
        echo $amigos[1] ." se va de viaje " .$ciudades[1] ."<br>";
      
        shuffle($amigos);
        shuffle($ciudades);

        echo $amigos[2] ." se va de viaje con " .$amigos[1] ." a la bonita ciudad de " .$ciudades[2];
    ?>
</body>
</html>