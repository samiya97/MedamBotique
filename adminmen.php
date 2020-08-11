<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title><link rel="shortcut icon" href="logo/12.png">
</head>

<?php include('config.php'); 
session_start();

if(empty( $_SESSION['admin'])){
   header('Location:login.php');
}

?>

<body>

<div class="page-header" style="width:100%; border:2px solid #000 ; height:100px; background-color:#0346FF;"> 
<p style="color:#FFF; font-size:48px; padding-top:10px; padding-left:5px;"> Admin Panel <span style="color:#FFF; font-size:15px;"> Add Men Dress</span> </p> </div>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="Signup"
  enctype="multipart/form-data"  >
  <div class="form-group">
<label for="exampleInputEmail1">Dress Name </label>
    <input name="dreesname"  class="form-control" placeholder="Dress name" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"  style="color:#000;" id="dreesname" required>
  </div>
<div class="form-group">
<label for="exampleInputPassword1">Price</label>
    <input type="text" name="price" class="form-control" placeholder="Price"  style="color:#000;" required>
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Product Details</label>
    <input type="text" name="details" id="details" class="form-control" placeholder="Product Details"  style="color:#000;"required>
  </div>
 <div class="form-group">
 <label for="exampleInputPassword1">Size </label> <br>
   
    
    <label class="checkbox-inline"><input name="q1[]" type="checkbox"  value="Small">Small </label>
    <label  class="checkbox-inline">
<input name="q1[]" type="checkbox" value="Medium">Medium </label>
<label  class="checkbox-inline">
<input name="q1[]" type="checkbox" value="Large" >Large </label>
<label  class="checkbox-inline"> <input name="q1[]" type="checkbox" value="Extra Large">Extra Large </label> 
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Images</label>
  <input name="files[]" class="file" type="file" multiple="multiple" />
     </div>
      <div class="form-group">
  <input class="btn btn-primary" type="submit" name="submit" />
 </form>
 </div>

  <?php 
  //$total = count($_FILES['files']['name']);
  if(isset($_POST['submit'])){

 $GetPreviousID = "Select * from women ORDER by ID DESC LIMIT 1";
  $GetIDValue = mysqli_query($conn,$GetPreviousID);
    $rowID = mysqli_fetch_assoc($GetIDValue);
    $LastID = $rowID["id"];
    if($LastID == ""){
      $LastID=1;
    }else {
    $LastID++;}
    if (!file_exists('img/men/'.$LastID)) {
    mkdir('img/men/'.$LastID,0777,true);}

	  $dreesname = $_POST['dreesname'];
	$price = $_POST['price'];
	$details = $_POST['details'];
	
$q1=implode(',', $_POST['q1']);
	$Ref1 = " ";
	
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key];
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);
	$AA = 'img/men/'.$LastID.'/'.$LastID.' ('.$key.').'.$ext;
  if($key == 0){
    $Headerpic = $AA;
  }
	if($Ref1 == " ")
	{
		$Ref1 = $AA.",";
	}
	else {
	$Ref1 = $Ref1 . "," . $AA;
	}
    if(move_uploaded_file($file_tmp, $AA)) {

	
	}
	else {
	echo "Error";
	}
	/*
      //Handle other code here
       */

    }
    $insertQry = "INSERT INTO men (dress_name,headerpic, pic_ref,price,product_detailes,size)
VALUES('$dreesname','$Headerpic', '$Ref1', '$price', '$details','$q1')";
if(mysqli_query($conn,$insertQry)){

//Normalization for pic_ref
    $GetPreviousID1 = "Select id,pic_ref from men ORDER by ID DESC LIMIT 1";
  $GetIDValue1 = mysqli_query($conn,$GetPreviousID1);
  $row1 = mysqli_fetch_row($GetIDValue1);
   $productID = $row1[0];
   $pic_ref = $row1[1];
   $words = explode(",", $pic_ref);

for ($i=0; $i<count($words); $i++){
  
  $ref = $words[$i]; 
  if($ref != ""){
  $sql1 = "INSERT into table_menpic_ref (id,pic_ref)
  Values ('$productID','$ref')";
  if(!mysqli_query($conn,$sql1))
  {
    echo "Error pic_ref";
  }
}
}
//Normalization For Size

$GetPreviousID2 = "Select id,size from men ORDER by ID DESC LIMIT 1";
  $GetIDValue2 = mysqli_query($conn,$GetPreviousID2);
  $row2 = mysqli_fetch_row($GetIDValue2);
   $productID1 = $row2[0];
   $pic_ref1 = $row2[1];
   $words1 = explode(",", $pic_ref1);

for ($i=0; $i<count($words1); $i++){
  
  $ref1 = $words1[$i]; 
  if($ref1 != ""){
  $sql2 = "INSERT into table_mensize (id,size)
  Values ('$productID1','$ref1')";
 if(!mysqli_query($conn,$sql2))
 {
   echo "Error size";
 }
}
}
}
else {
echo "error"; 
} } ?>
</body>
</html>