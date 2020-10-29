<?php 
     require('includes/config.php');

    if (isset($_POST['addData']) && $_POST['name'] != ""){

                                $name= $_POST['name'];
                                $description= $_POST['description'];
                                $salary= $_POST['salary'];
                                $birthday= $_POST['birthday'];
                              
                                if(isset($_POST['gender'])){
                                        $gender = $_POST['gender'];
                                    }  else {
                                        $gender = false;
                                    }
                                $sql= "INSERT INTO employees(name,description,gender,salary,birthday,created_at) VALUES ('$name','$description','$gender','$salary','$birthday',NOW())";
                                mysqli_query($conn,$sql);
                                echo "---------------------------Thêm thành công---------------------------";		
                           }                            
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
   #dausao{    
     color: red;
   }
   
   
 </style>
</head>
<body>
 <div class="container">
   <div class="tieude">
    <h2>Create Record</h2>
   </div>

   <form action="" method="POST">
   Name
   <label id="dausao">*</label>
   <br>
   <input type="text" name="name" id="txtName">
   <br>
   Description
   <br>
   <textarea id="txtDes" name="description" rows="5" cols="30"></textarea>
   <br>
   Salary
   <br>
   <input type="text" name="salary" id="txtSalary">
   <br>
   Gender
   <br>
   <input type="radio" id="radNam" name="gender">Nam
   <input type="radio" id="radNu" name="gender">Nữ
   <br>
   Birthday
   <br>
   <input type="date" id="txtBD" name="birthday">
   <br>
   <input type="submit" name="addData" class="btn btn-primary" value="Save">
   <a href="index.php" class="btn btn-default">Cancel</a></br>

   </form>
 </div>

 
</body>
</html>