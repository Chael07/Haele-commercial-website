<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<style>
    ul {
      font-size: 30px; /* Adjust the font size for the unordered list */
    }

    li {
      font-size: 25px; /* Adjust the font size for the list items */
    }
  </style>

<body>
    <!-- HEADER -->
    <header>
        <div class="hero">
            <div class="row">
                <div class="hero-info">
                        <h1>ELECTRONICS</h1>
                        <p>Electronics are used for communication, computing, entertainment, medical applications, 
                            transportation, industrial automation, energy management, and consumer devices. 
                            They enable tasks like transmitting information, processing data, providing entertainment,
                             improving medical care, controlling machinery, managing energy, and enhancing daily life.</p>
                        <a href="shop.php" class="btn">Explore Now</a>
                </div>
                <div class="hero-image">
                    <img src="images/Haele.png">
                </div>
            </div>
        </div>
    </header>
    <h2>what is the top5 products?</h2>
    <button onclick="toggleProducts()"><h2 style="font-size: 200%; ">Show Products</h2></button>
  <div id="productContainer"></div>

    <!-- FEATURED CATEGORIES -->

    <section class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <h1><b>COMPUTER</b></h1>
                    <img src="images/category1.png">
                </div>
                <div class="col-3">
                    <h1><b>CAMERA</b></h1>
                    <img src="images/category2.png">
                </div>
                <div class="col-3">
                    <h1><b>PHONE</b></h1>
                    <img src="images/category3.png">
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS -->

    <section class="featured">
        <h2 class="title">Featured Products</h2>
        <div class="medium-container">
            <div class="row">
                <div class="col-4">
                    <img src="images/product1.png">
                    <h4>Galaxy Z Flip 3</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>$200</p>
                </div>
                <div class="col-4">
                    <img src="images/product2.png">
                    <h4>2023 CHUWI Herobook Pro Laptop</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <p>$500</p>
                </div>
                <div class="col-4">
                    <img src="images/product3.png">
                    <h4>Notebook 15.6 inch Laptop Windows 11 10 Pro</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>$550</p>
                </div>
                <div class="col-4">
                    <img src="images/product4.png">
                    <h4>Fingerprint Brand new laptop intel J4125/J4105</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>$450</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OFFER SECTION -->

    <section class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/product5.png" class="offer-image">
                </div>
                <div class="col-2">
                    <h3>ASUS X Series X409FA-BV668T</h3>
                    <small>$540.00</small>
                    <p>PROCESSOR: Intel Core I3-10110U
                        <br> DISPLAY: 14.0-inch (16:9) LED-backlit HD (1366×768) 60Hz Anti-Glare Panel
                        <br> MEMORY: 4GB DDR4
                        <br>STORAGE: 512GB M.2 NVME SSD
                        <br>GPU: Intel UHD Graphics
                        <br>OS: Windows 10 Home SL 64-bit
                        <br>MS OFFICE : OFC21HS
                        <br>Color: Grey </p>
                    <a href="#" class="btn">Add To Cart</a>
                </div>
            </div>
        </div>
    </section>
    <script>
    var products = ["AndowlA7", "AsusX", "ChuwiPro", "Galaxy S22 ultra", "Galaxy Z flip 3"];
    var productContainer = document.getElementById("productContainer");
    var showingProducts = false;

    function toggleProducts() {
      if (showingProducts) {
        hideProducts();
        showingProducts = false;
      } else {
        showProducts();
        showingProducts = true;
      }
    }

    function showProducts() {
      productContainer.innerHTML = ""; // Clear previous content

      var productList = document.createElement("ul"); // Create a new unordered list

      for (var i = 0; i < products.length; i++) {
        var productItem = document.createElement("li"); // Create a new list item
        productItem.textContent = products[i];
        productList.appendChild(productItem); // Append the list item to the unordered list
      }

      productContainer.appendChild(productList); // Append the unordered list to the product container
    }

    function hideProducts() {
      productContainer.innerHTML = ""; // Clear the product container
    }
  </script>
    <!-- FOOTER SECTION -->
    <?php include('footer.php'); ?>
</body>


</html>