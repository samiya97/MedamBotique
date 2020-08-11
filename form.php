<?php include('config.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
<?php 
if(isset($_POST['submit']))
{
	$FirstName = $_POST['fname'];
	$LastName = $_POST['lname'];
	$UserEmail = $_POST['email'];
	$Phone = $_POST['phone'];
	$msg = $_POST['message'];
	
	$insertQry = "INSERT INTO contact_us (firstname, lastname, email, phone, Message)
VALUES('$FirstName', '$LastName', '$UserEmail', '$Phone', '$msg')";
if(mysqli_query($conn,$insertQry))
	{ 
	header('location:index.php');
	}
	else {
		echo "Masla";
	}
}

?>

  <form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="First Name" type="text" name="fname" value="" tabindex="1" autofocus>
      <span class="error"></span>
    </fieldset>
    <fieldset>
      <input placeholder="Last Name" type="text" name="lname" value="" tabindex="1" autofocus>
      <span class="error"></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="" tabindex="2">
      <span class="error"></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="" tabindex="3">
      <span class="error"></span>
    </fieldset>
    <fieldset>
      <textarea value="" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"></div>
  </form>
</div>
