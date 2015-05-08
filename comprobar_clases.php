<?php
/*
 * Comprobar si Definidos:
 * 	- propiedades
 * 	- métodos
 * 	- clases
 */

/*
 * NOTA: Los Test que generan Errores fatales, deben ser comentados para que continúe la ejecución 
 */

//impresión juego de caracteres
echo '<meta charset="UTF8">';




////////////////////////////////////////////////
////////////////////////////////////////////////
//Comprobar si los métodos están definidos /////

//Definir las clases
    class Clase_1 {
      private   $a_1 = 'x';
      protected $b_1 = 'x';
      public    $c_1 = 'x';
      public    $d_1 = NULL;
      private   function aaa_1() { return 1; }
      protected function bbb_1() { return 1; }
    	public    function ccc_1() { return 1; }
    }
    class Clase_2 {
      private   static $a_2 = 'x';
      protected static $b_2 = 'x';
      public    static $c_2 = 'x';
      public    static $d_2 = NULL;
    	private   static function aaa_2() { return 1; }
      protected static function bbb_2() { return 1; }
      public    static function ccc_2() { return 1; }
    }

//Se crea un objeto de la clase Clase_1:
    $oPrueba = new Clase_1();


//Test
    //Es importante usar las comillas al nombrar las clases
    

    echo ( class_exists('Clase_1') )	//Pasamos el nombre de la clase
    	? 'Clase_1 existe <br>'
      : 'Clase_1 NO existe <br>';

    echo ( class_exists('Clase_2') )  //Pasamos el nombre de la clase
      ? 'Clase_2 existe <br>'
      : 'Clase_2 NO existe <br>';

    echo ( class_exists('Clase_3') )  //Pasamos el nombre de la clase
      ? 'Clase_3 existe <br>'
      : 'Clase_3 NO existe <br>';

    echo ( class_exists(Clase_1) )  //Pasamos el nombre de la clase sin comillas
      ? 'Clase_1 existe <br>'
      : 'Clase_1 NO existe <br>';
    echo ( class_exists($oPrueba) )  //Pasamos un objeto de la clase
      ? 'Clase_1 existe <br>'
      : 'Clase_1 NO existe <br>';

    echo '<hr><br>';

    /** Resultado:
      * Clase_1 existe 
      * Clase_2 existe 
      * Clase_3 NO existe
      * 
      * Notice: Use of undefined constant Clase_1 - assumed 'Clase_1' 
      * in D:\path\fichero.php on line 63
      * Clase_1 existe 
      * 
      * Warning: class_exists() expects parameter 1 to be string, object 
      * given in D:\path\fichero.php on line 66
      * Clase_1 NO existe 
      **/

