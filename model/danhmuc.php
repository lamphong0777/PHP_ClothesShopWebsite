<!-- Viet ham xu ly them sua xoa -->
<?php
	function getall_dm(){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_category");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	function del_dm($id){
		$conn = connectdb();
		// Gọi hàm connectdb() để kết nối db
		$conn = connectdb();
		$sql = "DELETE FROM tbl_category WHERE id_category=:id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
  		$stmt->execute();
	}

	function getonedm($id){
		$conn = connectdb();
		$sql = "SELECT * FROM tbl_category WHERE id_category=:id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	function updatedmform($id, $name_category, $index_category){
		$conn = connectdb();
		$sql = "UPDATE tbl_category SET name_category=:name, index_category=:index  WHERE id_category=:id";

		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':name', $name_category);
		$stmt->bindParam(':index', $index_category);
		$stmt->execute();
	}

	function adddm($name_category, $index_category){
		$conn = connectdb();
		$sql = "INSERT INTO tbl_category(name_category, index_category) VALUES (:name, :index)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name', $name_category);
		$stmt->bindParam(':index', $index_category);
		$stmt->execute();
	}
?>