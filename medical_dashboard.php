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
												<table>
													  <tr>
													    <th>Medicines</th>
													    <th>Amount</th> 
													    <th>Manufacture_date</th>
													    <th>Expiry_date</th>
													  </tr>
													  <?php
												$conn = mysqli_connect('localhost', 'root' , '', 'healthbuddy');
												if(!$conn)
												  die("error!");
												$sql = "select * from medicalshop1 ";
												$result = mysqli_query($conn,$sql);
												if(mysqli_num_rows($result)>0)
												{
												  while($row=mysqli_fetch_array($result))
												  { echo " 
													  <tr>
													    <td>".$row['medicines']."</td>
													    <td>".$row['Amount']."</td>
													    <td>".$row['Manufacture_date']."</td>
													    <td>".$row['Expiry_date']."</td>
													  </tr>
													 ";} 
													 
												 } ?>
											</div>
										</div>
									</div>
									

							</div>
						</div>
					</div>

				</div>

			</div>

			
<?php include('footer.php');  ?>