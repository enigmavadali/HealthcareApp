<?php include('header.php');  ?>
			<div role='main' class='main'>

				<section class='page-header'>
					<div class='container'>
						<div class='row'>
							
						</div>
						<div class='row'>
							<div class='col-md-12'>
								<h1>Prescribed Medicines</h1>
							</div>
						</div>
					</div>
				</section>

				<div class='container'>

					<div class='row'>
						<div class='col-md-12'>

							<div class='featured-boxes'>
								<div class='row'>
									<div class='col-sm-6'>
										<div class='featured-box featured-box-primary align-left mt-xlg'>
											<div class='box-content'>
												<h4 class='heading-primary text-uppercase mb-md'></h4>
												<?php
												$conn = mysqli_connect('localhost', 'root' , '', 'healthbuddy');
												if(!$conn)
												  die("error!");
												$sql = "select * from pres ";
												$result = mysqli_query($conn,$sql);
												if(mysqli_num_rows($result)>0)
												{$count = 0;
												  while($row=mysqli_fetch_array($result))
												  { 
												  	echo " 
												<form action='index".$count.".html' id='frmSignIn'>
													<div class='row'>
														<div class='form-group align-center' >
															<div class='col-md-10'>
																<label><b>".$row['docname']."</b></label>
																<label><b>".$row['pname']."</b></label>
																<label><b>".$row['date']."</b></label>
																<label><b>".$row['medicine']."</b></label>
																<input type='submit'value='Get Medicines' class='form-control input-lg align-center' name='l_uname'>
															</div>
														</div>
													</div>
													
													</div>
												</form>";
												$count++;
												} } ?>
											</div>
										</div>
									</div>
									

							</div>
						</div>
					</div>

				</div>

			</div>

			
<?php include('footer.php');  ?>