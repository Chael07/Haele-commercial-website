                
  <!DOCTYPE html>
  <html lang="en">
  
  <?php include('header.php'); ?>

  
  <body>
            <div class="">
                <!-- Main Content -->
                <br><br><br><br><br><br>
                <div class="row-cart">
                    <div class="">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>

                <main class="row">
                    <div>
                        <div class="row">
                            <div>
                                <form class="row">
                                    <div>
                                        <table class="cart">
                                            <thead>
                                            <tr>
                                                <br><br><br>
                                                <th style="font-size: large;">Product</th>
                                                <th style="font-size: large;">Price</th>
                                                <th style="font-size: large;">Qty</th>
                                                <th style="font-size: large;">Amount</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    Optoma 4K HDR Projector
                                                </td>
                                                <td>
                                                    $1,500
                                                </td>
                                                <td>
                                                    <input type="number" min="1" value="1">
                                                </td>
                                                <td>
                                                    $1,500
                                                </td>
                                                <td>
                                                    <button class="btn"><i class="fas fa-times"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    HP Envy Specter 360
                                                </td>
                                                <td>
                                                    $2,500
                                                </td>
                                                <td>
                                                    <input type="number" min="1" value="1">
                                                </td>
                                                <td>
                                                    $2,500
                                                </td>
                                                <td>
                                                    <button class="btn"><i class="fas fa-times"></i></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th colspan="3" class="text-right">Total</th>
                                                <th>$4,000</th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="">
                                        <br><br><br><br><br><br><br><br>
                                        <button class="btn " type="submit">Update</button>
                                        <br>
                                        <a href="#" class="btn">Checkout</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <a href="My-Acc.php" class="btn">BACK</a> 
                    </div>
                </main>
                <?php include('footer.php'); ?>
            </div> 
            </div>
        </div>

    </div>
</body>
</html>