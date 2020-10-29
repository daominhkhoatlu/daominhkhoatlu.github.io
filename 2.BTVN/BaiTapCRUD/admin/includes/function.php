<?php

function getAllemployee(){
  global $conn;
  $sql = "SELECT *FROM employees";
  $result = mysqli_query($conn,$sql);
  $employee= mysqli_fetch_all($result);
  return $employee;
}
?>