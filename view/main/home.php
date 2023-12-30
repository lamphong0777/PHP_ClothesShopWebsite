<div class="col-sm p-2">
    <div class="banner">
        <img src="./images/banner_main_3.jpg" width="100%" alt="">
    </div>
    <h1 class="title-pro">Sản phẩm mới</h1>
    <hr>
    <div>
    <ul class="row">                    
        <?php
            for ($i=0 ; $i <= 7; $i++) { ?>
                    <div class="col-6 col-lg-3 d-flex"  id="product">
                        <div class="sp-border">
                            <a href="" data-bs-toggle="modal" data-bs-target="#ctsp<?=$sphome1[$i]['id_sp'];?>">
                                <img src="./uploaded/<?=$sphome1[$i]['anh_sp'];?>" alt="" class="sp-img">
                            </a>                                            
                            <a href="" data-bs-toggle="modal" data-bs-target="#ctsp<?=$sphome1[$i]['id_sp'];?>" class="sp-name"><?=$sphome1[$i]['ten_sp'];?></a> 
                            <p class="sp-gia"><?=$format_number_1 = number_format($sphome1[$i]['gia_sp']);?>đ</p>
                            <span>
                                <form action="index.php?quanly=themvaogio" method="POST">
                                    <!-- input tên sp, ảnh sp, giá sp -->
                                    <input type="hidden" value="<?=$sphome1[$i]['ten_sp'];?>" name="tensp">
                                    <input type="hidden" value="<?=$sphome1[$i]['anh_sp'];?>" name="anhsp">
                                    <input type="hidden" value="<?=$sphome1[$i]['gia_sp'];?>" name="giasp">
                                    <!-- total_price tính từ price và quantity -->
                                    <!-- size -->
                                    <select name="size" class="size-box">
                                        <option value="0">Chọn size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                    <!-- size -->
                                    <input type="number" name="soluong" value="1" min="1" max="10" class="sp-sl">
                                    <?php if(isset($_SESSION['role']) && $_SESSION['role']==0) 
                                        echo '<input type="submit" name="themgio" value="Thêm vào giỏ" class="sp-mua">';
                                        else
                                            echo '<button type="button" onclick="myFunction()" class="sp-mua">Thêm vào giỏ</button>'
                                    ?>                            
                                </form>
                            </span>
                        </div>
                    </div>

                    <!-- Modal -->
                        <div class="modal fade" id="ctsp<?=$sphome1[$i]['id_sp'];?>" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Chi tiết sản phẩm</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="./uploaded/<?=$sphome1[$i]['anh_sp'];?>" alt="test" class="sp-img">
                                    </div>
                                    <div class="col-6">
                                        <p class="ctsp-name"><?=$sphome1[$i]['ten_sp'];?></p> 
                                        <p class="ctsp-gia"><?=$format_number_1 = number_format($sphome1[$i]['gia_sp']);?>đ</p>
                                        <p>Mô tả:</p>
                                        <form action="index.php?quanly=themvaogio" method="POST">
                                            <input type="number" name="soluong" value="1" min="1" max="10" class="sp-sl">
                                            <?php if(isset($_SESSION['role']) && $_SESSION['role']==0) 
                                                    echo '<input type="submit" name="themgio" value="Thêm vào giỏ" class="sp-mua">';
                                                else
                                                    echo '<button type="button" onclick="myFunction()" class="sp-mua">Thêm vào giỏ</button>'
                                            ?>
                                        </form>
                                    </div>
                                    <div class="col-6 more-infor">
                                        <font color="green"><h6><i class="fas fa-exchange-alt"></i> Chính sách bảo hành</h6></font>

                                        <p>1) 7 ngày đổi trả hàng miễn phí.</p>
                                        <p>2) Hoàn tiền 100% nếu sản phẩm không đúng mẫu.</p>

                                        <font color="green"><h6><i class="fas fa-shipping-fast"></i> Chính sách vận chuyển</h6></font>

                                        <p>1) Giao hàng toàn quốc nhanh chóng.</p>
                                        <p>2) Giao siêu tốc trong vòng 2 giờ tại: Cần Thơ</p>
                                    </div>
                                    <div class="col-6 more-infor">
                                        <font color="green"><h6><i class="fas fa-clipboard-list"></i> Mô tả chi tiết</h6></font>

                                    </div>
                                    <img src="./uploaded/<?=$sphome1[$i]['anh_sp'];?>" alt="test" class="sp-img">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở lại</button>
                                
                              </div>
                            </div>
                        </div>                           
                    </div>
        <?php
            }
        ?>
        
    </ul>
    </div>

    <div id="carouselExampleAutoplaying1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner banner-home">
            <div class="carousel-item active">
                <img src="./images/banner_main_4.jpg" class="d-block w-100 h-300" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/banner_main_1.jpg" class="d-block w-100 h-300" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/banner_main.jpg" class="d-block w-100 h-300" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <br>
    <h1 class="title-pro">Sản phẩm khuyến mãi</h1>
    <hr>
    <ul class="list-products row ">
        <?php 
            for ($i=0 ; $i <= 7; $i++) {
                echo 
                    '<div class="col-6 col-lg-3 d-flex"  id="product">
                        <div class="sp-border">
                            <a href=""><img src="./uploaded/'.$sphome1[$i]['anh_sp'].'" alt="test" class="sp-img"></a>                                            
                            <a href="" class="sp-name">'.$sphome1[$i]['ten_sp'].'</a> 
                            <p class="sp-gia">'.$format_number_1 = number_format($sphome1[$i]['gia_sp']).'đ</p>
                            <span>
                                <input type="number" name="" value="0" min="0" max="10" class="sp-sl">
                                <input type="button" name="" value="Mua hàng" class="sp-mua">
                                <a class="sp-them" href="#"><i class="fas fa-shopping-bag">+</i></a>
                            </span>
                        </div>                           
                    </div>                    
                    ';
            }
        ?>
    </ul>
    <div class="banner">
        <img src="./images/banner_main_2.jpg" width="100%" alt="">
    </div>    
</div>

<!-- Button trigger modal -->



</div>
