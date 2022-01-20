<?php
include "../shared./config.php";
session_start();
if(isset($_POST['send'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];

$select="SELECT * FROM `admin` where name='$name' and pass='$pass'";
$ad=mysqli_query($connect,$select);
$num= mysqli_num_rows($ad);
$row= mysqli_fetch_assoc($ad);

if($num > 0){
  $_SESSION['admin']=$name;
  
   header("location:/HR/admin/page.php");



echo $_SESSION['admin'];
}


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/HR/css/all.min.css">
    <link rel="stylesheet" href="/HR/css/main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TechnoCompany <i class="fab fa-affiliatetheme"></i></a>
 
</nav>
 
<div class="container col-md-6">
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="send" class="btn btn-primary">login</button>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>   
</body>
</html>