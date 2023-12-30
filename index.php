<?php
    session_start();
    ob_start();
    include("model/connect.php");
    include("model/danhmuc.php");
    include("model/user.php");
    include("model/sanpham.php");
    include("model/lienhe.php");
    include("model/pagination.php");
    $kq = getall_dm();
    $sphome1 = getall_sp();
    //Sản phẩm đặc biệt
    $spdb = getall_spdb();
?>
<?php
    include("view/header.php");
    // Controller (main)
    if(isset($_GET['quanly']))  {
        switch ($_GET['quanly']) {

            case 'quanlysanpham':
                // Phân trang
                // kết nối db và tìm total_records
                $total_records=total_records();
                // Tìm limit và current_page
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 12;
                // Tính total_page và start
                // Tổng số trang
                $total_page = ceil($total_records / $limit);
                // Tìm start
                $start = ($current_page - 1) * $limit;
                // Giới hạn current_page trong khoảng 1 đến total_page
                if ($current_page > $total_page){
                    $current_page = $total_page;
                }
                else if ($current_page < 1){
                    $current_page = 1;
                }
                // lấy danh sách sản phẩm theo start và limit
                $row = dssp($start, $limit);
                // $spall = getall_sp();
                include "view/sidebar.php";
                include "view/main/product.php";
                break;

            case 'gioithieu':
                include "view/sidebar.php";
                include "view/main/about.php";
                break;

            case 'lienhe':
                include "view/sidebar.php";
                include "view/main/contact.php";
                break;

            case 'guilienhe':
                if(isset($_POST['gui'])){
                    $name = $_POST['ct_name'];
                    $email = $_POST['ct_email'];
                    $phone = $_POST['ct_phone'];
                    $content = $_POST['ct_content'];

                    themlienhe($name, $email, $phone, $content);
                    $success = 1;
                    include "view/sidebar.php";
                    include "view/main/contact.php";
                    break;
                }

            case 'giohang':
                include "view/main/cart.php";
                break;

            //Dang nhap
            case 'dangnhap':
                if(isset($_SESSION['text_error']) && $_SESSION['text_error']==0){
                    $text_error = "Tên đăng nhập hoặc mật khẩu không đúng hoặc không tồn tại.";
                    unset($_SESSION['text_error']);
                }
                include "view/main/signin.php";
                break;
            case 'login':    
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    // $checklogin = checkuser($user, $pass);
                    $check = get_user($user, $pass);
                    if(count($check) > 0){
                        $_SESSION['text_error'] = 1;
                        $role = $check[0]['role'];
                        //var_dump($role);
                        if($role == 1){
                            $_SESSION['role'] = $role;
                            $_SESSION['username'] = $check[0]['username'];
                            $_SESSION['id_admin'] = $check[0]['id'];
                            header('location: admincp/index.php');
                        } else {
                            $_SESSION['role'] = $role;
                            $_SESSION['username'] = $check[0]['username'];
                            $_SESSION['id_user'] = $check[0]['id'];
                            header('location: index.php');
                        }
                    } else {
                        $_SESSION['text_error'] = 0;
                        header('location: index.php?quanly=dangnhap');
                    }
                }
                break;
            //Dang xuat user
            case 'logout':
                if (isset($_SESSION['role'])) {
                    unset($_SESSION['text_error']);
                    unset($_SESSION['username']);
                    unset($_SESSION['role']);
                    header('location: index.php');
                }
                break;
            //Dang ky
            case 'dangky':
                if(isset($_SESSION['register_err']) && $_SESSION['register_err']==1){
                    $register_err = "Tên đăng nhập đã tồn tại.";
                    unset($_SESSION['register_err']);
                }
                include "view/main/signup.php";
                break;
            case 'signup':
                if(isset($_POST['dangky']) && $_POST['dangky']){
                    $email = "";
                    $address = "";
                    $name = "";
                    $username = $_POST['username'];
                    if(!checkexist($username)){
                        $password = $_POST['password'];
                        if($_POST['email'] != "")
                            $email = $_POST['email'];
                        if($_POST['address'] != "")
                            $address = $_POST['address'];
                        if($_POST['name'] != "")
                            $name = $_POST['name'];
                        user_register($username,$password,$email,$address,$name);
                        header('location: index.php?quanly=dangnhap');
                    }else {
                        $_SESSION['register_err'] = 1;
                        header('location: index.php?quanly=dangky');
                    }                    
                }
                break;
            //Load san pham theo danh muc
            case 'danhmuc':
                //load san pham theo id danh muc
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $spdm = getall_spdm($id); 
                }
                include "view/sidebar.php";
                include "view/main/product_cate.php";
                break;
            //Userinfo for user
            case 'userinfo':
                if(isset($_SESSION['id_user'])){
                    $id = $_SESSION['id_user'];
                    $userinfo=get_oneuser($id);
                }
                include "view/sidebar.php";
                include './view/main/userinfo.php';                
                break;
            default:
                include "view/sidebar.php";
                include "view/main/home.php";
                break;
        }
    }else {
        include "view/sidebar.php";
        include "view/main/home.php";
          }
    // controller
    include "view/footer.php";
?>
