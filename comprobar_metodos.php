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
    //Es importante usar las comillas al nombrar propiedades, métodos y clases
    //igualmente, usar el nombre de los métodos sin paréntesis y de las propiedades sin $
    echo ( method_exists($oPrueba, 'aaa_1') )		//Pasamos el objeto
    	? 'Clase_1->aaa_1() está definido <br>'
      : 'Clase_1->aaa_1() NO está definido <br>';
    echo ( method_exists('Clase_1', 'aaa_1') )	//Pasamos el nombre de la clase
    	? 'Clase_1->aaa_1() está definido <br>'
      : 'Clase_1->aaa_1() NO está definido <br>';
    echo ( method_exists($oPrueba, 'bbb_1') )   //Pasamos el objeto
      ? 'Clase_1->bbb_1() está definido <br>'
      : 'Clase_1->bbb_1() NO está definido <br>';
    echo ( method_exists('Clase_1', 'bbb_1') )  //Pasamos el nombre de la clase
      ? 'Clase_1->bbb_1() está definido <br>'
      : 'Clase_1->bbb_1() NO está definido <br>';
    echo ( method_exists($oPrueba, 'ccc_1') )   //Pasamos el objeto
      ? 'Clase_1->ccc_1() está definido <br>'
      : 'Clase_1->ccc_1() NO está definido <br>';
    echo ( method_exists('Clase_1', 'ccc_1') )  //Pasamos el nombre de la clase
      ? 'Clase_1->ccc_1() está definido <br>'
      : 'Clase_1->ccc_1() NO está definido <br>';
    echo '<br>Llamada a ccc_1() usando paréntesis: <br>';
    echo ( method_exists($oPrueba, 'ccc_1()') )   //Pasamos el objeto
      ? 'Clase_1->ccc_1() está definido <br>'
      : 'Clase_1->ccc_1() NO está definido <br>';
    echo ( method_exists('Clase_1', 'ccc_1()') )  //Pasamos el nombre de la clase
      ? 'Clase_1->ccc_1() está definido <br>'
      : 'Clase_1->ccc_1() NO está definido <br>';
    echo '<br>Llamada a ddd_1() -> método no definido: <br>';
    echo ( method_exists($oPrueba, 'ddd_1') )   //Pasamos el objeto
      ? 'Clase_1->ddd_1() está definido <br>'
      : 'Clase_1->ddd_1() NO está definido <br>';
    echo ( method_exists('Clase_1', 'ddd_1') )  //Pasamos el nombre de la clase
      ? 'Clase_1->ddd_1() está definido <br>'
      : 'Clase_1->ddd_1() NO está definido <br>';

    echo '<hr><br>';

    /** Resultado:
      * Clase_1->aaa_1() está definido 
      * Clase_1->aaa_1() está definido 
      * Clase_1->bbb_1() está definido 
      * Clase_1->bbb_1() está definido 
      * Clase_1->ccc_1() está definido 
      * Clase_1->ccc_1() está definido 
      *
      * Llamada a ccc_1() usando paréntesis: 
      * Clase_1->ccc_1() NO está definido 
      * Clase_1->ccc_1() NO está definido 
      *
      * Llamada a ddd_1() -> método no definido: 
      * Clase_1->ddd_1() NO está definido 
      * Clase_1->ddd_1() NO está definido 
      **/


//Test propiedades estáticas
    //Es importante usar las comillas al nombrar propiedades, métodos y clases
    //igualmente, usar el nombre de los métodos sin paréntesis y de las propiedades sin $
    echo ( method_exists('Clase_2', 'aaa_2') )  //Pasamos el nombre de la clase
      ? 'Clase_2::aaa_2() está definido <br>'
      : 'Clase_2::aaa_2() NO está definido <br>';
    echo ( method_exists('Clase_2', 'bbb_2') )  //Pasamos el nombre de la clase
      ? 'Clase_2::bbb_2() está definido <br>'
      : 'Clase_2::bbb_2() NO está definido <br>';
    echo ( method_exists('Clase_2', 'ccc_2') )  //Pasamos el nombre de la clase
      ? 'Clase_2::ccc_2() está definido <br>'
      : 'Clase_2::ccc_2() NO está definido <br>';
    echo ( method_exists('Clase_2', 'ddd_2') )  //Pasamos el nombre de la clase
      ? 'Clase_2::ddd_2() está definido <br>'
      : 'Clase_2::ddd_2() NO está definido <br>';


    echo '<br>A partir de aquí la ejecución falla: <br>';
    echo ( method_exists(Clase_2::aaa_2()) )    //Llamamos a la propiedad
      ? 'Clase_2::aaa_2() está definido <br>'
      : 'Clase_2::aaa_2() NO está definido <br>';
    echo ( method_exists(Clase_2::bbb_2()) )   //Llamamos a la propiedad
      ? 'Clase_2::bbb_2() está definido <br>'
      : 'Clase_2::bbb_2() NO está definido <br>';
    echo ( method_exists(Clase_2::ccc_2()) )   //Llamamos a la propiedad
      ? 'Clase_2::ccc_2() está definido <br>'
      : 'Clase_2::ccc_2() NO está definido <br>';
    echo ( method_exists(Clase_2::ddd_2()) )   //Llamamos a la propiedad
      ? 'Clase_2::ddd_2() está definido <br>'
      : 'Clase_2::ddd_2() NO está definido <br>';

    
    /** Resultado:
      * Clase_2::aaa_2() está definido 
      * Clase_2::bbb_2() está definido 
      * Clase_2::ccc_2() está definido 
      * Clase_2::ddd_2() NO está definido 
      * 
      * A partir de aquí la ejecución falla: 
      * 
      * Fatal error: Call to private method Clase_2::aaa_2() from context '' in D:\path\fichero.php on line 1215
      **/