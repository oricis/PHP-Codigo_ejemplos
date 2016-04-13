<?php namespace iw\blog\test;

/**
 * ardirata.php
 * Ejemplo de uso de métodos encadenados
 */

final class Ardirata {

	/**********************************/
    /*** Declaración de Propiedades ***/
        
	    private $clase = "Ardirata";
	    public  $bellotas_almacenadas = 0;
	    public  $str_nombre_ardilla   = '';
    

    /**********************************/
    /*** Declaración de Métodos *******/

    	/**
	     * Constructor
    	 * 
	     * @param  string	$nombre_ardilla
	     * @param  int		$num_bellotas_inicial
	     * @return object
	     */
	    public function __construct( $nombre_ardilla=NULL, $num_bellotas_inicial=NULL ) {
	    	
	    	if ($nombre_ardilla && is_string($nombre_ardilla))
	    		$this->nombrarArdilla( $nombre_ardilla );

	    	if ($num_bellotas_inicial && is_int($num_bellotas_inicial))
	    		$this->iniciarAlmacenamientoDeBellotas( $num_bellotas_inicial );
	    }


    /*** Métodos públicos *************/

	    /**
	     * Asigna nombre a la ardilla
	     *
	     * @param string  $str_nombre
	     * @return object
	     */
	    public function cambiarNombre( $str_nombre=NULL ) {
	    	$this->str_nombre_ardilla = $str_nombre;

	    	return $this;
	    }

	    /**
	     * Resta bellotas del total almacenado
	     *
	     * @param  int	$num_bellotas
	     * @return object
	     */
	    public function comerBellotas( $num_bellotas=NULL ) {
	    	$this->restaBellotas( $num_bellotas );

	    	return $this;
	    }

	    /**
	     * Añade bellotas del total almacenado
	     *
	     * @param  int	$num_bellotas
	     * @return object
	     */
	    public function encontrarBellotas( $num_bellotas=NULL ) {
	    	$this->sumaBellotas( $num_bellotas );

	    	return $this;
	    }

	    /**
	     * Resta bellotas del total almacenado
	     *
	     * @param  int	$num_bellotas
	     * @return object
	     */
	    public function perderBellotas( $num_bellotas=NULL ) {
	    	$this->restaBellotas( $num_bellotas );

	    	return $this;
	    }

    
	/*** Métodos privados *************/

		/**
		 * Asigna cantidad de bellotas inicial
		 *
		 * @param  int  $num_bellotas
		 */
		private function iniciarAlmacenamientoDeBellotas( $num_bellotas=NULL ) {

			if ($num_bellotas)
				$this->bellotas_almacenadas = $num_bellotas;
	    }

	    /**
		 * Asigna cantidad de bellotas inicial
		 *
		 * @param  int  $num_bellotas
		 */
		private function nombrarArdilla( $nombre=NULL ) {

			if ($nombre)
				$this->str_nombre_ardilla = $nombre;
	    }


		/**
		 * Resta bellotas del total almacenado
		 *
		 * @param  int  $num_bellotas
		 */
		private function restaBellotas( $num_bellotas=NULL ) {

			if ($num_bellotas)
				$this->bellotas_almacenadas = $this->bellotas_almacenadas - $num_bellotas;
	    }

	    /**
	     * Añade bellotas del total almacenado
	     *
	     * @param  int  $num_bellotas
	     */	
	    private function sumaBellotas( $num_bellotas=NULL ) {

	    	if ($num_bellotas)
				$this->bellotas_almacenadas = $this->bellotas_almacenadas + $num_bellotas;
	    }

} //class



/**
 * TEST
 * 
 */

	$ardirata = new Ardirata( 'Scratch', 2 );

	$ardirata->encontrarBellotas( 3 )
		->comerBellotas( 1 )
		->encontrarBellotas( 12 )
		->perderBellotas( 7 )
		->encontrarBellotas( 5 )
		->cambiarNombre( 'Rey de la Montaña de Bellotas' );

	echo "La ardirata <b>" . $ardirata->str_nombre_ardilla . "</b> tiene <b>" . $ardirata->bellotas_almacenadas . "</b> bellotas almacenadas.";
