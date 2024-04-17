<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        print_r y var_dump:
        - Imprimen detalles de una variable, incluyendo su valor, en un formate legible por el humano.
        - Si es un array o un objeto tambien imprimen los detalles de cada elemento.
        - Se utilizan frecuentemente durante la depuracion de codigo, situacion en la que var_dump suele se mas util por la mayor informacion que proporciona.
        */
        $numero = 1;
        $decimal = 1.1;
        $texto = "Hola";
        
        var_dump($texto);
        //Respuesta: string(4) "Hola"
        var_dump($numero);
        //Respuesta: int(1)
        
        print_r($texto);
        //Respuesta: Hola
        print_r($numero);
        //Respuesta: 1

        //print_r($decimal);
        //print_r($texto);
    ?>
</body>
</html>