
<?php include "db.php"; 
$sql = "select * from tasks" ;
$rows = $db -> query ($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>CRUD App</title>
</head>
<body>

<div class = "container">
        <div class="row">
          <div class ="col-md-6 ">
          <center><h1>Todo List</h1> </center>
          <table class="table">

          <div class="row" style = "margin-top: 70px;">
          <div class ="col-md-3">
            <button type="button" class= "btn btn-success">Add Task</button>
            
          </div>
          <div class ="col-md-3 ">
            
            <button type="button" class= "btn btn-default ">Print</button>
          </div>
          <div class="row" style = "margin-top: 30px;">
          <hr>
          
         
          
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Task</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Sagar</td>
      
    </tr>
          </div>
        </div>
      </div>
    
</body>
</html>