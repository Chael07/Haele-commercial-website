<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <div class="contact-form">
          <form>
            <label for="name"><b>Name</b></label>
            <input type="text" id="name" name="name" placeholder="Your name">
    
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" name="email" placeholder="Your email">
    
            <label for="message"><b>Message</b></label>
            <textarea id="message" name="message" placeholder="Your message"></textarea>
    
            <div class="submit-button">
              <button type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    <!-- FOOTER SECTION -->
    <?php include('footer.php'); ?>

</html>