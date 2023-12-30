<h1><b>Thêm sản phẩm</b></h1>


<form method="POST" action="index.php?action=sanpham_add" enctype="multipart/form-data">
  <div class="row text-start d-flex">
    <div class="col-3">
      <h5>Tên sản phẩm</h5>
      <input type="text" name="ten_sp" class="input-sp" value="">
    </div>
    <div class="col-3">
      <h5>Ảnh sản phẩm</h5>
      <input type="file" name="anh_sp">
    </div>
    <div class="col-3">
      <h5>Giá cũ</h5>
      <input type="text" name="giacu_sp" class="input-sp" value="">
    </div>
    <div class="col-3">
      <h5>Giá mới</h5>
      <input type="text" name="gia_sp" class="input-sp" value="">
    </div>

    <div class="col-3">
      <h5>Loại đặc biệt</h5>
      <select name="special" id="" class="input-sp">
      	<option value="0" selected>Thường</option>
      	<option value="1">Đặt biệt</option>
      </select>
    </div>
    <div class="col-3">
      <h5>Danh mục</h5>
      <select name="id_category" class="input-sp">
    			<option value="0">Chọn danh mục</option>
    			<?php
    				if(isset($dsdm)) {
    					foreach($dsdm as $dm){
    						echo '<option value="'.$dm['id_category'].'">'.$dm['name_category'].'</option>';
    					}
    				} 
    			?>
    	</select>
    </div>
    <div class="col-6">
      <h5>Mô tả ngắn</h5>
      <textarea name="mota_sp" id="" cols="30" rows="5" class="input-sp"></textarea>
    </div>

    <div class="col-6">
      <h5>Mô tả chi tiết</h5>
      <textarea name="chitiet_sp" id="" cols="30" rows="5" class="input-sp"></textarea>
    </div>
    <div class="col-6">
      <br><br><br>
      <button type="submit" name="themmoi" class="btn btn-success"><i class="fa fa-pen"></i> THÊM</button>
    </div>
  </div>
</form>
<hr>


<h1><b>Danh sách các sản phẩm</b></h1>
<table class="table-bordered text-center" id="table-prduct-list">
  <tr>
  		<th>ID</th>
	    <th>TÊN SẢN PHẨM</th>
	    <th>ẢNH</th>
	    <th>GIÁ CŨ</th>
	    <th>GIÁ MỚI</th>
	    <th>LOẠI</th>
	    <th>VIEW</th>
	    <th>MÔ TẢ NGẮN</th>
	    <th>CHI TIẾT</th>
	    <th>DANH MỤC</th>
	    <th>QUẢN LÝ</th>
	</tr>
  <?php
  	//var_dump($kq);
  ?>
  <?php 
  	if(isset($kq) && (count($kq) > 0)){
  		$i=1;
  		foreach ($kq as $sp) {
				$tendm = getonedm($sp['id_category']);
				if($sp['special']=='1'){
					$loai="Đặc biệt";
				}else
					$loai="Thường";
				// var_dump($tendm);
  			echo '<tr>
						    <td>'.$sp['id_sp'].'</td>
						    <td>'.$sp['ten_sp'].'</td>
						    <td><img src="../uploaded/'.$sp['anh_sp'].'" alt="" width="80px"></td>
						    <td>'.$format_number_1 = number_format($sp['giacu_sp']).'đ</td>
						    <td>'.$format_number_1 = number_format($sp['gia_sp']).'đ</td>
						    <td>'.$loai.'</td>
						    <td>'.$sp['view'].'</td>
						    <td class="td-mota">'.$sp['mota_sp'].'</td>
						    <td class="td-mota">'.$sp['chitiet_sp'].'</td>
						    <td>'.$tendm[0]['name_category'].'</td>
						    <td>
						    	<a href="index.php?action=updatesp&id='.$sp['id_sp'].'" title="edit" class="btn-edit">
						    		<i class="fas fa-edit"></i> SỬA
						    	</a>
									<a href="index.php?action=del_sp&id='.$sp['id_sp'].'" title="delete" class="btn-del">
										<i class="fas fa-trash"></i> XÓA
										</a>
								</td>
				 			</tr>';
				$i++;
  		}
  	}
  ?>
  
</table>