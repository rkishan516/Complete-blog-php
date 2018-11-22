<?php
session_start();
      $code = mt_rand(000000,999999);
      $_SESSION['code'] = $code;
      $username = $_SESSION['username'] = $_POST['username'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['password_1'] = $_POST['password_1'];
      $_SESSION['password_2'] = $_POST['password_2'];
      $to_id = $_POST['email'];
      $message = "Hey ".$username.",\nYour Verification Code is : ".$code;
      $subject = "User Verification Code At Blogger";
		  $headers = 'From: flutterdev0@gmail.com' . "\r\n" ;
		    if(mail($to_id,$subject,$message,$headers))
		    {
            echo $_SESSION['code'];
			       echo "Mail Sent";
             echo "<form action='includes/registration_login_by_user.php' method='post' >";
             echo "<input type='number' name='verify'/>";
             echo "<input type='submit' value='submit' />";
             echo "</form>";
		    }
		    else
		    {
			       echo "Mail Send failed";
             echo "<script type='text/javascript'> window.location.replace(\"index.php\") </script>";
		    }
	?>
</script>
