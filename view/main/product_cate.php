<div class="col-sm p-2">
    <a href="index.php" class="text-reset">Trang chủ</a>
    <span>></span>
    <a class="text-reset" href="index.php?quanly=danhmuc&id=<?= $spdm[0]['id_category']; ?>"><?php echo $spdm[0]['name_category'] ?></a>
    <h1 class="title-pro"><?php
        //var_dump($spdm);
        if(isset($spdm) && count($spdm) > 0){
            echo $spdm[0]['name_category'];
        }
        else echo 'Sản phẩm đang cập nhật....';
    ?></h1>
    <hr>
    <div class="row">
        <?php
        foreach ($spdm as $sp) {
                echo 
                    '<div class="col-6 col-lg-3 d-flex"  id="product">
                        <div class="sp-border">
                            <a href=""><img src="./uploaded/'.$sp['anh_sp'].'" alt="test" class="sp-img"></a>                                            
                            <a href="" class="sp-name">'.$sp['ten_sp'].'</a> 
                            <p class="sp-gia">'.$format_number_1 = number_format($sp['gia_sp']).'đ</p>
                            <span>
                                <input type="number" name="" value="0" class="sp-sl">
                                <input type="button" name="" value="Mua hàng" class="sp-mua">
                                <a class="sp-them" href="#"><i class="fas fa-shopping-bag">+</i></a>
                            </span>
                        </div>                           
                    </div>';
            }
        ?>
    </div>
</div>