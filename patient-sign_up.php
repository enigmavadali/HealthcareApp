<?php include('header.php');  ?>
			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Patient SignUp</h1>
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
												<form action="signupp.php" id="frmSignIn" method="post" onsubmit="return fun()">
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Enter Patient Name</b></label>
																<input type="text" value="" class="form-control input-lg" name="s_name">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Enter Age</b></label>
																<input type="number" minvalue="0" maxvalue="110" value="" class="form-control input-lg" name="s_age">
															</div>
														</div>
													</div>
													
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Enter E-mail Address</b></label>
																<input type="email" value="" class="form-control input-lg" id="s_email" name="s_email">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Enter Password</b></label>
																<input type="password" value="" class="form-control input-lg" id="s_pass" name="s_pass">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Re-Enter Password</b></label>
																<input type="password" value="" class="form-control input-lg" id="s_rpass">
															</div>
														</div>
													</div>

													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label><b>Enter Mobile Number</b></label>
																<input type="text" value="" class="form-control input-lg" id="s_pno" name="s_pno">
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
															<input type="submit" value="SignUp" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
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