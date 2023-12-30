<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"
    ></script>
    <script src="./scripts/script.js"></script>


    <style type="text/css">
        ol, ul {
            padding-left: 0rem;
        }
    </style>
</head>
<body id="body">
    <header class="header">
            <div class="row">
                <div class="col-lg-4 logo-img">
                    <h1><b class="shopname">WeiYi</b>Clothes</h1>
                </div>
                <div class="col-lg-8" style="padding: 0px">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid flex-row-reverse">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <div class="navbar">
                                <ul class="navbar-nav">
                                    <?php if(isset($_SESSION['username']) && $_SESSION['username']!=""){
                                        echo '<li class="nav-item">
                                                <a class="nav-link" href="index.php?quanly=userinfo&username='.$_SESSION['username'].'"><i class="fas fa-user-circle me-2"></i>'.$_SESSION['username'].'</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php?quanly=logout"><i class="fas fa-sign-out-alt"></i>Thoát</a>
                                            </li>';
                                    }else {

                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=dangnhap"><i class="fas fa-user-circle me-2"></i>Đăng nhập</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=dangky"><i class="fas fa-user-plus me-2"></i>Đăng ký</a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=giohang"><i class="fas fa-shopping-bag me-2"></i>Giỏ hàng</a>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                    </nav>
                </div>

                <nav class="navbar navbar-expand" id="nav-home">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav" id="nav-text" >
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=trangchu">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=quanlysanpham">Sản phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=gioithieu">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                    </nav>
            </div>
        </header>
        <br>
        <main>
            <div class="">
                <div class="row">              
                    <!-- main -->