<!DOCTYPE html>
<html lang="en">

<?php
	require('../config/config.php');
	require('../config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);

		$query = "INSERT INTO final_web.contact(username, email, message) VALUES ( '$username', '$email','$message')";

        if(mysqli_query($conn, $query)){
            header('Location: contact.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
?>

<?php include('header.php'); ?>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <div class="contact-form">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="name"><b>Name</b></label>
            <input type="text" id="username" name="username" placeholder="Username" autofocus="">
    
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" name="email" placeholder="Your Email"  autofocus="">
    
            <label for="message"><b>Message</b></label>
            <textarea id="message" name="message" placeholder="Your message" autofocus=""></textarea>
    
            <div class="submit-button">
            <button type="submit" onclick="mesFunc()" name="submit" value="Submit">Submit</button>
            </div>
          </form>
        <script>
          function mesFunc() {
            var user = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            if (user.trim() === '') {
                alert("Please enter username!");
            } else if (email.trim() === '') {
                alert("Please enter email");
            } else if (message.trim() === '') {
                alert("Please enter message");    
            } else {
                alert("Message sent");
            }
        }
    </script>
        </div>
      </div>
    <!-- FOOTER SECTION -->
    <?php include('footer.php'); ?>

</html>
