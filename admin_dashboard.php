<!DOCTYPE html>
<html>
<head>
	<title>Teachers Dashboard</title>
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
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
	</style>
	<?php
		session_start();
		$name = "";
		include('config/db_connect.php');
	?>
</head>
<body style="background-color:teal">
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
						<input type="submit" name="edit_course" value="Edit course">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_course" value="Add New course">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_course" value="Delete course">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_student" value="add new student">
					</td>
				</tr>
				
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		
		
		<?php
			if(isset($_POST['edit_course']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Course:</b>&nbsp;&nbsp; <input type="text" name="course">
				<input type="submit" name="search_by_course_for_edit" value="Search">
				</form><br><br>
				<h4><b><u>course's details</u></b></h4><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_course_for_edit']))
			{
				$query = "select * from course where course = $_POST[course]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_course.php" method="post">
						<table>
						<tr>
							<td>
								<b>Question1:</b>
							</td> 
							<td>
								<input type="text" name="Question1" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question2:</b>
							</td> 
							<td>
								<input type="text" name="Question2" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question3:</b>
							</td> 
							<td>
								<input type="text" name="Question3" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question4:</b>
							</td> 
							<td>
								<input type="text" name="Question4" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question5:</b>
							</td> 
							<td>
								<input type="text" name="Question5" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question6:</b>
							</td> 
							<td>
								<input type="text" name="Question6" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question7:</b>
							</td> 
							<td>
								<input type="text" name="Question7" value="<?php echo $row['course']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Question8:</b>
							</td>
							<td>
							<input type="text" name="Question7" value="<?php echo $row['course']?>">
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_course']))
			{
				?>
				<center>
				<form action="delete_course.php" method="post">
				&nbsp;&nbsp;<b>Enter Course:</b>&nbsp;&nbsp; <input type="text" name="course">
				<input type="submit" name="search_by_course_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_course_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_course.php" method="post">
						<table>
						<tr>
							<td>
								<b>course:</b>
							</td> 
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>

<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			
		</div>
	</div>
</body>
</html>