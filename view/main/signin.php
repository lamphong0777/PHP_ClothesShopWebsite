<div class="login-form-div">
	<div class="login-form">
		<h1 class="login-title">ĐĂNG NHẬP</h1>
		<form action="index.php?quanly=login" method="post">
			<label for="username" class="label-form"><i class="fa fa-user"></i></label>
			<input type="text" name="username" placeholder="Tài khoản" class="input-form">
			<br>
			<label for="password" class="label-form"><i class="fa fa-key"></i></label>
			<input type="password" name="password" placeholder="Mật khẩu" class="input-form">
			<br>
			<?php
					if(isset($text_error) && $text_error!=""){
						echo '<font color=red><i class="fas fa-exclamation-circle"></i> '.$text_error.'</font><br>';
					}
			?>
			<input type="submit" name="dangnhap" class="btn btn-success" value="LOGIN">
			<br>
			<p class="text-form">Bạn chưa có tài khoản ? <a href="index.php?quanly=dangky" title="">Đăng ký</a></p>
			<p class="text-form">Bạn quên mật khẩu? <a href="" title="">Lấy lại mật khẩu</a></p>
		</form>
	</div>
</div>
