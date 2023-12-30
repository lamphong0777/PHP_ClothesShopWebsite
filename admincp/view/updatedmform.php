<!-- <?php 
  echo var_dump($kqone);
 ?> -->
<form method="POST" action="index.php?action=updatedmform">
  <h1 class="text-start">Cập nhật danh mục</h1>
  <hr>
  <div class="row">
    <div class="col-md-3 text-start">
      <h4>TÊN DANH MỤC</h4><br>
      <input type="text" name="name_cate" value="<?=$kqone[0]['name_category']?>">
    </div>
    <div class="col-md-3 text-center">
      <h4>THỨ TỰ</h4><br>
      <input type="text" name="index_cate" value="<?=$kqone[0]['index_category']?>">
    </div>
  </div>
  <input type="hidden" name="id_cate" value="<?=$kqone[0]['id_category']?>">
  <br>
  <div class="row">
    <div class="col-2 offset-0"><button type="submit" name="capnhat" class="btn-edit"><i class="fa fa-pen"></i> SỬA</button></div>
  </div>
  <hr>
</form>
