

<?php 
$servername = "localhost";
$username = "posakya";
$password = "edyhupyry";
$dbname = "roshanp_a";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_table = "SELECT distinct(table_no) FROM cart";
$query_table = mysqli_query($conn,$sql_table);

 
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Admin Panel! <small>Accountant</small>
				</h1>
			</div>
<?php while ($data_table =mysqli_fetch_array($query_table)) {?>
	


<?php if ($data_table['table_no']==1) { ?>



		<h2>Table 1</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>
				<a href="panel_process.php?table_no=1" class="btn btn-danger pull-right">Clear</a>	
				<?php 
						//for table 1
						$sql_table_1= "SELECT * FROM cart where table_no =1";
						$query_table_1=mysqli_query($conn,$sql_table_1);
						
					 ?>

						<?php while ($data_table_1 = mysqli_fetch_assoc($query_table_1)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_1['id']; ?>
								</td>
								<td>
									<?php echo $data_table_1['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_1['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_1['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_1['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 1 ?>


<?php if ($data_table['table_no']==2) { ?>	



		<h2>Table 2</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>
				<a href="panel_process.php?table_no=2" class="btn btn-danger pull-right">Clear</a>	
				<?php 
					

						$sql_table_2= "SELECT * FROM cart where table_no =2";
						$query_table_2=mysqli_query($conn,$sql_table_2);
						
					 ?>

						<?php while ($data_table_2 = mysqli_fetch_assoc($query_table_2)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_2['id']; ?>
								</td>
								<td>
									<?php echo $data_table_2['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_2['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_2['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_2['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 2 ?>

<?php if ($data_table['table_no']==3) { ?>	



		<h2>Table 3</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>
					<a href="panel_process.php?table_no=3" class="btn btn-danger pull-right">Clear</a>
				<?php 
						//for table 1
						$sql_table_3= "SELECT * FROM cart where table_no =3";
						$query_table_3=mysqli_query($conn,$sql_table_3);
						
					 ?>

						<?php while ($data_table_3 = mysqli_fetch_assoc($query_table_3)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_3['id']; ?>
								</td>
								<td>
									<?php echo $data_table_3['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_3['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_3['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_3['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 3 ?>
<?php if ($data_table['table_no']==4) { ?>	



		<h2>Table 4</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>
				<a href="panel_process.php?table_no=4" class="btn btn-danger pull-right">Clear</a>	
				<?php 
						//for table 4
						$sql_table_4= "SELECT * FROM cart where table_no =4";
						$query_table_4=mysqli_query($conn,$sql_table_4);
						
					 ?>

						<?php while ($data_table_4 = mysqli_fetch_assoc($query_table_4)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_4['id']; ?>
								</td>
								<td>
									<?php echo $data_table_4['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_4['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_4['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_4['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 4 ?>
<?php if ($data_table['table_no']==5) { ?>	



		<h2>Table 5</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>	
				<a href="panel_process.php?table_no=5" class="btn btn-danger pull-right">Clear</a>
				<?php 
						//for table 5
						$sql_table_5= "SELECT * FROM cart where table_no =5";
						$query_table_5=mysqli_query($conn,$sql_table_5);
						
					 ?>

						<?php while ($data_table_5 = mysqli_fetch_assoc($query_table_5)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_5['id']; ?>
								</td>
								<td>
									<?php echo $data_table_5['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_5['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_5['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_5['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 5 ?>

<?php if ($data_table['table_no']==6) { ?>	



		<h2>Table 6</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>	
				<a href="panel_process.php?table_no=6" class="btn btn-danger pull-right">Clear</a>
				<?php 
						//for table 6
						$sql_table_6= "SELECT * FROM cart where table_no =6";
						$query_table_6=mysqli_query($conn,$sql_table_6);
						
					 ?>

						<?php while ($data_table_6 = mysqli_fetch_assoc($query_table_6)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_6['id']; ?>
								</td>
								<td>
									<?php echo $data_table_6['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_6['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_6['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_6['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 6 ?>
<?php if ($data_table['table_no']==7) { ?>	



		<h2>Table 7</h2>

			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Item Name
						</th>
						<th>
							Quantity
						</th>
						<th>
							Price
						</th>
						<th>
							Sub Total
						</th>
					</tr>
				</thead>
				<tbody>	
				<a href="panel_process.php?table_no=7" class="btn btn-danger pull-right">Clear</a>
				<?php 
						//for table 5
						$sql_table_7= "SELECT * FROM cart where table_no =7";
						$query_table_7=mysqli_query($conn,$sql_table_7);
						
					 ?>

						<?php while ($data_table_7 = mysqli_fetch_assoc($query_table_7)) { ?>


							<tr class="active">
								 
								<td>
									<?php echo $data_table_7['id']; ?>
								</td>
								<td>
									<?php echo $data_table_7['Iname']; ?>
								</td>
								<td>
									<?php echo $data_table_7['quantity']; ?>
								</td>
								<td>
									<?php echo $data_table_7['Price']; ?>
								</td>
								<td>
									<?php echo $data_table_7['sub_total']; ?>
								</td>
							</tr>			
					 		
					<?php } ?>
			</tbody>
			</table>
<?php }//end of if statement  for table 7 ?>




<?php }//end of the outer while loop ?>
		</div>
	</div>
</div>
	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/scripts.js"></script>
  </body>
</html>