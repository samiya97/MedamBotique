<html>
<head>

<?PHP 
session_start();

if(!empty($_SESSION['Cur_User']))
{
		header('Location: userschat.php');
}

include('config.php');

	
if(isset($_POST['submit']))
{
	$Username = $_POST['uname'];
	$UPASS = $_POST['psw'];
if($Username == "admin" && $UPASS == "admin")
    {
      header('Location: admin.php');
    }
	$UserPassEncrypt = md5(md5(md5(md5(2*3*4*4%2/5*76/255*75 . $UPASS))));
      $sql = "SELECT * FROM tbl_user WHERE user_name = '$Username' and pass = '$UserPassEncrypt'";
	
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $updatequery = "UPDATE tbl_user SET active_unactive='1' WHERE user_name = '$Username'";
	   mysqli_query($conn, $updatequery);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       /*echo "Chal gaya hai";*/
	   $_SESSION['Cur_User'] = $Username;
	

	   header('Location:userschat.php');
      }else {
        $ErrMsg = '<span class="alert alert-danger">Your Login Name or Password is invalid !</span>';
		
      }
   }



?>


<script src="js/bootstrap.min.js" ></script><script src="js/jquery.js" ></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-bottom: 20px;
    margin-top: -10px;
}

/* The Modal (background) */
.modal { /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: rgba(254, 254, 254, 0.76);
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body style="background:url(images/iStock_Chat-Keyboard_Medium.jpg) 0 0 no-repeat; background-size:cover;">

<!--<h2>Modal Login Form</h2>

<button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
    <div class="imgcontainer">
      <!--<span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
      <img src="images/live-chat-website-300x234.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submit">Login</button><!--
      <input type="checkbox" checked="checked"> Remember me-->
    </div>
     <div style="text-align:center; margin-bottom:20px;"> <?php if(!empty($ErrMsg)) echo $ErrMsg; ?></div>
   

    <div class="container">
      <!--<button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
      <span style=" float:left; padding-bottom: 20px; margin-top: -10px;"><a href="forget.php"> Forgot Password? </a></span>
      <span class="psw">Not a Member? <a href="register.php"> Register </a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
</script>

</body>
</html>
