<?php include('header.php');  ?>
			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Medical Shop Login</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<div class="featured-boxes">
								<div class="row">
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary align-left mt-xlg">
											<div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md"></h4>
												<form action="loginm.php" id="frmSignIn" method="post">
												
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>E-mail Address</b></label>
																<input type="text" value="" class="form-control input-lg" name="l_uname">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Password</b></label>
																<input type="password" value="" class="form-control input-lg" pass="l_pass">
															</div>
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-6">
															<span class="remember-box checkbox">
																<label for="rememberme">
																	<input type="checkbox" id="rememberme" name="rememberme">Remember Me
																</label>
															</span>
														</div>
														<div class="col-md-6">
															<input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									

							</div>
						</div>
					</div>

				</div>

			</div>

			<?php include('footer.php');  ?>