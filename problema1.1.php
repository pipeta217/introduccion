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
        <header>
            <h2><b>Verduleria Pepe</b></h2>
        </header>
        <h1>Consumo final</h1>
        <h2>A continuación se detallan los totales de su compra.</h2>
        <?php    
             $kiloBanana = 3;
             $kiloManzana = 2;
             
             $precioKBanana= 50;
             $precioKManzana = 40;
 
             $total = ($kiloBanana * $precioKBanana) + ($kiloManzana * $precioKManzana);
        ?>
        <div class="cont1">
            <ul>
                <li>
                    <?php echo "$kiloBanana kg de bananas $ $precioKBanana"?>
                </li>
                <li>
                    <?php echo "$kiloManzana kg de bananas $ $precioKManzana"?>
                </li>
            </ul>
            <?php echo "Total: $ $total"?>
        </div>
    </body>
</html>