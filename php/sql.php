<?php 
   class Sql{

   	private $servidor='localhost';
   	private $usuario= 'adti';
   	private $pwd = 'Apcas123*';
   	private $bd = 'webdtax';
   	protected $mysqli = null;

   	public function conectar(){
   		$this->mysqli = new mysqli($this->servidor,$this->usuario,$this->pwd,$this->bd);
   	}
   	public function getmysqli(){
   		return $this->mysqli;
   	}
   }


 ?>