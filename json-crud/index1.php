<?php
require_once("db.php");
$sql = mysqli_query($conn,"SELECT * FROM users ORDER BY userId DESC");
if(mysqli_num_rows($sql)>0){
?>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body style="background-color: white;font-family: sans-serif;">
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">
   JSON CRUD</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class="clr1 active"><a href="index.php">Home</a></li>
    <li class="nav-item"><a href="index1.php">Employee Detail</a></li>
   </ul>
  </div>
 </div>
</nav>
<div class="container " style="margin-top:100px;">
 <div class="jumbotron">
  <h3>Welcome to Employee </h3>      
  <p>Create, Read, Update and Delete Data from Database</p>      
 </div>
</div>
<div class="container ">
 <div class="jumbotron " style ="margin-top:px;">
<form name="" method="post">
 <div style="text-align:center">
  <a class="btn btn-primary " href="add_user.php"><i class="icon-plus"></i> Add new Employee</a>
  </div>
  <br>
  <br><br>
<table class="table table-striped table-bordered table-hover">
<tr>
<td >Employee Name</td>
<td>Designation</td>
<td >Mobile Number</td>
<td >Salary</td>
<td >Department</td>
<td >Department Manager</td>
<td > hiredate</td>
<td>Actions</td>
</tr>
<?php
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
<td><?php echo $row["employeename"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["mobilenumber"]; ?></td>
<td><?php echo $row["salary"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["departmanager"]; ?></td>
<td><?php echo $row["hiredate"]; ?></td>
<td>
<a class="btn btn-xs btn-primary"  href="edit_user.php?userId=<?php echo $row["userId"]; ?>">Edit</a>
<a class="btn btn-xs btn-danger" href="delete_user.php?userId=<?php echo $row["userId"]; ?>">Delete</a>
</td>
</tr>
<?php
}
}
?>
</table><br><br><br>
</div>
</form>
</div>
</body></html>
</div>
</nav>
</br></br></br></br>
</div>
</div>
</body>
</html>
