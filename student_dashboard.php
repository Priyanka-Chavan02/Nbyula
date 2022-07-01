<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Adaptive Learning Platform &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<table>
				<tr>
					<td>
						<input type="submit" name="attend_quize" value="Attend Quize">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from course where course = '$_SESSION[course]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
					<tr>
						<td>
							<b>Question1</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question1']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question2:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question2']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question3:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question3']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question4:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question4']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question5:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question5']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question6:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question6']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question7:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Question7']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Question8:</b>
						</td> 
						<td>
						<input type="text" value="<?php echo $row['Question8']?>" disabled>
							
						</td>
					</tr>
				</table>
				<?php
				}	
			}
			?>

			
		</div>
	</div>
</body>
</html>