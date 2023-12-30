
<h1><b>Danh sách các liên hệ</b></h1>
<table class="table table-bordered text-center">
  <tr>
    <th>TÊN KHÁCH HÀNG</th>
    <th>EMAIL</th>
    <th>ĐIỆN THOẠI</th>
    <th>NỘI DUNG</th>
    <th>TRẠNG THÁI</th>
    <th>QUẢN LÝ</th>
  </tr>
  <?php 
  	if(isset($lh) && (count($lh) > 0)){
  		foreach ($lh as $i) {
  ?>
        <tr>
		    <td><?=htmlspecialchars($i['name']);?></td>
		    <td><?=htmlspecialchars($i['email']);?></td>
		    <td><?=htmlspecialchars($i['phone']);?></td>
		    <td><?=htmlspecialchars($i['content']);?></td>
		    <td><?=htmlspecialchars($i['status']);?></td>
		    <td>
              <button type="button" class="btn-del" data-bs-toggle="modal" data-bs-target="#xoalh<?=htmlspecialchars($i['id']);?>">
                <i class="fas fa-trash"></i> XÓA
              </button>

              <!-- Modal -->
              <div class="modal fade" id="xoalh<?=htmlspecialchars($i['id']);?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-4" id="exampleModalLabel">Xóa liên hệ</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Bạn có muốn xóa liên hệ này? 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                      
                      <a href="index.php?action=xoalh&id=<?=htmlspecialchars($i['id']);?>" title="delete" class="btn btn-warning">
                              <i class="fas fa-trash"></i> XÓA
                            </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->

            </td>
		</tr>
	<?php } } ?>
</table>