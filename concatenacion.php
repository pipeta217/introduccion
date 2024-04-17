<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Dos empresas tech uruguayas</h1>
        <?php
            //Utilizamos el punto entre ambos textos para concatenar.
            echo 'PedidosYa' . ' y ' . 'Scanntech';

            /*Diferencia entre comillas dobles y simples php.
              - La diferencia entre comillas simples y dobles 
                en PHP es que las dobles interpretan caracteres 
                especiales que se encuentran dentro de la cadena. 
                El uso de variables dentro de la cadena es el ejemplo mas común.
                Las simples unicamente imprimen texto, imprimen todo de forma literal.

                Cuando se utilizan las comillas dobles se le indica al servidor
                que dentro del String puede exitir una variable-

                Es mejor usar siempre comillas simples salvo que quieras
                concatenar una variable.
            */

            $emisora = 'Radio Disney';
            echo 'Me gusta escuchar $emisora';
            //Resultado: Me gusta escuchar $emisora
            echo "Me gusta escuchar $emisora";
            //Resultado: Me gusta escuchar Radio Disney
        ?>
    </body>
</html>