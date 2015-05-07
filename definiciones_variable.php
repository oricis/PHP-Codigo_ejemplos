<?php

    /**
     * @utor: Moisés Alcocer
     * 7.5.2015
     * 
     * Comprobar si una variable esta definida
     */

/*
 * NOTA: Los Test que generan Errores fatales, deben ser comentados para que continúe la ejecución 
 */

//impresión juego de caracteres
echo '<meta charset="UTF8">';


//Declaración variables
    $a = 1;
    $b = NULL;

//Test
    echo ( isset($a) )
        ? '$a esta definida <br>'
        : '$a NO esta definida <br>';

    echo ( isset($b) )
        ? '$b esta definida <br>'
        : '$b NO esta definida <br>';

    echo ( isset($c) )
        ? '$c esta definida <br>'
        : '$c NO esta definida <br>';
        
    echo '<hr><br>';

    /** Resultado:
      * $a esta definida
      * $b NO esta definida
      * $c NO esta definida
      **/