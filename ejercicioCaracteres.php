<?php 
    echo "<h1>Cuento</h1>";
    $cuento="El dinosaurio (1959) es uno de los microcuentos más famosos dentro del género. Con él, inauguró la posibilidad de que con sólo una frase conformada por siete palabras se pueden aventurar diversas interpretaciones.
    En una primera lectura, se puede ver que pertenece al género fantástico. Un personaje tiene una pesadilla en la que aparece un dinosaurio. Sin embargo, cuando despierta, el animal prehistórico es real y se convierte en una posible amenaza. El lector sólo puede imaginar si el protagonista sentirá angustia y temor a una pronta muerte o si, por el contrario, se convertirá en una historia de aventuras. Se trata de un final abierto, por lo que resulta relativo.
    Luego, si se analiza simbólicamente, el dinosaurio puede representar muchas cosas. Al pensar en la ambigüedad semántica, el hecho de que no sabe quién despertó y dónde es allí, permite establecer muchas opciones. En una visión existencialista, el dinosaurio puede encarnar la bestialidad de la existencia diaria, por lo que despertar se siente como una condena.
    Por otro lado, puede haber una posición política. Se puede considerar que el dinosaurio hace alusión al tipo de gobernante que no se retira jamás de su cargo y que actúa según pautas poco éticas. Este individuo puede identificarse con varios personajes en Latinoamérica. Es importante recordar que el autor tuvo problemas durante la dictadura en Guatemala y tuvo que exiliarse en México, por lo que muchas veces el tema formó parte de su obra.";

    echo "<p>$cuento</p>";
    $contador=explode(" ", $cuento);
    echo "<h2>Condiciones</h2>";
    
    if(count($contador) <=100){
        echo "<p style= 'color:green'>Texto menor a 100 palabras</p>";
    }else{    
        echo "<p style= 'color:red'>Texto menor a 100 palabras</p>";
    }

    if(strlen($cuento) > 700){
        echo "<p style= 'color:green'>Mayor a 700 caracteres</p>";
    }else{
        echo "<p style= 'color:red'>Mayor a 700 caracteres</p>";
    }
    
?>
