<?php

    /**
     * @utor: Moisés Alcocer
     * 7.5.2015
     * 
     * Comprobar si una constante esta definida
     */

/*
 * NOTA: Los Test que generan Errores fatales, deben ser comentados para que continúe la ejecución 
 */

//impresión juego de caracteres
echo '<meta charset="UTF8">';


//Declaración constantes:
    define('XXX', 'valor');
    define('YYY', NULL);


//Test:
    //Es importante usar las comillas al nombrar las constantes
    echo ( defined('XXX') )
        ? 'XXX esta definida <br>'
        : 'XXX NO esta definida <br>';

    echo ( defined('YYY') )
        ? 'YYY esta definida <br>'
        : 'YYY NO esta definida <br>';

    echo ( defined('ZZZ') )
        ? 'ZZZ esta definida <br>'
        : 'ZZZ NO esta definida <br>';

    echo '<hr><br>';

    /** Resultado:
      * XXX esta definida 
      * YYY esta definida 
      * ZZZ NO esta definida 
      **/
      
    //Ahora, probamos a nombrar las constantes sin comillas
    echo ( defined(XXX) )
        ? 'XXX esta definida <br>'
        : 'XXX NO esta definida <br>';

    echo ( defined(YYY) )
        ? 'YYY esta definida <br>'
        : 'YYY NO esta definida <br>';

    echo ( defined(ZZZ) )
        ? 'ZZZ esta definida <br>'
        : 'ZZZ NO esta definida <br>';

    echo '<hr><br>';

    /** Resultado:
      * XXX NO esta definida
      * YYY NO esta definida
      * Notice: Use of undefined constant ZZZ - assumed 'ZZZ' in D:\path\fichero.php on line 90
    ZZZ NO esta definida 
      **/