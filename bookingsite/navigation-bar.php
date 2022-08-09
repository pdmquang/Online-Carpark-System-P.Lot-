<!-- Done By: Xian Zhi, Wilson -->

<div id="topbar">
  <div class="line">
    <div class="s-12 m-12 l-12">
      <div class="social right">
      </div>
    </div>
  </div>
</div>
<nav>
  <div class="line">
    <div class="s-12 l-2">
      <a href="index.php">
        <p class="logo"><i class="fab fa-product-hunt"></i>.LOT</p>
      </a>
    </div>
    <div class="top-nav s-12 l-10">
      <p class="nav-text">Menu</p>
      <ul class="right">
        <li><a href="index.php#carousel">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li>
          <div class="dropdown">
            <a href="browsebooking.php" button class="dropbtn">Booking<i class="fas fa-chevron-down"></i></a></button>
            <div class=" dropdown-content">
              <a href="browsebooking.php">Browse</a>
              <a href="managebooking.php">Manage Booking</a>
            </div>
          </div>
        </li>
        <li><a href="lots.php">Location</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
          <a href="login.php">
            <?php if (isset($_SESSION['loggedin'])) {
              echo $_SESSION['username'];
            } else {
              echo "Login";
            }
            ?>
          </a>
        </li>

        <li>
          <div class="dropdown">
            <a href="" button class="dropbtn"><i class="fas fa-shopping-cart"></i></a></button>
            <div class="dropdown-content">
              <div class="cart-box">
                <div class="cart-text">
                  <h1>Cart.</h1>
                  <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">$0</span>
                  </div>

                </div>
                <hr>
                <div class="cart-items">
                </div>
                <button onclick="confirmBooking()" class="btn-purchase" type="button"><span>Checkout</span></button>
              </div>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
