<?php
class  Payment {
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}

	function getAddPayment($studentID, $totalAmount, $change) {
		$db = new DatabaseConnect();
		if (empty($studentID)) {
			return true;
		}

		if (empty($totalAmount)) {
			return true;
		}

		if (empty($change)) {
			return true;
		}
	
		$prepared = $db->connection->prepare("
			INSERT INTO payment (student_id, total_amount, `change`)
			VALUES (?, ?, ?)
		");	
		$prepared->bind_param('iii', $studentID, $totalAmount, $change);
		$status = $prepared->execute();	
		$db->connection->close();
	}
	function getViewPayment($studentID, $totalAmount, $change) {

		$select = "SELECT * FROM payment WHERE student_id = $studentID AND total_amount = $totalAmount AND 
		`change` = $change AND transaction_date = NOW() ";
		$result = $this->_db->connection->query($select);
		$result = $result->fetch_all(MYSQLI_ASSOC);
		return $result;
	}
	function ifPayed($paymentID) {
	
		
		$select = "UPDATE payment SET payment = 1 WHERE payment_id = $paymentID ";
		$result = $this->_db->connection->query($select);
		header("Location: /enrollment/templates/student/");
		
	}
	function getViewAllPayment(){
		$select = "SELECT * FROM payment";
		$result = $this->_db->connection->query($select);
		$result = $result->fetch_all(MYSQLI_ASSOC);
		return $result;
	}
}

?>