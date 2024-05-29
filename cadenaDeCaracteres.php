<?php 
    $palabra = 'abcdef ';
    print_r ($palabra);
    $palabra[2]= 'z';
    print_r ($palabra);
?>

<br>

<?php 
    $lista="manzana,naranja,platano,fresa";
    $frutas= explode("a",$lista);
    print_r($frutas);
?>

<br>
<br>

<?php 
    $cuento="no sabe quién despertó y dóa. Se puede considerar que el dinosaurio hace alusión al tipo de gobernante que no se retira jamás de su cargo y que actúa según pautas poco éticas. Este individuo puede identificarse con varios personajes en Latinoamérica. Es importante recordar que el autor tuvo problemas durante la dictadura en Guatemala y tuvo que exiliarse en México, por lo que muchas veces el tema formó parte de su obra.";
    
    //Crea un array y guarda cada palabra en una posicion
    $contador=explode(" ", $cuento);
    
    //Count retorna la cantidad de elementos que hay en un array
    if(count($contador) <=100){
            echo "Aceptable";
    }else{
        echo "Supera el maximo";
    }

    echo "<br>";

    //Strlen retorna la cantidad de caracteres de un String
    if(strlen($cuento) > 700){
        echo "Supera los 700 caracteres";
    }else{
        echo "No supera los 700 caracteres";
    }
?>