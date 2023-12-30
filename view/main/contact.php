<div class="col">
	<h3 class="text-center">Liên hệ với chúng tôi</h3>
	<?php
		if(isset($success) && $success==1) echo '<h4 class"text-center"><font color="green">Đã gửi liên hệ thành công!</font></h4>';
	?>
	<hr>
	<div class="row d-flex">
		<div class="col-md-4 contact-left p-2">
			<h5 class="text-center">Địa chỉ liên hệ</h5>
			<hr>
			<p><i class="fas fa-home me-3"></i> 123 Đường 3/2, Phường Hưng lợi, Quận Ninh Kiều, TP.Cần Thơ</p>
            <p>
                <i class="fas fa-envelope me-3"></i>
                weiyiclothes@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> 1900 2020</p>
            <p><i class="fas fa-print me-3"></i> + 84 387 099 099</p>
		</div>
		<div class="col-md-6 offset-1 contact-right">
			<h5 class="text-center">Hoặc gởi cho chúng tôi</h5>
			<form action="index.php?quanly=guilienhe" method="POST" class="form-contact" id="form-contact">
				<label for="ct_name">Họ tên:</label><br>
				<input type="text" name="ct_name" placeholder="Nhập họ tên...."><br>

				<label for="ct_email">Email:</label><br>
				<input type="text" name="ct_email" placeholder="Nhập Email...."><br>

				<label for="ct_phone">Điện thoại:</label><br>
				<input type="text" name="ct_phone" placeholder="Nhập số điện thoại...."><br>

				<label for="ct_content">Nội dung liên hệ:</label><br>
				<textarea name="ct_content" placeholder="Nhập nội dung...."></textarea>

				<input type="submit" class="text-center mt-3" value="Gửi" name="gui">
			</form>
		</div>

		<div>
			<img src="./images/banner_contact.jpg" width="100%" alt="">
		</div>
	</div>
</div>