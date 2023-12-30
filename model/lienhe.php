<?php
	function themlienhe($name, $email, $phone, $content){
		$conn = connectdb();
		$sql = "INSERT INTO tbl_contact (name, email, phone, content) VALUES (:name, :email, :phone, :content)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':content', $content);
		$stmt->execute();
	}

	function laylienhe(){
		$conn = connectdb();
		$sql = "SELECT * FROM tbl_contact";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$arr = $stmt->fetchAll();
		return $arr;
	}

	function xoalienhe(){
		$conn = connectdb();
		$sql = "DELETE FROM tbl_contact WHERE id=:id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
	}
?>