
<?php 

include('config.php');
session_start();
unset($_SESSION['admin']);


	
if(isset($_POST['submit']))
{
	$Username = $_POST['uname'];
	$UPASS = $_POST['psw'];
if($Username == "admin" && $UPASS == "admin")
    {
	  $_SESSION['admin'] = $Username;
      header('Location: admin.php');
    }
    
      $sql = "SELECT * FROM users WHERE email = '$Username' and password = '$UPASS'";
	
      $result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       /*echo "Chal gaya hai";*/
	   $_SESSION['Cur_User'] = $Username;
	

	   header('Location:index.php');
      }else {
        $ErrMsg = '<span class="alert alert-danger">Your Login Name or Password is invalid !</span>';
		
      }
   }

?>

<meta charset="utf-8">
     
        <title>Madam Boutique</title><link rel="shortcut icon" href="logo/12.png">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
<style>
body {
    overflow:hidden;
}
</style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="logo/12.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content" >
        	
            <div class="inner-bg" >
                <div class="container" style="margin-top:-50px;">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Login Form </strong></h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
           <div style="text-align:center; margin-bottom:40px;"> <?php if(!empty($ErrMsg)) echo $ErrMsg; ?></div>
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
                                        
                                        <input type="text" name="uname" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
			                        <div class="form-group">
			                        	
			          <input type="password" name="psw" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" name="submit" class="btn">Sign in!</button>

			                    </form>
                                
                               <div class="col-sm-7">
                                <a href="register.php">Not a Member? Create Account</a></div></div>
		                    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>