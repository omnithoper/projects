<?php



include 'student subject.php';
$searchText = !empty($_POST['studentName'])?$_POST['studentName']:null;

$mathBranch= $searchText;

/*
// student name
$studentObject = new Student();
$studentLastName = $studentObject->getStudentName($name);
$mathID = $studentObject->getStudentMathID($name);
$scienceID = $studentObject->getStudentScienceID($name);
$historyID = $studentObject->getStudentHistoryID($name);

// student math name
$mathObject = new Math();
$mathBranch = $mathObject->getMathBranch($mathID);

// student science name
$scienceObject = new Science();
$scienceBranch = $scienceObject->getScienceBranch($scienceID);

// student history name
$historyObject = new history();
$historyBranch = $historyObject->getHistoryBranch($historyID);

echo $name . ' ' .$studentLastName. ' ' .$mathBranch . ' ' .$scienceBranch . ' ' .$historyBranch;
*/
// crud 
$crudOperation = isset($_POST['CRUD'])?$_POST['CRUD']:null;

// display 
$mathObject = new Math();
$mathID = $mathObject->getMathID($mathBranch);

$studentObject = new Student();
$studentName = $studentObject->getStudentsName($mathID);
$result = $studentObject->addstudent($crudOperation); 
?>


