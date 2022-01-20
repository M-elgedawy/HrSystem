<?php
include "../shared./header.php";

include "../shared./config.php";
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location:/HR/index.php");
}

$id=$_GET['accept'];
$select="SELECT * FROM `apply`WHERE id=$id";
$ss=  mysqli_query($connect,$select);
if (is_array($ss) || is_object($ss)){
foreach($ss as $data){
  $id= $data['id'];
  $name= $data['name'];
  $adress= $data['adress'];
  $phone= $data['phone'];
  $email= $data['email'];
  $img= $data['img'];
  $insert="INSERT INTO `dat`VALUES ($id,'$name','$adress','$phone','$email','$img')";
  mysqli_query($connect,$insert);
}
}
$select="SELECT * FROM `dat` ";
$sss=  mysqli_query($connect,$select);




?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TechnoCompany <i class="fab fa-affiliatetheme"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php if(isset($_SESSION['admin'])) :?> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="/HR/admin/apply.php">applicantjob</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HR/admin/emplist.php">employeelist</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
   
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="logout">logout</button>
   
    </form>
  </div>
  </nav>
  <div class="container ">
    <div class="col-md-6 mt-5"></div>
      <table class="table table-primary">
          <thead>
          <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Adress</td>
              <td>Phone</td>
              <td>Email</td>
              <td>img</td>
              
          </tr>
        </thead>
    
         <?php foreach($sss as $data){?>
          <tr>
          <td><?php echo$data['id']?></td>
          <td><?php echo$data['name']?></td>
          <td><?php echo$data['adress']?></td>
          <td><?php echo$data['phone']?></td>
          <td><?php echo$data['email']?></td>
          <td><img width="50" src="../applicantjob./upload./<?php echo$data['img']?>"alt=""></td>
            
              
              
          </tr>
          <?php } ?>
        </table>
    </div>

  </div
  <?php endif;?>






  <?php include "../shared./scripts.php";?>