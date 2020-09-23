<?php

include_once("./includes/header.php")

?>

	<div class="page-title-area bg-9">
			<div class="container">
				<div class="page-title-content bg-dark">
					<ul class="py-4">
						<li>
							<a href="index.php" style="font-size: 18px;">
								Home 
							</a>
						</li>
						
						<li class="active font-weight-bold" style="font-size: 18px;">Log In</li>
					</ul>
				</div>
			</div>
        </div>
        	<section class="user-area-style log-in-area ">
			<div class="container">
				<div class="log-in-content">
					<div class="section-title">
						<h2>Log In</h2>
					</div>

					<div class="contact-form-action">
						<form method="post">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label>Email or Phone</label>
										<input class="form-control" type="text" name="name">
									</div>
								</div>
	
								<div class="col-12">
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" name="password">
									</div>
								</div>
	
								<div class="col-12">
									<div class="login-action">
										<span class="log-rem">
											<input id="remember" type="checkbox">
											<label for="remember">Remember me!</label>
										</span>
										<span class="forgot-login">
											<a href="">Forgot your password?</a>
										</span>
									</div>
								</div>
	
								<div class="col-12">
									<button class="default-btn" type="submit">
										Log In Now
									</button>
								</div>

								<div class="col-12">
									<p>Don't have an account? <a href=" ">Registration Now!</a></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>