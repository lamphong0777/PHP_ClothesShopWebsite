<h1><b>Danh sách tài khoản</b></h1>
<table class="table table-bordered text-center">
  <tr>
    <th>ID</th>
    <th>TÀI KHOẢN</th>
    <th>MẬT KHẨU</th>
    <th>PHÂN LOẠI</th>
    <th>TÊN</th>
    <th>ĐỊA CHỈ</th>
    <th>EMAIL</th>
    <th>QUẢN LÝ</th>
  </tr>
  <!-- <?php
  	var_dump($tk);
  ?> -->
  <?php 
  	if(isset($tk) && (count($tk) > 0)){
  		foreach ($tk as $item) {
  			if($item['role'] == 1){
  				$pl="admin";
  			}else{
  				$pl="Người dùng";
  			}
  			echo '
          <tr>
				    <td>'.$item['id'].'</td>
				    <td>'.$item['username'].'</td>
				    <td>'.$item['password'].'</td>
				    <td>'.$pl.'</td>
				    <td>'.$item['name'].'</td>
				    <td>'.$item['address'].'</td>
				    <td>'.$item['email'].'</td>
				    <td>
              <a href="index.php?action=updateuser&id='.$item['id'].'" title="edit" class="btn-edit">
                <i class="fas fa-edit"></i> SỬA
              </a>

              <button type="button" class="btn-del" data-bs-toggle="modal" data-bs-target="#del_user'.$item['id'].'">
                <i class="fas fa-trash"></i> XÓA
              </button>

              <!-- Modal -->
              <div class="modal fade" id="del_user'.$item['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-4" id="exampleModalLabel">Xóa tài khoản</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Bạn có muốn xóa "'.htmlspecialchars($item['username']).'"? 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                      
                      <a href="index.php?action=del_user&id='.$item['id'].'" title="delete" class="btn btn-warning">
                              <i class="fas fa-trash"></i> XÓA
                            </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            </td>
				 </tr>';
  		}
  	}
  ?>
</table>