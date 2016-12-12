<?php
class Admin {
	private $_db = null;
	
	function __construct() {
		$this->_db = new DatabaseConnect();
	}
	function getUserPassword($userName, $password) {

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
   
		$sql = "SELECT user_id FROM admin WHERE username = '$userName' and password = '$password'";
      	$result = $this->_db->connection->query($sql);
     	$row = $result->fetch_all(MYSQLI_ASSOC);

      	$count = mysqli_num_rows($result);

		if($count == 1) {
			#$_SESSION['userName'];
			$_SESSION['login_user'] = $userName;

			#session_start();
			#header("location: ../");
			return [
				'status' => true,
				'error' => null
			];
		} else {
			return [			
				'status' => false,
		  		'error' => 'Your Login Name or Password is invalid'
			];
		}
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

	function userSession() {
		
		if (session_id() === '') {
			return false;
		}
		return true;
		$user_check = $_SESSION['login_user'];

		$select = "select username from admin where username = '$user_check' ";

		$ses_sql = mysqli_query($this->_db->connection, $select);

		$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

		$login_session = $row['username'];

		if(!isset($_SESSION['login_user'])){
		  #header("location:/login/index.php");
		}
	}

}
?>