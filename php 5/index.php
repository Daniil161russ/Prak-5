<?php 
 
 class Adress
 {
 	public $country;
 	public $city;
 	public $street;
 	public $index;
 	public $office;
 	public $data;

 	function __construct($countryAd,$cityAd,$streetAd,$indexAd,$officeAd,$dataAd)
 	{
 		$this -> country = $countryAd;
 		$this -> city = $cityAd;
 		$this -> street = $streetAd;
 		$this -> index = $indexAd;
 		$this -> office = $officeAd;
 		$this -> data = $dataAd;
 	}
 	function set_country($newcountry){
 		$this -> country = $newcountry;
 	}
 	function get_country(){
 		return $this -> country;
 	}
 	function set_city($newcity){
 		$this -> city = $newcity;
 	}
 	function get_city(){
 		return	$this -> city;
 	}
 	function set_street($newstreet){
 		$this -> street = $newstreet;
 	}
 	function get_street(){
 		return	$this -> street;
 	}
 	function set_index($newindex){
 		$this -> index = $newindex;
 	}
 	function get_index(){
 		return	$this -> index;
 	}
 	function set_office($newoffice){
 		$this -> office = $newoffice;
 	}
 	function get_office(){
 		return	$this -> office;
 	}
 	function set_data($newdata){
 		$this -> data = $newdata;
 	}
 	function get_data(){
 		return	$this -> data;
 	}
 }

 $firstAdress = new Adress(null,"Rostov","Mira 1a",344444,"Gazprom",'01.01.2019');
 $firstAdress -> set_country("Italy");
 $firstAdress -> set_city("Rome");
 $firstAdress -> set_index(567889);
 var_dump($firstAdress);
 ?>