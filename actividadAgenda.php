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
        var_dump ($agenda);
        
        $agenda[0] = "dentista a las 16h";
    ?>
    <ul>
        <li><?php echo $agenda [0];?></li>
        <li><?php echo $agenda [1];?></li>
    </ul>
</body>
</html>