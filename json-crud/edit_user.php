<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE users set employeename='" . $_POST["employeename"] . "', designation='" . $_POST["designation"] . "', mobilenumber='" . $_POST["mobilenumber"] . "', department='" . $_POST["department"] . "',departmanager='" . $_POST["departmentmana"] . "',salary='" . $_POST["salary"] . "' WHERE userId='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	//~ $message = "Employee Details Successfully Updated.";
	header('Location:index1.php');
}
$select_query = "SELECT * FROM users WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Employee Details</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
 <link rel="stylesheet" href="assets/css/ilmudetil.css">

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head> 
<body> 
<?php
include ("Header.php");
?>
	<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update User</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <div class="container">  
	<div class="container" style="color:green"> 
	<h1 class="text-center" style="margin-top:25px;">Employee Update Details</h1> 
	</div> 
      <div class="container"  style="width:49%; height:91%; border:1px solid gray;padding:20px;"> 
      <form method="post">
        <div class="form-group">
	  <label for="name">User Id</label>
          <input value="<?php echo $row['userId']; ?>" type="text" name="userId"  class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?php echo $row['employeename']; ?>" type="text" name="employeename" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Designation</label>
          <input value="<?php echo $row['designation']; ?>" type="text" name="designation" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Mobile no</label>
          <input value="<?php echo $row['mobilenumber']; ?>" type="text" name="mobilenumber" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Salary</label>
          <input value="<?php echo $row['salary']; ?>" type="text" name="salary" id="name" class="form-control">
        </div>
  
        <div class="form-group">
          <label for="name">Department</label>
          <input value="<?php echo $row['department']; ?>" type="text" name="department" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Department manager</label>
          <input value="<?php echo $row['departmanager']; ?>" type="text" name="departmentmana" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">joining Date</label>
          <input value="<?php echo $row['hiredate']; ?>" type="text" name="joindate" id="name" class="form-control">
        </div>
        <div class="form-group " >
			 <div style="text-align:center">
          <button type="submit" class="btn btn-primary">Update person</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</body></html>
