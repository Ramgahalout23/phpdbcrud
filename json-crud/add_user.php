<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO users (employeename, designation, mobilenumber, salary, department ,departmanager ,hiredate) VALUES ('" . $_POST["employeename"] . "','" . $_POST["designation"] . "','" . $_POST["mobilenumber"] . "','" . $_POST["salary"] . "','" . $_POST["depart"]  . "','" . $_POST["departmanager"]. "','" . $_POST["joindate"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		header('Location:index1.php');
		//~ $message = "New Employee Details are Added Successfully";
	}
}
?>
<html>
<html lang="en"> 
<head> 
<title>Form Employee</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
<style>
input{ margin-bottom:30px;
}
</style>
</head> 
<body> 
<?php
include ("Header.php");
?>
	<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
	<div class="container">  
	<div class="container" style="color:green"> 
	<h1 class="text-center" style="margin-top:100px;">Employee Details</h1> 
	</div> 

<div class="container"  style="width:50%; height:94%; border:1px solid gray;padding:20px;"> 
	<form name="frmUser" method="post" action=""> 
		<div class="form-group"> 
			<label for="id1">Name</label> 
			<input class="form-control" type="text" name="employeename" placeholder="Enter Name"> 
		</div> 
		<div class="form-group"> 
			<label for="id2">Designation</label> 
			<input class="form-control" type="text" name="designation" id="id2" placeholder=" Enter  designation"> 
		</div> 
		
		<div class="form-group"> 
			<label for="id2">mobile no</label> 
			<input class="form-control" type="text" name="mobilenumber" id="id2" placeholder="Enter  mobileno"> 
		</div>
		<div class="form-group"> 
			<label for="id2">Salary</label> 
			<input class="form-control" type="text" name="salary" id="id2" placeholder="Enter SAlary"> 
		</div>
		<div class="form-group"> 
			<label for="id2">department</label> 
			<input class="form-control" type="text" name="depart" id="id2" placeholder="Enter Depart"> 
		</div>
		<div class="form-group"> 
			<label for="id2">department Manager</label> 
			<input class="form-control" type="text" name="departmanager" id="id2" placeholder="Enter Departmet Mgnr"> 
		</div>
		<div class="form-group"> 
			<label for="id2">hiredate</label> 
			<input class="form-control" type="text" name="joindate" id="id2" placeholder="Enter hiredate"> 
		</div>
			 <div style="text-align:center">
			<button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button> 
		</div> 
		</div>
	</form> 
</body></html>
