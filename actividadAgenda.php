<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $agenda = [];
        
        $agenda []  = "dentista a las 12h";
        $agenda []  = "tocar teclado";
        $agenda []  = "viaje a san jose";
        var_dump ($agenda);
        
        $agenda[0] = "dentista a las 16h";
    ?>
    <!--FORMA 1-->  
    <ul>
        <?php
            foreach($agenda as $lista){
                echo "<li>$lista</li>";
            }
        ?>
    </ul>
    <!--FORMA 2-->
    <ul>    
        <li><?php echo $agenda [0];?></li>
        <li><?php echo $agenda [1];?></li>
    </ul>
    <!--FORMA 3-->
    <ul>
        <?php foreach($agenda as $lista):?>
         <!--LE AGREGAMOS ESTILOS-->
        <li style="color:red"><?php echo $lista;?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>