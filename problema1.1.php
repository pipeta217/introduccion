<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="estilo.css">
</head>
<body>
    </head>
    <body>
        <h1>Consumo final</h1>
        <p>A continuacion se detallan los totales de su compra</p>
        <?php
            $kiloBanana = 3;
            $kiloManzana = 2;
            
            $precioKBanana= 50;
            $precioKManzana = 40;

            $total = ($kiloBanana * $precioKBanana) + ($kiloManzana * $precioKManzana);
            
            echo "$kiloBanana kg de banana $ $precioKBanana <br>";
            echo "$kiloManzana kg de manzana $ $precioKManzana <br>";
            echo "Total: $total";
        ?>
    </body>
</html>