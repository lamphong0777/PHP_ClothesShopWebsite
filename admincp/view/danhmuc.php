<h1><b>Thêm danh mục sản phẩm</b></h1>
<hr>
<form method="POST" action="index.php?action=adddm">
	<div class="row d-flex">
    <div class="col-md-3 text-start">
      <h4>TÊN DANH MỤC</h4>
      <input type="text" name="name_cate" class="input-dm">
    </div>
    <div class="col-md-3 text-center">
      <h4>THỨ TỰ</h4>
      <input type="text" name="index_cate" class="input-dm">
    </div>
  <div class="col-md-3 text-start mt-1">
  	<br>
    <div class=""><button type="submit" name="themmoi" class="btn btn-success"><i class="fa fa-plus"></i> ADD</button></div>
  </div>
  </div>
</form>
<hr>
<h1><b>Danh sách các danh mục</b></h1>
<table class="table table-bordered text-center">
  <tr>
    <th>ID DANH MỤC</th>
    <th>TÊN DANH MỤC</th>
    <th>THỨ TỰ</th>
    <th>HIỂN THỊ</th>
    <th>QUẢN LÝ</th>
  </tr>
  <?php
  	//var_dump($kq);
  ?>
  <?php 
  	if(isset($kq) && (count($kq) > 0)){
  		$i=1;
  		foreach ($kq as $dm) {
  			echo '<tr>
				    <td>'.$dm['id_category'].'</td>
				    <td>'.$dm['name_category'].'</td>
				    <td>'.$dm['index_category'].'</td>
				    <td>'.$dm['show_category'].'</td>
				    <td>
              <a href="index.php?action=updatedmform&id='.$dm['id_category'].'" title="edit" class="btn-edit">
                <i class="fas fa-edit"></i> SỬA
              </a>
              <!-- Xóa -->
              <button type="button" class="btn-del" data-bs-toggle="modal" data-bs-target="#del_user'.$dm['id_category'].'">
                <i class="fas fa-trash"></i> XÓA
              </button>

              <!-- Modal -->
              <div class="modal fade" id="del_user'.$dm['id_category'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-4" id="exampleModalLabel">Xóa danh mục sản phẩm</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Bạn có muốn xóa "'.htmlspecialchars($dm['name_category']).'"? 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                      
                      <a href="index.php?action=del_dm&id='.$dm['id_category'].'" title="delete" class="btn btn-warning">
                              <i class="fas fa-trash"></i> XÓA
                            </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            </td>
				 </tr>';
				 $i++;
  		}
  	}
  ?>
  
</table>