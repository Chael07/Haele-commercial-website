<!DOCTYPE html>
<html>
<head>
  <title>Product Display</title>
</head>
<body>
  <button onclick="toggleProducts()">Show Products</button>
  <div id="productContainer"></div>

  <script>
    var products = ["Product 1", "Product 2", "Product 3", "Product 4", "Product 5", "Product 6", "Product 7", "Product 8", "Product 9", "Product 10"];
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
</body>
</html>
