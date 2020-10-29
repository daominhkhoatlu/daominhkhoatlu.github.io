<?php
  //bước 1:kết nối csdl
  $conn = mysqli_connect('localhost','root','','TH4');
  if(!$conn){
    die('Không kết nối đc');
  }
?>