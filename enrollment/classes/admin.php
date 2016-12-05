<?php
class Admin {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	function getUserPassword($userName, $password) {
		if (empty($userName)) {
			return [
			'error' => 'please input username and password'
			];
		}
		if (empty($password)) {
			return [
			'error' => 'please input username and password'
			];
		}
      
     	$sql = "SELECT * FROM admin WHERE username = '$userName' and password = '$password'";
     	$result = $this->_db->connection->query($sql);
     	$result = mysqli_fetch_array($result,MYSQLI_ASSOC);

      	return $result;

	}
	function getViewAdmin() {
		$sql = "SELECT * FROM admin ";
     	$result = $this->_db->connection->query($sql);
      	$result = $result->fetch_all(MYSQLI_ASSOC);

      	return $result;
	}
	function getViewUser($userID = null){
		if (empty($userID)) {
			return false;
		}
		$select = "SELECT * FROM admin WHERE user_id = $userID" ;
		$result = $this->_db->connection->query($select);
		$result = $result->fetch_all(MYSQLI_ASSOC);
		return $result;
	}	
	function getAddAdmin($userName, $password) {
	
		if (empty($userName)) {
			return [
			'error' => 'Please input username and password',
			];	
		}

		if (empty($password)) {
			return [
			'error' => 'Please input username and password',
			];	
		}

		if ($this->userExist($userName)) {
		return [
			'error' => 'username Already Exist',	
			];
		}
	
		$prepared = $this->_db->connection->prepare("
			INSERT INTO admin(username, password)
			VALUES (?,?)
		");	

	

		$prepared->bind_param('ss', $userName, $password);
		$prepared->execute();	

		print $prepared->error;
	
		
		header("Location: /templates/admin/");			
	}
	function getEditUser($userName, $password, $userID) {
				
		
		if (empty($userName)) {
			return [
			'error' => 'please input subject and unit'
			];
		}
		if (empty($password)) {
			return [
			'error' => 'please input subject and unit'
			];
		}

		if ($this->userExist($userName)) {
		return [
			'error' => 'username Already Exist',	
			];
		}

		$prepared = $this->_db->connection->prepare("UPDATE admin SET username = ?, password = ? WHERE user_id = ? ");
		$prepared->bind_param("ssi", $userName, $password, $userID);
		$prepared->execute();
		$prepared->close();


	
			header("Location: /templates/admin/");
	}
	
	function getDeleteUser($userID) {
		
		if (empty($userID)){
			return true;
		}
		$query = "DELETE FROM admin WHERE user_id = ".$userID;

		if ($this->_db->connection->query($query) === true)
		{
		}

		header("Location: /templates/admin/");
	}

	function userExist($userName) {
		if (empty($userName)) {
			return false;
		}
		
		
		$prepared = $this->_db->connection->prepare("
			SELECT user_id FROM admin WHERE username = ?
		");	
		
		$prepared->bind_param('s', $userName);
		$prepared->execute();	
		$prepared->bind_result($userID);
		$prepared->fetch();
	
		return !empty($userID);
	} 

}
?>