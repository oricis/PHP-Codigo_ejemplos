<?php

    /**
     * @utor: Moisés Alcocer
     * 7.5.2015
     * 
     * Comprobar si una función esta definida
     */
    

/*
 * NOTA: Los Test que generan Errores fatales, deben ser comentados para que continúe la ejecución 
 */

//impresión juego de caracteres
echo '<meta charset="UTF8">';


//Declaración función
function abc() {
    return 2 + 3;
}



//Test

    //Es importante usar las comillas al nombrar las funciones,
    //igualmente, usar el nombre sin paréntesis para que funcione
    echo ( function_exists('abc') )
        ? 'abc() esta definida <br>'
        : 'abc() NO esta definida <br>';

    echo ( function_exists('acd') )
        ? 'acd() esta definida <br>'
        : 'acd() NO esta definida <br>';

    echo '<hr><br>';

    /** Resultado:
      * abc() esta definida 
      * acd() NO esta definida 
      **/

    //Probamos nombrando las funciones con paréntesis
    echo ( function_exists('abc()') )
        ? 'abc() esta definida <br>'
        : 'abc() NO esta definida <br>';

    echo ( function_exists('acd()') )
        ? 'acd() esta definida <br>'
        : 'acd() NO esta definida <br>';

    echo '<hr><br>';

    /** Resultado:
      * abc() NO esta definida 
      * acd() NO esta definida 
      **/
      
    //Ahora, probamos a nombrar las funciones sin comillas
    echo ( function_exists(abc()) )
        ? 'abc() esta definida <br>'
        : 'abc() NO esta definida <br>';
    /*
    echo ( function_exists(acd()) )
        ? 'acd() esta definida <br>'
        : 'acd() NO esta definida <br>';
    */
    echo '<hr><br>';

    /** Resultado:
      * abc() NO esta definida 
      * Fatal error: Call to undefined function acd() in D:\path\fichero.php on line 129
      **/