
    <h2>Register</h2>
    <div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<form action="<?php echo e(URL::to('/register')); ?>" method="POST">
							<?php echo e(csrf_field()); ?>

							<input type="text" name="admin_name" placeholder="Họ và tên"/>
							<input type="email" name="admin_email" placeholder="Địa chỉ email"/>
							<input type="password" name="admin_password" placeholder="Mật khẩu"/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
 
