<!DOCTYPE html>
<html>
  <head>
    <title>Food Rush</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="images/logo.png" alt="Berger Hut Logo" />
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

    <div class="menu" id="Menu">
      <h1>Our<span>Menu</span></h1>
      
      <div class="menu_box">
        <div class="menu_card">
          <div class="menu_image">
            <img src="images/buger.jpg" />
          </div>
          
          <form action="order.php" method="post">
            <div class="menu_info">
              <h2>Burger</h2>
              <h3>₹80.00</h3>
              <div class="inp">
                <input type="number" name="bgr" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/chocolate_Drink.jpg" />
            </div>
  
            <div class="menu_info">
              <h2>Drink</h2>
  
              <h3>₹100.00</h3>
              <div class="inp">
                <input type="number" name="drk" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/pizza.jpg" />
            </div>
  
            <div class="menu_info">
              <h2>pizza</h2>
  
              <h3>₹110.00</h3>
              <div class="inp">
                <input type="number" name="piz" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/ice_cream.jpg" />
            </div>
  
            <div class="menu_info">
              <h2>Ice Cream</h2>
  
              <h3>₹40.00</h3>
              <div class="inp">
                <input type="number" name="ice" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/sandwich.jpg" />
            </div>
  
            <div class="menu_info">
              <h2>Sandwich</h2>
  
              <h3>₹50.00</h3>
              <div class="inp">
                <input type="number" name="sdw" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/Chicken shwarma.jpeg" />
            </div>
  
            <div class="menu_info">
              <h2>Shwarma</h2>
  
              <h3>₹70.00</h3>
              <div class="inp">
                <input type="number" name="swr" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/french fries.jpeg" />
            </div>
  
            <div class="menu_info">
              <h2>french fries</h2>
  
              <h3>₹80.00</h3>
              <div class="inp">
                <input type="number" name="frf" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          <div class="menu_card">
            <div class="menu_image">
              <img src="images/momos.jpeg" />
            </div>
  
            <div class="menu_info">
              <h2>Momos</h2>
  
              <h3>₹90.00</h3>
              <div class="inp">
                <input type="number" name="mom" placeholder="how much" min="0"/>
              </div>
            </div>
          </div>
  
          </div>
        </div>
      </div>
      <center><button type="submit" name="submit1" class="custom-button">Order Now</button></center>
    </form>
    
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
