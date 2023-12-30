<div class="col-sm p-2">
    <h1 class="title-pro">Tất cả sản phẩm</h1>
    <hr>
    <div class="row">
    <?php
    foreach ($row as $sp) {
            echo 
                '<div class="col-6 col-lg-3 d-flex"  id="product">
                    <div class="sp-border">
                        <a href=""><img src="./uploaded/'.$sp['anh_sp'].'" alt="test" class="sp-img"></a>                                            
                        <a href="" class="sp-name">'.$sp['ten_sp'].'</a> 
                        <p class="sp-gia">'.$format_number_1 = number_format($sp['gia_sp']).'đ</p>
                        <span>
                            <input type="number" name="" value="0" min="0" max="10" class="sp-sl">
                            <input type="button" name="" value="Mua hàng" class="sp-mua">
                            <a class="sp-them" href="#"><i class="fas fa-shopping-bag">+</i></a>
                        </span>
                    </div>                           
                </div>';
        }
    ?>
    </div>
    <!-- Phần phân trang -->
    <div class="text-center m-3">
    <?php 
        if(isset($row)){
            // PHẦN HIỂN THỊ PHÂN TRANG
            // Bước 7: hiển thị phân trang
 
            // Nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a class="pagi-btn" href="index.php?quanly=quanlysanpham&page='.($current_page-1).'">Prev</a>';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span class="pagi-btn-span">'.$i.'</span>';
                }
                else{
                    echo '<a class="pagi-btn" href="index.php?quanly=quanlysanpham&page='.$i.'">'.$i.'</a>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a class="pagi-btn" href="index.php?quanly=quanlysanpham&page='.($current_page+1).'">Next</a>';
            }
        }
    ?>
    </div>
    <!-- Banner -->
    <div class="banner">
        <img src="./images/banner_main_2.jpg" width="100%" alt="">
    </div>
</div>