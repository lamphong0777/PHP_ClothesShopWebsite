<?php
	// TÌM TỔNG SỐ RECORDS
	function total_records(){
		$conn = connectdb();
		// TÌM TỔNG SỐ RECORDS
		$stmt = $conn->prepare("SELECT count(id_sp) as total from tbl_product");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$total_records = $stmt->fetchAll();
		return $total_records[0]['total'];
	}

	function dssp($start, $limit){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_product LIMIT :str, :lmt");
		$stmt->bindParam(':str', $start, PDO::PARAM_INT);
		$stmt->bindParam(':lmt', $limit, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}
?>