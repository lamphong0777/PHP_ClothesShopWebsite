<?php 
	session_start();
	ob_start(); 

	// Menu
	include("./view/menu.php");
	// Header
	include './view/header.php';

	// Main controller
		if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
		include "../model/connect.php";
		include "../model/danhmuc.php";
		include "../model/sanpham.php";
		include "../model/user.php";
		include "../model/lienhe.php";
		if (isset($_GET['action'])) {
			switch ($_GET['action']) {
				// Hien thi danh muc san pham
				case 'danhmuc':
			    	$kq = getall_dm();
			        include "view/danhmuc.php";
			        break;
			    // Xoa danh muc san pham
			    case 'del_dm':
			        if(isset($_GET['id'])){
			        	$id = $_GET['id'];
			        	del_dm($id);
			        }
			        $kq = getall_dm();
			        include "view/danhmuc.php";
			        break;
			    // Cap nhat danh muc san pham
			    case 'updatedmform':
			    	//Lay 1 danh muc dung voi id truyen vao
			        
			        if (isset($_GET['id'])){
			        	$id = $_GET['id'];
			        	$kqone = getonedm($id);
			        	$kq = getall_dm();
			        	include "view/updatedmform.php";
			        }
			        if(isset($_POST['id_cate'])){
				        $id = $_POST['id_cate'];
				        $name_category = $_POST['name_cate'];
				        $index_category = $_POST['index_cate'];
				        updatedmform($id, $name_category, $index_category);
				        $kq = getall_dm();
				        include "view/danhmuc.php";
				    }	                    
				    break;
				// Them danh muc san pham
				case 'adddm':
					if(isset($_POST['themmoi'])){
						$tendm = $_POST['name_cate'];
						$thutu = $_POST['index_cate'];
						adddm($tendm, $thutu);
					}
					$kq = getall_dm();	
				    include "view/danhmuc.php";
					break;
				// Log out
				case 'logout':
					if (isset($_SESSION['role'])) {
					    unset($_SESSION['role']);
					    unset($_SESSION['username']);
					    unset($_SESSION['id_admin']);
					    unset($_SESSION['text_error']);
					    header('location: ../index.php');				                		
				    }
				    break;
				// Cac trang khac
				// San pham
				case 'sanpham':
				    //Lay danh sach danh muc
				    $dsdm = getall_dm();
				    //Lay danh sach san pham
				    $kq = getall_sp();
				    include "view/sanpham.php";
				    break;
				// Them san pham
				case 'sanpham_add':
				    if(isset($_POST['themmoi'])){
						$tensp = $_POST['ten_sp'];
						//IMG
						$giacusp = $_POST['giacu_sp'];
						$giasp = $_POST['gia_sp'];
						$special = $_POST['special'];
						$motasp = $_POST['mota_sp'];
						$ctsp = $_POST['chitiet_sp'];
						$iddm = $_POST['id_category'];

						//xu ly anh san pham
						$target_dir = "../uploaded/";
						$target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
						$target_file_img = basename($_FILES["anh_sp"]["name"]);
						$img = $target_file_img;
						$uploadOk =  1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));					
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif") {
							$uploadOk = 0;
						}
						move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file);
	 					add_sp($tensp, $img, $giacusp, $giasp, $special, $motasp, $ctsp, $iddm);
					}
					//Lay danh sach danh muc
				    $dsdm = getall_dm();
				    //Lay danh sach san pham
				    $kq = getall_sp();
				    include "view/sanpham.php";
				    break;
					// Sua san pham
					case 'updatesp':
					//lay san pham theo id
					if(isset($_GET['id']) && $_GET['id'] > 0){
						$id = $_GET['id'];
						$spct = getonesp($id);
					}				
					//lay ds san pham
					$kq=getall_sp();
					//lay ds danh muc
					$dsdm=getall_dm();
					include './view/updatespform.php';
				    break;
				case 'updatespform':
					//Nhan nut cap nhat
					if(isset($_POST['capnhatsp'])){
						$id = $_POST['id_sp'];
						$tensp = $_POST['ten_sp'];
						$giacusp = $_POST['giacu_sp'];
						$giasp = $_POST['gia_sp'];
						$motasp = $_POST['mota_sp'];
						$ctsp = $_POST['chitiet_sp'];
						$special = $_POST['special'];
						$iddm = $_POST['id_category'];
						//hinh
						if($_FILES["anh_sp"]["name"] != ""){
							$target_dir = "../uploaded/";
							$target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
							$target_file_img = basename($_FILES["anh_sp"]["name"]);
							$img = $target_file_img;
							$uploadOk =  1;
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif") {
								$uploadOk = 0;
							}

							move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file);
											
											
						}else {
							$img="";
						}
						// Update sp
						updatespform($id, $tensp, $img, $giacusp, $giasp, $special, $motasp, $ctsp, $iddm);
					}
									
					//lay ds san pham
					$kq=getall_sp();
					//lay ds danh muc
					$dsdm=getall_dm();
					include './view/sanpham.php';
				    break;
				// Xoa san pham
				case 'del_sp':
					if(isset($_GET['id'])){
						$id = $_GET['id'];
							del_sp($id);
					}
				    $kq = getall_sp();
				    include "view/sanpham.php";
				    break;
				// Quan ly tai khoan
				case 'taikhoan':
					$tk = show_user();
				    include "view/taikhoan.php";
				    break;

				case 'del_user':
					if(isset($_GET['id'])){
						$id = $_GET['id'];
							del_user($id);
					}
					$tk = show_user();
				    include "view/taikhoan.php";
					break;

				case 'donhang':
				    include "view/donhang.php";
				    break;

				case 'lienhe':
					// Lấy liên hệ
					$lh = laylienhe();
				    include "view/lienhe.php";
				    break;

				default:
				    include "view/danhmuc.php";
				    break;
			} 
		}else {
			$kq = getall_dm();
			include_once __DIR__ . '\view\danhmuc.php';
			}
		}else{
			header('location: ../index.php');
		}
	// Footer
	include("./view/footer.php");
?>
		