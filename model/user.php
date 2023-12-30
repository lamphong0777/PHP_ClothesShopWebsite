<?php
	function get_user($username, $password){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username=:username AND password=:password");
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	function get_oneuser($id){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	function show_user(){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE role != 1");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	function user_register($username,$password,$email,$address,$name){
		$conn = connectdb();

		if($email != "") {
			$sql = "INSERT INTO tbl_admin (email) VALUES (:email)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':email', $email);
		}

		if($address != "") {
			$sql = "INSERT INTO tbl_admin (address) VALUES (:address)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':address', $address);
		}

		if($name != "") {
			$sql = "INSERT INTO tbl_admin (name) VALUES (:name)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name', $name);
		}

		$sql = "INSERT INTO tbl_admin (username,password) VALUES (:username, :password)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
  		$stmt->execute();
	}

	function checkexist($username){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username=:username");
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		if(count($arr) > 0){
			return 1;
		}
		return 0;
	}

	function del_user($id){
		$conn = connectdb();
		$sql = "DELETE FROM tbl_admin WHERE id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt -> execute();
	}
?>