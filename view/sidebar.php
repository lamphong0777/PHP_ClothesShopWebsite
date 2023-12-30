<div class="col-md-5 col-lg-3 p-3">
    
    <ul class="dmsp-div">
    <p class="sidebar-title1">Danh mục sản phẩm</p>                    
        <?php 
            if(isset($kq) && count($kq) > 0){
                $i=0;
                foreach ($kq as $dm){
                    echo '
                        <li>
                            <a href="index.php?quanly=danhmuc&id='.$dm['id_category'].'" class="dmsp">'.$dm['name_category'].'</a>
                        </li>';
                    $i++;
                }
            }
         ?>
    </ul>
    <hr>
    <h4 class="sidebar-title">Sản phẩm đặt biệt</h4>
    <div class="text-start">
        <?php
            if(isset($spdb) && count($spdb)>0){
                if(count($spdb)<6){
                    foreach ($spdb as $sp) {
                        echo '
                            <div class="row d-flex spdb-div">
                                <div class="col-4">
                                    <img src="./uploaded/'.$sp['anh_sp'].'" alt="" class="spdb-img">
                                </div>
                                <div class="col spdb-text">
                                    <br>
                                    <h5>'.$sp['ten_sp'].'</h5>
                                    <p class="spdb-gia">'.$format_number_1 = number_format($sp['gia_sp']).'đ</p>
                                    <a href="#" class="spdb-xemct"><i class="fa fa-eyes">Xem chi tiết</i></a>
                                </div>
                            </div>';
                    }
                }else{
                    for ($i=0; $i < 5; $i++) { 
                        echo '
                            <div class="row">
                                <div class="col">
                                    <img src="./uploaded/'.$spdb[$i]['anh_sp'].'" alt="" width="100%" class="spbs_img">
                                </div>
                                <div class="col spbc">
                                    <h5>'.$spdb[$i]['ten_sp'].'</h5>
                                    <p>Giá: '.$format_number_1 = number_format($sp['gia_sp']).'</p>
                                    <a href="">Xem chi tiết</a>
                                </div>
                            </div>';
                    }
                }                            
            }
        ?>                        
    </div>
    <div class="container phone-contact-main">
        <div class="row phone-contact">
            <p><b>Gọi để được tư vấn trực tiếp <br><i class="fa fa-phone"></i> 1900 2020</b></p>
        </div>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/banner_left.jpg" class="d-block w-100 h-300" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/banner_left_1.jpg" class="d-block w-100 h-300" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/banner_left_2.jpg" class="d-block w-100 h-300" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr>
    <h4 class="sidebar-title">Tin tức</h4>
    <br>
    <div class="text-start tintuc">
        <div class="row d-flex">
            <div class="col-5">
                <img src="images/banner_tintuc1.png" alt="" width="100%">
            </div>
            <div class="col">
                <a href="https://www.24h.com.vn/thoi-trang-c78.html" class="text-start">Những trang phục phong cách Taylor Swift đáng thử trong mùa thu này</a>
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col-5">
                <img src="images/banner_tintuc2.png" alt="" width="100%">
            </div>
            <div class="col">
                <a href="https://www.24h.com.vn/thoi-trang-c78.html" class="text-start">Mũ beanies đã trở lại, đúng lúc cho thời tiết lạnh </a>
            </div>
        </div>
    </div>
</div>