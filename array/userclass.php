<?php
$searchText = !empty($_POST['address'])?$_POST['address']:null;

$cityname = $searchText;

$cityAddressObject = new CityAddress();
$contactObject =  new Contacts();
$ColorObject = new Colors();

$cityID = $cityAddressObject->getCityID($cityname);
$contactname = $contactObject->getContactName($cityID);
$colorID = $contactObject->getColorID($contactname);
$colorname = $ColorObject->getFavoriteColor($colorID);

echo " The city of "  .$contactname. " is " .$searchText.  " and his favorite color is " .$colorname. "<br />";

class Contacts {

	private $contacts = [
       [ 'color_id'=>1,'city_id'=>1,'id'=>1,'name'=> 'Anthony','phone'=>'0917-455-3255',],
       [ 'color_id'=>2,'city_id'=>1,'id'=>2,'name'=> 'Ronnie','phone'=>'0936-952-5099'],
	   [ 'color_id'=>3,'city_id'=>3,'id'=>3,'name'=> 'Wendell','phone'=> '0915-340-8204'],	   
	   [ 'color_id'=>3,'city_id'=>4,'id'=>4,'name'=> 'Mikko','phone'=>'0926-092-3650'],
	   [ 'color_id'=>1,'city_id'=>1,'id'=>5,'name'=> 'Michael','phone'=>'0926-092-3650'],
	   [ 'color_id'=>3,'city_id'=>4,'id'=>6,'name'=> 'Haidee','phone'=>'0926-589-7500'],
	   [ 'color_id'=>2,'city_id'=>2,'id'=>7,'name'=> 'Zandro','phone'=>'0922-438-4468'],
	   [ 'color_id'=>1,'city_id'=>1,'id'=>8,'name'=> 'Christian','phone'=>'0917-907-7467'],
	   [ 'color_id'=>2,'city_id'=>3,'id'=>9,'name'=> 'Lyn','phone'=>'0932-743-0291'],
	   [ 'color_id'=>1, 'city_id'=>2,'id'=>10,'name'=> 'Carlo','phone'=>'0932-629-9576'],
	];

       	function getContactName($cityID) {
			$contactName = NULL;
	
			foreach ($this->contacts as $contact) {
				if ($contact['city_id'] == $cityID) {
					$contactName = $contact['name'];
				}
			}		
			
			return $contactName;
		}	

		function getColorID($contactcolor) {
	
			foreach ($this->contacts as $contact) {
				if ($contactcolor == $contact['name']) {
					$colorID = $contact['color_id'];
				}
			}
			return $colorID;
		}
}	
 class CityAddress {
  private $cityAddress = [
       [ 'city_id'=>1,'name'=>'Malabon'],
	   [ 'city_id'=>2,'name'=> 'Taguig'],
	   [ 'city_id'=>3,'name'=>'Las Pinas'],
       [ 'city_id'=>4,'name'=>'Mandaluyong'],  
 ];

	function getCityID($cityname) {
	
		foreach ($this->cityAddress as $city) {
			if ($cityname == $city['name']) {
				$cityID = $city['city_id'];
			}
		}
		return $cityID;
	}		
}

class Colors {
	
	private $_colors = [
		['color_id' => 1, 'name' => 'red'],
		['color_id' => 2, 'name' => 'blue'],
		['color_id' => 3, 'name' => 'white'],
	];
	
	function getFavoriteColor($colorID) {
		$colorName = NULL;
	
		foreach ($this->_colors as $color) {
			if ($color['color_id'] == $colorID) {
				$colorName = $color['name'];
			}
		}
		return $colorName;
	}	
}


?>
