<h1>Cập nhật sản phẩm</h1>
<!-- <?php
echo var_dump($spct);
 ?> -->
 <hr>
<form method="POST" action="index.php?action=updatespform" enctype="multipart/form-data">
  <input type="hidden" name="id_sp" class="input-sp" value="<?=$spct[0]['id_sp']?>">
  <div class="row text-start d-flex">
    <div class="col-3">
      <h5>Tên sản phẩm</h5>
      <input type="text" name="ten_sp" class="input-sp" value="<?=$spct[0]['ten_sp']?>">
    </div>
    <div class="col-3">
      <h5>Ảnh sản phẩm</h5>
      <input type="file" name="anh_sp"><img src="../uploaded/<?=$spct[0]['anh_sp']?>" alt="" width="90px">
    </div>
    <div class="col-3">
      <h5>Giá cũ</h5>
      <input type="text" name="giacu_sp" class="input-sp" value="<?=$spct[0]['giacu_sp']?>">
    </div>
    <div class="col-3">
      <h5>Giá mới</h5>
      <input type="text" name="gia_sp" class="input-sp" value="<?=$spct[0]['gia_sp']?>">
    </div>

    <div class="col-3">
      <h5>Loại đặc biệt</h5>
      <select name="special" id="" class="input-sp">
        <?php
          $specialcur=$spct[0]['special'];
          if($specialcur == 0){
            echo '<option value="1">Đặt biệt</option>';
            echo '<option value="0" selected>Thường</option>';
          }else if($specialcur == 1){
            echo '<option value="1" selected>Đặt biệt</option>';
            echo '<option value="0">Thường</option>';
          }
        ?>
      </select>
    </div>
    <div class="col-3">
      <h5>Danh mục</h5>
      <select name="id_category" class="input-sp">
          <option value="0">Chọn danh mục</option>
          <?php
            $iddmcur=$spct[0]['id_category'];
            if(isset($dsdm)) {
              foreach($dsdm as $dm){
                if($dm['id_category'] == $iddmcur)
                  echo '<option value="'.$dm['id_category'].'" selected>'.$dm['name_category'].'</option>';
                else
                  echo '<option value="'.$dm['id_category'].'">'.$dm['name_category'].'</option>';
              }
            } 
          ?>
      </select>
    </div>
    <div class="col-6">
      <h5>Mô tả ngắn</h5>
      <textarea name="mota_sp" id="" cols="30" rows="5" class="input-sp"><?php echo $spct[0]['mota_sp'] ?></textarea>
    </div>

    <div class="col-6">
      <h5>Mô tả chi tiết</h5>
      <textarea name="chitiet_sp" id="" cols="30" rows="5" class="input-sp"><?php echo $spct[0]['chitiet_sp'] ?></textarea>
    </div>
    <div class="col-6">
      <br><br><br>
      <button type="submit" name="capnhatsp" class="btn-edit"><i class="fa fa-pen"></i> SỬA</button>
    </div>
  </div>
</form>
<hr>