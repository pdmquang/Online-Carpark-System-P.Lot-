<!-- Done By: Alex, Quang -->

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'front-libraries.php'; ?>
  <?php include 'data/get-booking.php'; ?>
  <?php // include 'data/get-cart.php';
  ?>
</head>


<body class="size-1140">
  <!-- TOP NAV WITH LOGO -->
  <header>
    <?php include 'navigation-bar.php'; ?>
  </header>



  <!-- <-- HERO IMAGE -->
  <div class="hero-image">
    <div class="hometitle">
      <div class="title">
        <h1>Browse Booking.</h1>
        <p>Start booking with us today!</p>
      </div>
    </div>
  </div>


  <?php include 'search-bar.php'; ?>

  <!-- <--- HEADER --->
  <section class="content-section sub-container">
    <h2 class="section-header">search.</h2>
    <h3 class="sub-header"><strong>All Available Parking Lots</strong> in <strong><?php if (count($_POST) > 0) echo $_POST["address"]; ?></strong></h3>

    <!-- <-- BROWSE CONTENT -->

    <?php foreach ($rows as $key => $value) { ?>
      <section>
        <div id="information">
          <input type="hidden" name="carparkId" value="<?php echo $value["carparkId"]; ?>">
          <input type="hidden" name="lotId" value="<?php echo $value["lotId"]; ?>">
          <input type="hidden" name="address" value="<?php echo $value["address"]; ?>">
          <input type="hidden" name="price" value="<?php echo $value["price"]; ?>">
          <input type="hidden" name="check_in" value="<?php echo $desired_checkin; ?>">
          <input type="hidden" name="check_out" value="<?php echo $desired_checkout; ?>">
        </div>

        <div class="tour-row">
          <div class="pricing-card">
            <div class="card-left">
              <span class="tour-arena">LOT <?php echo $value["lotId"]; ?></span>
            </div>
            <div class="card-right">
              <h6>Location</h6>
              <p><span class="tour-city"><?php echo $value["address"]; ?></span></p>
              <!-- <p><span class="start-datetime"><?php echo $value["check_in"]; ?></span> - <span class="end-datetime"><?php echo $value["check_out"]; ?></span></p> -->
              <div class="price">
                <p><span class="dollar">$</span><span class="tour-price"><?php echo $value["price"]; ?></span></p>
              </div>

              <button type="button" class="price-button">Add to Cart</button>
            </div>
          </div>
        </div>
      </section>

    <?php } ?>

    </div>
  </section>
  <!-- <-- BROWSE CONTENT ENDS -->


</body>

</html>
