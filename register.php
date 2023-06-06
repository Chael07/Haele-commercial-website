<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
        $uid = mysqli_real_escape_string($conn,$_POST['uid']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);

		$query = "INSERT INTO final_web.useraccount (uid, username, email, password, address) VALUES ('$uid', '$username', '$email', '$password', '$address')";

        if(mysqli_query($conn, $query)){
            header('Location: account.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
?>

<?php include('header.php'); ?>
  <br/>
  <div style="width:30%; margin: auto; text-align: center;  padding-top:7% ;  padding-bottom: 8%;">
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <h1>Register</h1>
      <input type="text" id="uid" name="uid" placeholder="Enter Id" required="" autofocus="">
      <input type="text" id="username" name="username" placeholder="Username" required="" autofocus="">
      <input type="text" id="email" name="email" placeholder="Email" required="" autofocus="">
      <input type="password" id="password" name="password" placeholder="Password" required="">
      <input type="text" id="address" name="address" placeholder="Address" required="" autofocus="">
      <button type="submit" class="btn" onclick="registerFunc()" name="submit" value="Submit">Submit</button>
    <button type="button" class="btn" onclick="document.location='account.php'">LOGIN</button>
  </form>
  
  <script>
        function registerFunc() {
                alert("Register successfully!");
            
        }
    </script>

  </div>
