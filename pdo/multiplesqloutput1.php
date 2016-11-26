<?php
 ini_set('display_errors', 'On');
 $db = new  mysqli('127.0.0.1', 'root', '' , 'addressbook');
$searchText = !empty($_POST['cityName'])?$_POST['cityName']:null;

$area= $searchText;

$cityAddressObject = new CityAddress();
$cityID = $cityAddressObject->getCityId($area);

// multiple output
$contactNameObject = new Contacts();
$allContacts =$contactNameObject->getAllContacts($cityID);
$singleContact =$allContacts[count($allContacts) - 1];


// single ouput only
$contactName = $contactNameObject->getContactName($cityID);
$colorID =  $contactNameObject->getColorID($cityID);
$petID = $contactNameObject->getPetID($cityID);

$colorObject = new Colors();
$colorName = $colorObject->getColorName($colorID);

$petObject = new Pets();
$petName = $petObject->getPetName($petID);


echo $singleContact['name'];
echo $area;
echo $singleContact['pet'];
echo $singleContact['color'];

class CityAddress {

	function getCityId($area) {
		$db = new  mysqli('127.0.0.1', 'root', '' , 'addressbook');
		$cities = $db->query("SELECT * FROM city");
		$cityID = 0;
		
		foreach ($cities as $city) {
			if ($area == $city['name']) {
				$cityID = $city['city_id'];
			}
		} 
			return $cityID;
	}
}
class Contacts {
	
	function getContactName($cityID) {
		$db= new mysqli('127.0.0.1', 'root', '', 'addressbook');
		$contacts = $db->query("SELECT * FROM contacts");
		$contactname = null;
		
		foreach ($contacts as $contact) {
			if ($cityID == $contact['city_id']) {
				$contactname = $contact['name'];
			} 
		}
		return $contactname;
	}

	function getColorID($cityID){	
		$db = new mysqli('127.0.0.1', 'root', '', 'addressbook');
		$contacts = $db->query("SELECT * FROM contacts");
		$colorID = 0;
		
		foreach($contacts as $contact) {
			if ($contact['city_id'] == $cityID) {
				$colorID = $contact['color_id'];
			}
			
		}
		return $colorID;

	}	
	
	function getPetID($cityID){
		$db =  new mysqli('127.1.1.1', 'root', '', 'addressbook');
		$contacts = $db->query("SELECT * FROM contacts");
		$petID = 0;
			
		foreach($contacts as $contact){
			if ($contact['city_id'] == $cityID){
				$petID = $contact['pet_id'];
			}
						
		} 
		return $petID;
	
	}
 
	function getAllContacts($cityID){
		$result = [];
		$db = new mysqli('127.0.0.1', 'root', '', 'addressbook');
		$contacts = $db->query("SELECT * FROM contacts");
		$colorObject = new Colors();
		$petObject = new Pets();
		
		foreach($contacts as $contact) {
			if ($contact['city_id'] == $cityID) {
				$contact['color'] = $colorObject->getColorName($contact['color_id']);
				$contact['pet'] = $petObject->getPetName($contact['pet_id']);
				$result[] = $contact;
			}
		}
		return $result;
	}
}	
class Colors {
	
	function getColorName($colorID) {
		$db = new mysqli('127.0.0.1', 'root', '', 'addressbook');
		$colors = $db->query("SELECT * FROM colors");
		$colorName = null;
		
		foreach($colors as $color){
			if ($color['color_id'] == $colorID ) {
				$colorName = $color['name'];
			} 
			
		}
		return $colorName;
	}		
}

class Pets {
	
	function getPetName($petID){
		$db = new mysqli('127.0.0.1', 'root', '', 'addressbook');
		$pets = $db->query("SELECT * FROM pets");
		$petName = null;
		foreach($pets as $pet){
			if ($petID == $pet['pet_id']){
				$petName = $pet['name'];
			}
		}
		return $petName;
	}
}
 ?>

<html>
<head>
<style type="text/css">
	.avatar_photo {
		border: solid 5px red;
		heigt: 50px;
		width: 50px;

	}
</style>
</head>
 
 <body>
 <form action = "multiplesqloutput1.php" method = "post">
	<input type = "text" name ="cityName">
	<input type = "submit" name = "search">
</form>	

 <table border="1">
	<tr>
		<th>Photo</th>
		<th>Name</th>
		<th>City</th>
		<th>Phone</th>
		<th>Color</th>
		<th>Pet</th>
	</tr>
		<?php foreach($allContacts as $contact): ?>
			<tr>
				<td><img class="avatar_photo" src="<?php echo $contact['contact_pict']; ?>" /></td>
				<td><?php echo $contact['name']; ?></td>
				<td><?php echo $area; ?></td>
				<td><?php echo $contact['phone']; ?></td>
				<td><?php echo $contact['color']; ?></td>
				<td><?php echo $contact['pet']; ?></td>
			<tr>
		<?php endforeach; ?>
</table>		
</body>
</html>
  
