<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into students values('$_POST[course]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "teacher_dashboard.php";
</script>
