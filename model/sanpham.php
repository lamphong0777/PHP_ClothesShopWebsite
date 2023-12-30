<?php
	function getall_sp(){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_product");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	//Them san pham

	function add_sp($tensp, $img, $giacusp, $giasp, $special, $motasp, $ctsp, $iddm){
		$conn = connectdb();
		$sql = "INSERT INTO tbl_product (ten_sp, anh_sp, giacu_sp, gia_sp, special, mota_sp, chitiet_sp, id_category) VALUES (:ten, :img, :giacu, :gia, :special, :mota, :chitiet, :idcate)";
		$stmt=$conn->prepare($sql);
		$stmt->bindParam(':ten', $tensp);
		$stmt->bindParam(':img', $img);
		$stmt->bindParam(':giacu', $giacusp);
		$stmt->bindParam(':gia', $giasp);
		$stmt->bindParam(':special', $special);
		$stmt->bindParam(':mota', $motasp);
		$stmt->bindParam(':chitiet', $ctsp);
		$stmt->bindParam(':idcate', $iddm);
		$stmt->execute();
	}

	function del_sp($id){
		$conn = connectdb();
		$sql = "DELETE FROM tbl_product WHERE id_sp = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
	}

	function getonesp($id){
		$conn = connectdb();
		$sql = "SELECT * FROM tbl_product WHERE id_sp = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$kq = $stmt->fetchAll();
		return $kq;
	}

	function updatespform($id, $tensp, $img, $giacusp, $giasp, $special, $motasp, $ctsp, $iddm){
		$conn = connectdb();
		if($img==""){
			$sql = "UPDATE tbl_product SET ten_sp=:ten, giacu_sp=:giacu, gia_sp=:gia, special=:special, mota_sp=:mota, chitiet_sp=:ctsp, id_category=:idcate  WHERE id_sp=:id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':ten', $tensp);
			$stmt->bindParam(':giacu', $giacusp);
			$stmt->bindParam(':gia', $giasp);
			$stmt->bindParam(':special', $special);
			$stmt->bindParam(':mota', $motasp);
			$stmt->bindParam(':ctsp', $ctsp);
			$stmt->bindParam(':idcate', $iddm);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
		}else {
			$sql = "UPDATE tbl_product SET ten_sp=:ten, anh_sp=:img, giacu_sp=:giacu, gia_sp=:gia, special=:special, mota_sp=:mota, chitiet_sp=:ctsp, id_category=:idcate  WHERE id_sp=:id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':ten', $tensp);
			$stmt->bindParam(':img', $img);
			$stmt->bindParam(':giacu', $giacusp);
			$stmt->bindParam(':gia', $giasp);
			$stmt->bindParam(':special', $special);
			$stmt->bindParam(':mota', $motasp);
			$stmt->bindParam(':ctsp', $ctsp);
			$stmt->bindParam(':idcate', $iddm);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
		}
	}


	//san pham theo danh muc
	function getall_spdm($id){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_product tp JOIN tbl_category tc ON tp.id_category=tc.id_category WHERE tp.id_category = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}

	//show sp trang san pham (Nam, nu, phu kien)
	function getall_spshow($name){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_product tp JOIN tbl_category tc ON tp.id_category=tc.id_category WHERE tc.name_category LIKE '%' :name '%'");
		$stmt->bindParam(':name', $name);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}
	//Lấy sản phẩm đặt biệt
	function getall_spdb(){
		$conn = connectdb();
		$stmt = $conn->prepare("SELECT * FROM tbl_product WHERE special=1");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$arr = $stmt->fetchAll();
		return $arr;
	}
?>