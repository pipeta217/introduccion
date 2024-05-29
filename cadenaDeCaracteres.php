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
    $cuento="a Latina. El dinosaurio (1959) es uno de los microcuentos más famosos dentro del género. Con él, inauguró la posibilidad de que con sólo una frase conformada por siete palabras se pueden aventurar diversas interpretaciones.
    En una primera lectura, se puede ver que pertenece al género fantástico. Un personaje tiene una pesadilla en la que aparece un dinosaurio. Sin embargo, cuando despierta, el animal prehistórico es real y se convierte en una posible amenaza. El lector sólo puede imaginar si el protagonista sentirá angustia y temor a una pronta muerte o si, por el contrario, se convertirá en una historia de aventuras. Se trata de un final abierto, por lo que resulta relativo.
    Luego, si se analiza simbólicamente, el dinosaurio puede representar muchas cosas. Al pensar en la ambigüedad semántica, el hecho de que no sabe quién despertó y dónde es allí, permite establecer muchas opciones. En una visión existencialista, el dinosaurio puede encarnar la bestialidad de la existencia diaria, por lo que despertar se siente como una condena.
    Por otro lado, puede haber una posición política. Se puede considerar que el dinosaurio hace alusión al tipo de gobernante que no se retira jamás de su cargo y que actúa según pautas poco éticas. Este individuo puede identificarse con varios personajes en Latinoamérica. Es importante recordar que el autor tuvo problemas durante la dictadura en Guatemala y tuvo que exiliarse en México, por lo que muchas veces el tema formó parte de su obra.";
    
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