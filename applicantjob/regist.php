
<?php
include "../shared./header.php";
include "../shared./nav.php";
include "../shared./config.php";


if(isset($_POST['send'])){
    $name= $_POST['name'];
    $adress= $_POST['adress'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    
    //imgcode
    $img_type=$_FILES['image']['type'];
    $img_name=$_FILES['image']['name']; 
    $img_tmp=$_FILES['image']['tmp_name'];
    $location="./upload/";
    move_uploaded_file($img_tmp,$location.$img_name);
 
     $insert= "INSERT INTO `apply` VALUES (NULL,'$name','$adress','$phone','$email','$img_name')";
     
   $i= mysqli_query($connect,$insert);
  header("location:/HR/index.php");
}
?>
<div class="container">
    <div class=" col-md-6 col-sm-12 con2">

<form method="POST"enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Adress</label>
    <input type="text"  name="adress" class="form-control" id="formGroupExampleInput2" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">phone</label>
    <input type="text" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="">
  </div>  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>

<button type="submit"  name="send"class="btn btn-primary w-100 ">Submit</button>
</form>
</div>
</div>










<?php include "../shared./scripts.php" ; ?>