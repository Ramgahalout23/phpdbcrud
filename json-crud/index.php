<?php
$getfile = file_get_contents('people.json');
$jsonfile = json_decode($getfile);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="ilmu-detil.blogspot.com">
 <title>Tutorial CRUD  JSON DATA</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
<?php
include ("Header.php");
?>
</br></br></br></br>
<div class="container">
 <div class="jumbotron">
  <h3>Welcome to Employee </h3>      
  <p>Create, Read, Update and Delete Data from json file</p>      
 </div>
</div>
<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="insert.php"><i class="icon-plus"></i> Insert Data</a>

  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
   <table class="table table-striped table-bordered table-hover">
    <tr>
     <th>No.</th>
     <th>Project</th>
     <th>Description</th>
     <th>Source</th>
     <th>Action</th>
    </tr>  
    <?php $no=0;foreach ($jsonfile->records as $index => $obj): $no++;  ?>
    <tr>
     <td><?php echo $no; ?></td>
     <td><?php echo $obj->project; ?></td>
     <td><?php echo $obj->description; ?></td>
     <td><a href="<?php $_SERVER['HTTP_HOST'];?>/<?php echo $obj->source; ?>" target="_blank"><?php echo $obj->source; ?></a></td>
     <td>
      <a class="btn btn-xs btn-primary" href="update.php?id=<?php echo $index; ?>">Edit</a>
      <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $index; ?>">Delete</a>
     </td>
    </tr>
    <?php endforeach; ?>
   </table>
  </div> 
 </div>
</div>
</body>
</html>
