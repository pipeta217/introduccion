<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $semana = [ 'Lunes',
                    'Martes',
                    'Miercoles',
                    'Jueves',
                    'Viernes',
                    'Sabado',
                    'Domingo'
                ];

        //echo $semana[0] ."<br>";

        /*for($i=0;$i<7;$i++){
            echo "{$semana[$i]}  ";
        }*/

        /*$datos = [
            'Hola', 
            True,
            6
        ];*/
        
        $planetas = [];
        //$planetas = array();.
        $planetas [] = 'Marte';
        $planetas [] = 'Tierra';
        $planetas [] = 'Venus';
        echo $planetas[0] ."<br>";
        echo $planetas[1] ."<br>";
        echo $planetas[2] ."<br>";
    ?>
</body>
</html>