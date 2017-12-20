<?php
class Visitante {	
	
	var $dtmFecha;
	function set_Fecha($fecha){ $this->dtmFecha = $fecha;}
	function get_Fecha(){return $this->dtmFecha;}
		
	var $strnombre;
	function set_nombre($nombre){$this->strNombre = $nombre;}
	function get_nombre(){return $this->strnombre;}
	 
	var $dtmhoradeentrada;
	function set_horaentrada($hora){$this->dtmhoradeentrada = $hora;}
	function get_horaentrada(){	return $this->_dtmhoradeentrada;}
	 
	var $_dtmhoradesalida;
	function set_horasalida($horasalida){$this->_dtmhoradesalida = $horasalida;}
	function get_horasalida(){ return $this->_dtmhoradesalida;}
	 
	var $_intid; 
	function set_id($id){$this->_intid = $id;}
	function get_id(){ return $this->_intid;}
	  
	var $_strarea;
	function set_area($area){$this->_strarea= $area;}
	function get_area(){return $this->_strarea;}
	 
	var $_strVisitara;
	function set_Visitara($Visitara) {$this->_strVisitara = $Visitara;}
	function get_Visitara(){return $this->_strVisitara;}
	
	var $_strCompania;
	function set_Compania($Compania){$this->_strCompania = $Compania;}
	function get_Compania(){return $this->_strCompania;}
	
	function ConvertirFechaANumerica($fecha){
		return(strtotime($fecha));
	}
	
}


?>