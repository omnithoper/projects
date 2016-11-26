<?php
 ini_set('display_errors', 'On');
 $db = new PDO('mysql:host=127.0.0.1;dbname=addressbook', 'root', '');

 
$contacts = $db->query("SELECT city_id, pet_id, phone, color_id, CONCAT(name, ' ', lastname) as full_name  FROM contacts");
$cities = $db->query("SELECT * FROM city");
$colors = $db->query("SELECT * FROM colors");
$pets = $db->query("SELECT * FROM pets");
	
$colors = $colors->fetchAll(PDO::FETCH_OBJ);
$cities = $cities->fetchAll(PDO::FETCH_OBJ);
$contacts = $contacts->fetchAll(PDO::FETCH_OBJ);
$pets = $pets->fetchAll(PDO::FETCH_OBJ);

$area= "Taguig";
$results = [];
$allContacts = []; 
foreach ($cities as $city) {
	foreach($contacts as $contact) {	
		foreach($colors as $color) {
			foreach($pets as $pet) {
				if (($contact->city_id == $city->city_id) 
					&& ($city->name == $area) 
					&& ($contact->pet_id == $pet->pet_id) 
					&& ($color->color_id == $contact->color_id)) {
						$results['contact'] = $contact->full_name;
						$results['phone'] = $contact->phone;
						$results['city'] = $city->name;
						$results['color'] = $color->name;
						$results['pet'] = $pet->name;
						$allContacts[] = $results;
				}			
			}	
		}
	}
}

$results = [];
$key = 0;
foreach ($cities as $city) {
	foreach($contacts as $contact) {	
		foreach($colors as $color) {
			foreach($pets as $pet) {
				if (($contact->city_id == $city->city_id) 
					&& ($city->name == $area) 
					&& ($contact->pet_id == $pet->pet_id) 
					&& ($color->color_id == $contact->color_id)) {
						$results[$key]['contact'] = $contact->full_name;
						$results[$key]['phone'] = $contact->phone;
						$results[$key]['city'] = $city->name;
						$results[$key]['color'] = $color->name;
						$results[$key]['pet'] = $pet->name;
				}			
			}	
		}
	}
}	
	
 ?>
 <table border="1">
	<tr>
		<th>Name</th>
		<th>City</th>
		<th>Phone</th>
		<th>Color</th>
		<th>Pets</th>
	</tr>
	<?php foreach ($allContacts as $contactRecord): ?>
		<tr>
			<td><?php echo $contactRecord['contact']; ?></td>
			<td><?php echo $area; ?></td>
			<td><?php echo $contactRecord['phone']; ?></td>
			<td><?php echo $contactRecord['color']; ?></td>
			<td><?php echo $contactRecord['pet']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
	
