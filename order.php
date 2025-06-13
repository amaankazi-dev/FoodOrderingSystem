<?php

if(isset($_POST['submit1']))

    $bgr = 0;
    $drk = 0;
    $piz = 0;
    $ice = 0;
    $sdw = 0;
    $swr = 0;
    $frf = 0;
    $mom = 0;

    $bgr = isset($_POST['bgr']) ? $_POST['bgr'] : 0;
    $drk = isset($_POST['drk']) ? $_POST['drk'] : 0;
    $piz = isset($_POST['piz']) ? $_POST['piz'] : 0;
    $ice = isset($_POST['ice']) ? $_POST['ice'] : 0;
    $sdw = isset($_POST['sdw']) ? $_POST['sdw'] : 0;
    $swr = isset($_POST['swr']) ? $_POST['swr'] : 0;
    $frf = isset($_POST['frf']) ? $_POST['frf'] : 0;
    $mom = isset($_POST['mom']) ? $_POST['mom'] : 0;

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact - Food Rush</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="images/logo.png" alt="Food Rush Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="order.php">Order</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>
    </header>
    
    <div class="order" id="Order">
    
      <h1><span>Order</span>Now</h1>

      <div class="order_main">
        <div class="order_image">
          <img src="images/order_image.png" />
        </div>

        <form action="pro.php" method="post"> 
          <div class="input">
            <p>NAME : </p>
            <input type="text" name="name" placeholder="your name" />
          </div>

          <div class="input">
            <p>E-MAIL : </p>
            <input type="email" name="email" placeholder="your email" />
          </div>

          <div class="input">
            <p>NUMBER : </p>
            <input type="text" name="number" placeholder="your number" />
          </div>

          <div class="input">
            <p>ADDRESS:  </p>
            <input type="text" name="address" placeholder="how many order" />
          </div>

          <div class="input">
            <input type="text" name="bgr" value="<?php echo $bgr; ?>" hidden/>
            <input type="text" name="drk" value="<?php echo $drk; ?>" hidden/>
            <input type="text" name="piz" value="<?php echo $piz; ?>" hidden/>
            <input type="text" name="ice" value="<?php echo $ice; ?>" hidden/>
            <input type="text" name="sdw" value="<?php echo $sdw; ?>" hidden/>
            <input type="text" name="swr" value="<?php echo $swr; ?>" hidden/>
            <input type="text" name="frf" value="<?php echo $frf; ?>" hidden/>
            <input type="text" name="mom" value="<?php echo $mom; ?>" hidden/>
        
          </div>
          <center><button type="submit" name="submit2" class="custom-button">Order Now</button></center>
        </form>
      </div>
    <!-- </form> -->
    </div>

    <footer class="footer">
      <div class="footer-content">
        <div class="footer-logo">
          <img src="images/logo.png" alt="Logo" />
        </div>
        <nav class="footer-links">
          <a href="index.php">Home</a>
          <a href="about.php">Menu</a>
          <a href="menu.php">Order</a>
          <a href="order.php">About</a>
        </nav>
      </div>
      <p class="footer-text">&copy; 2024 Food Rush. All rights reserved.</p>
    </footer>
  </body>
</html>
