<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Docker Intro | Jungletronics</title>
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
</head>
<body>
  <?php
    $result = file_get_contents("http://node-container:9001/products");
    $products = json_decode($result);
  ?>
  <h1 style="text-align: center;">Inspirational Clothing and Fashion Catalogue:</h1>  
  <div class="container d-flex justify-content-center">  
    <table class="table">      
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $product): ?>
          <tr>
            <td><?php echo $product->product; ?></td>
            <td><?php echo $product->unit_price; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <footer style="text-align: center;">
    Please visit this post on our Outfit App:
    <a href="https://medium.com/jungletronics/simple-ecommerce-api-using-flask-b192e2079791">Simple eCommerce API using Flask - How to Get Started on Flask — #flaskSeries #Episode00</a>
</footer>
</body>
</html>