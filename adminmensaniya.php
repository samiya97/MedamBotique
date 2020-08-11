<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title><link rel="shortcut icon" href="logo/12.png">

    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jquery-1.11.3.min.js"></script>

    <style type="text/css">
        h1{
      text-align: center;
    }
        .adminmen {
            margin: 30px;
        }
        /* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */

        .form-horizontal .control-label {
            padding-top: 7px;
        }
    </style>

</head>
<?php include('config.php'); ?>

<body>

    <div class="adminmen ">
        <h1>Admin Men</h1> <hr>
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="Signup" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-xs-3">Dress Name</label>
                <div class="col-xs-6"><input class="form-control" name="dreesname" type="text" style="color:#000;" id="dreesname" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Price</label>
                <div class="col-xs-6"><input class="form-control" type="text" name="price" style="color:#000;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Product Details</label>
                <div class="col-xs-6"><input class="form-control" type="text" name="details" id="details" style="color:#000;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Color</label>
                <div class="col-xs-6"><input class="form-control" type="text" name="color" id="color" style="color:#000;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Size</label>
                <div class=" col-xs-6">
                    <div class="checkbox">
                        <label><input name="q1[]" type="checkbox" value="Small">Small </label>
                        <label><input name="q1[]" type="checkbox" value="Medium">Medium </label>
                        <label><input name="q1[]" type="checkbox" value="Large">Large </label>
                        <label><input name="q1[]" type="checkbox" value="Extra Large">Extra Large</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3">Image </label>
                <label class="btn btn-primary col-xs-2">
                Browse&hellip; <input type="file" style="display: none;" multiple="multiple">
            </label>
            </div>

            <div class="form-group"> <!-- Submit Button -->
            <div class="col-sm-10 col-xs-offset-8">                     
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        </form>
    </div>
</body>

</html>

<?php 
  //$total = count($_FILES['files']['name']);
  if(isset($_POST['submit'])){
	  $dreesname = $_POST['dreesname'];
	$price = $_POST['price'];
	$details = $_POST['details'];
	$color = $_POST['color'];
$q1=implode(',', $_POST['q1']);
	$Ref1 = " ";
	
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key];
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);
	$AA = 'img/men/'.$dreesname.$key.'.'.$ext;
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
    $insertQry = "INSERT INTO men (dress_name, pic_ref,price,product_detailes,color,size)
VALUES('$dreesname', '$Ref1', '$price', '$details','$color','$q1')";
if(mysqli_query($conn,$insertQry)){

}
else {
echo "error"; 
} } ?>