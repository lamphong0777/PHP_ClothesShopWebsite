<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminCP</title>
	<!-- Css -->
	<link rel="stylesheet" href="css/style_admincp.css">
	<!-- Bootstap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
	<div class="row">
		<div class="col-md-2 main-left">
			<div class="admin-title-div text-center">
				<h5 class="admin-title"><a href="index.php" class="text-reset"><b>WeiYi Clothes Admin</b></a></h5>
				<div class="admin-user">
		    		<button class="admin-user-icon"><i class="fas fa-user-circle"></i></button>
		    		<?php 
		    			if(isset($_SESSION['username']) && $_SESSION['username']!=""){
		    				echo '<span>' .$_SESSION['username']. '</span>';
		    			}
		    			else echo "Lỗi";
		    		?>
		    		<a href="index.php?action=logout" title="">
		    			<button class="admin-user-icon"><i class="fas fa-sign-out-alt"></i></button>
		    		</a>				    		
		    	</div>
			</div>
			<h5 class="menu-title">Quản lý</h5>
			<ul class="admin_menu">
				<li><hr><a href="index.php?action=danhmuc" title=""><i class="fas fa-edit"></i> Quản lý danh mục sản phẩm</a><hr></li>
				<li><a href="index.php?action=sanpham" title=""><i class="fas fa-edit"></i> Quản lý sản phẩm</a><hr></li>
				<li><a href="index.php?action=taikhoan" title=""><i class="fas fa-edit"></i> Quản lý tài khoản</a><hr></li>
				<li><a href="index.php?action=donhang" title=""><i class="fas fa-edit"></i> Quản lý đơn hàng</a><hr></li>
				<li><a href="index.php?action=lienhe" title=""><i class="fas fa-edit"></i> Quản lý liên hệ</a><hr></li>
			</ul>
		</div>
