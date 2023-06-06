<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
  <div class="Myacc-container">
    <h1>Welcome to My Account</h1>
    <div class="user-info">
      <h2>Personal Information</h2>
      <p><strong><b>Name:</b></strong> John Doe</p>
      <p><strong><b>Email:</b></strong> johndoe@example.com</p>
      <p><strong><b>Address</b></strong> 123 Main St, City, Country</p>
    </div>
    <div class="order-history">
      <h2>Order History</h2>
      <table>
        <tr>
          <th>Order ID</th>
          <th>Date</th>
          <th>Total</th>
        </tr>
        <tr>
          <td>12345</td>
          <td>2023-05-15</td>
          <td>$99.99</td>
        </tr>
        <tr>
          <td>54321</td>
          <td>2023-04-20</td>
          <td>$49.99</td>
        </tr>
        <!-- Add more rows for additional orders -->
      </table>
    </div>
    <div class="logout-button">
      <button onclick="logout()"><a href="../index.php">Logout</a></button>
    </div>
    <div class="submit-button">
      <button type="submit"> <a href="cart.php"><b>Cart</b></a></button>
    </div>
  </div>

 <script>
    function logout() {
      // Perform logout actions here, such as clearing session or local storage
      alert('Logged out successfully!');
      // Redirect to the home
    }

  </script>
  <?php include('footer.php'); ?>

  </body>
