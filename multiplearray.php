<?php
$searchText = 'cesar';
$employeeName = $searchText;

$departmentObject = new Departments();
$EmployeeObject =  new Employees();
$ColorObject = new Colors();

$colorID = $EmployeeObject->getColorID($employeeName);
$departmentID = $EmployeeObject->getDepartmentID($employeeName);
$departmentname = $departmentObject->getDepartmentName($departmentID);
$colorname = $ColorObject->getFavoriteColor($colorID);
echo "The Department of " . $searchText. " is " .$departmentname. " and his favorite color is " .$colorname. "<br />";


// var_dump($departments);
// echo 'Cesar\'s department is '.$departments[$departmentID]['name'].'<br /><br />';


/*
$department = array_values(array_filter($departments, function($department) use ($departmentID) {
	return $department['dept_id'] == $departmentID;
}));

array_values(array_rand())
*/

// echo "Cesar's department is ".$departmentObject->getDepartmentName($departmentID)."<br /><br />";		
/*
foreach ($employees as $employee) {
	foreach ($departmentObject->getAll() as $department) {
		if ($employee['dept_id'] == $department['dept_id']) {
			echo $employee['name'].', '.$department['name'].'<br />';
		}
	}
}
*/
	
	
class Colors {
	
	private $_colors = [
		['color_id' => 1, 'name' => 'red'],
		['color_id' => 2, 'name' => 'blue'],
		['color_id' => 3, 'name' => 'white'],
	];
	
	function getFavoriteColor($colorID) {
		$colorsName = NULL;
	
		foreach ($this->_colors as $color) {
			if ($color['color_id'] == $colorID) {
				$colorsName = $color['name'];
			}
		}		
		return $colorsName;
	}	
}
class Departments {
	private $_records = [
		['dept_id' => 1, 'name' => 'hr'],
		['dept_id' => 2, 'name' => 'operations'],
		['dept_id' => 3, 'name' => 'clerk'],
		['dept_id' => 4, 'name' => 'marketting'],
		['dept_id' => 5, 'name' => 'management'],
	];
	
	function getDepartmentName($departmentID) {
		$departmentName = null;
	
		foreach ($this->_records as $department) {
			if ($department['dept_id'] == $departmentID) {
				$departmentName = $department['name'];
			}
		}
		
		return $departmentName;
	}
	
	function getAll() {
		return $this->_records;
	}
}

class Employees {
	private $employees = [
		['emp_id' => 1, 'dept_id' => 1,'color_id' => 1,'name' => 'anthony'],
		['emp_id' => 2, 'dept_id' => 2,'color_id' => 3,'name' => 'cesar'],
		['emp_id' => 3, 'dept_id' => 2,'color_id' => 3,'name' => 'mikko'],
		['emp_id' => 4, 'dept_id' => 2,'color_id' => 1,'name' => 'yoly'],
		['emp_id' => 5, 'dept_id' => 5,'color_id' => 2,'name' => 'ann'],
	];

	function getDepartmentID($employeename) {
	
		foreach ($this->employees as $employee) {
			if ($employeename == $employee['name']) {
				$departmentID = $employee['dept_id'];
			}
			
		}
		return $departmentID;
		return $colorID;

	}
		function getColorID($employeename) {
	
			foreach ($this->employees as $employee) {
				if ($employeename == $employee['name']) {
					$colorID = $employee['color_id'];
				}	
			
			}
			return $colorID;
		}
}	

?>
	
