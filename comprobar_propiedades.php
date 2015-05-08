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
//Comprobar si las propiedades están definidas /////

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
    //Es importante usar las comillas al nombrar propiedades, métodos y clases
    //igualmente, usar el nombre de los métodos sin paréntesis y de las propiedades sin $
    echo ( property_exists($oPrueba, 'a_1') )		//Pasamos el objeto
    	? '$a_1 está definida <br>'
      : '$a_1 NO está definida <br>';
    echo ( property_exists('Clase_1', 'a_1') )	//Pasamos el nombre de la clase
    	? '$a_1 está definida <br>'
      : '$a_1 NO está definida <br>';
    echo ( property_exists($oPrueba, 'b_1') )   //Pasamos el objeto
      ? '$b_1 está definida <br>'
      : '$b_1 NO está definida <br>';
    echo ( property_exists('Clase_1', 'b_1') )  //Pasamos el nombre de la clase
      ? '$b_1 está definida <br>'
      : '$b_1 NO está definida <br>';
    echo ( property_exists($oPrueba, 'c_1') )   //Pasamos el objeto
      ? '$c_1 está definida <br>'
      : '$c_1 NO está definida <br>';
    echo ( property_exists('Clase_1', 'c_1') )  //Pasamos el nombre de la clase
      ? '$c_1 está definida <br>'
      : '$c_1 NO está definida <br>';
    echo ( property_exists($oPrueba, 'd_1') )   //Pasamos el objeto
      ? '$d_1 está definida <br>'
      : '$d_1 NO está definida <br>';
    echo ( property_exists('Clase_1', 'd_1') )  //Pasamos el nombre de la clase
      ? '$d_1 está definida <br>'
      : '$d_1 NO está definida <br>';
    echo ( property_exists($oPrueba, 'e_1') )   //Pasamos el objeto
      ? '$e_1 está definida <br>'
      : '$e_1 NO está definida <br>';
    echo ( property_exists('Clase_1', 'e_1') )  //Pasamos el nombre de la clase
      ? '$e_1 está definida <br>'
      : '$e_1 NO está definida <br>';

    /** Resultado:
      * $a_1 está definida 
      * $a_1 está definida 
      * $b_1 está definida 
      * $b_1 está definida 
      * $c_1 está definida 
      * $c_1 está definida 
      * $d_1 está definida 
      * $d_1 está definida 
      * $e_1 NO está definida 
      * $e_1 NO está definida 
      **/


//Test propiedades estáticas
    //Es importante usar las comillas al nombrar propiedades, métodos y clases
    //igualmente, usar el nombre de los métodos sin paréntesis y de las propiedades sin $
    echo ( property_exists('Clase_2', 'a_2') )  //Pasamos el nombre de la clase
      ? '$a_2 está definida <br>'
      : '$a_2 NO está definida <br>';
    echo ( property_exists('Clase_2', 'b_2') )  //Pasamos el nombre de la clase
      ? '$b_2 está definida <br>'
      : '$b_2 NO está definida <br>';
    echo ( property_exists('Clase_2', 'c_2') )  //Pasamos el nombre de la clase
      ? '$c_2 está definida <br>'
      : '$c_2 NO está definida <br>';
    echo ( property_exists('Clase_2', 'd_2') )  //Pasamos el nombre de la clase
      ? '$d_2 está definida <br>'
      : '$d_2 NO está definida <br>';
    echo ( property_exists('Clase_2', 'e_2') )  //Pasamos el nombre de la clase
      ? '$e_2 está definida <br>'
      : '$e_2 NO está definida <br>';

    //A partir de aquí la ejecución falla
    echo ( property_exists(Clase_2::$a_2) )    //Llamamos a la propiedad
      ? '$a_2 está definida <br>'
      : '$a_2 NO está definida <br>';
    echo ( property_exists(Clase_2::$b_2) )   //Llamamos a la propiedad
      ? '$b_2 está definida <br>'
      : '$b_2 NO está definida <br>';
    echo ( property_exists(Clase_2::$c_2) )   //Llamamos a la propiedad
      ? '$c_2 está definida <br>'
      : '$c_2 NO está definida <br>';
    echo ( property_exists(Clase_2::$d_2) )   //Llamamos a la propiedad
      ? '$d_2 está definida <br>'
      : '$d_2 NO está definida <br>';
    echo ( property_exists(Clase_2::$e_2) )   //Llamamos a la propiedad
      ? '$e_2 está definida <br>'
      : '$e_2 NO está definida <br>';
    
    /** Resultado:
      * $a_2 está definida 
      * $b_2 está definida 
      * $c_2 está definida 
      * $d_2 está definida 
      * $e_2 NO está definida 
      * Fatal error: Cannot access private property Clase_2::$a_2 in D:\path\fichero.php on line 115
      **/