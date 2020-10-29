<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
     #spAdd{
      float: right;
     }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>


  <body>

  <div class="container">
    <h2>Employee List</h2>
    <span id="spAdd"><a href="add.php" class="btn btn-success">Add Employee</a></span>
    <table class="table">
     <thead>
      <tr>
       <th>#</th>
       <th>Name</th>
       <th>Description</th>
       <th>Salary</th>
       <th>Gender</th>
       <th>Birthday</th>
       <th>Create_at</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
      <?php
       require('includes/config.php');
       include('includes/function.php');

       //khai bao truy van
       $emp = getAllemployee();
       foreach($emp as $row){
       ?>

       <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><a href="view.php?id = <?php echo $row[0];?>"><i class="fas fa-eye">View</i></a></td>
        <td><a href="edit.php?id=<?php echo $row[0];?>"><i class="fas fa-edit"></i>Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row[0];?>"><i class="fas fa-trash-alt">Delete</i></a></td>
     


       </tr>

       <?php
        }
       ?>
      


      
     </tbody>
    </table>
  </div>

   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>