<!-- Done By: Wilson, Faris -->

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <title>Thank you for booking with us!</title>
  <link rel="stylesheet" href="css/invoice.css">
  <script src="https://kit.fontawesome.com/da3232a2be.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/nav.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">

    <!-- <-- END OF NAV -->



    <style>
      @media print {
        @page {
          size: A3;
        }
      }

      ul {
        padding: 0;
        margin: 0 0 1rem 0;
        list-style: none;
      }

      .inv-body tr:nth-child(odd) {
        background-color: #dddddd;
      }

      body {
        font-family: "Inter", sans-serif;
        margin: 0;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      table,
      table th,
      table td {
        border: 1px solid silver;
      }

      table th,
      table td {
        text-align: right;
        padding: 8px;
      }

      h1,
      h4,
      p {
        margin: 0;
      }

      .inv-container {
        padding: 20px 0;
        width: 1000px;
        max-width: 100%;
        margin: 0 auto;
      }

      .inv-header {
        margin-top: 60px;
        display: flex;
        margin-bottom: 20px;
      }

      .inv-header> :nth-child(1) {
        flex: 2;
      }

      .inv-header> :nth-child(2) {
        flex: 1;
      }

      .inv-header h2 {
        font-size: 20px;
        margin: 0 0 0.3rem 0;
      }

      .inv-header ul li {
        font-size: 15px;
        padding: 3px 0;
      }

      .inv-body table th,
      .inv-body table td {
        text-align: left;
      }

      .inv-body {
        margin-bottom: 30px;
        margin-top: 50px;
      }

      .inv-body h1 {
        font-weight: normal;
      }

      .inv-footer {
        display: flex;
        flex-direction: row;

      }

      .inv-footer> :nth-child(1) {
        flex: 2;
      }

      .inv-footer> :nth-child(2) {
        flex: 1;
      }

      .inv-header .left-info {
        color: black;
      }

      .inv-button {
        background-color: green;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 10px;
        margin: 4px 2px;
        cursor: pointer;
      }

      .inv-button {
        margin-top: 20px;
        float: right;
      }

      .inv-button:hover {
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      }

      .inv-title {
        margin-top: 90px;
        color: black;
        display: grid;
        justify-content: center;
      }

      .inv-title i {
        font-size: 60px;
        display: grid;
        justify-content: center;
        color: green;
      }

      .inv-title h1 {
        margin-top: 20px;
        text-align: center;
        text-transform: uppercase;
        font-size: 30px;
      }

      .inv-title h2 {
        text-align: center;
        font-weight: normal;
      }

      .inv-border {
        margin-top: 100px;
        border-style: transparent;
        background: #ddd;
      }

      .inv-border h1 {
        text-align: center;
        font-size: 25px;
        color: #181818;
        font-weight: normal;
        text-transform: uppercase;
        border-right: 1px transparent;
        line-height: 40px;
      }
    </style>



    <!-- <-- START OF INVOICE -->
    <div class="inv-container">
      <div class="inv-title">
        <i class="fas fa-check-circle"></i>
        <h1>thank you for booking with us!</h1>
        <h2>Your order has been booked successfully.</h2>
      </div>
      <div class="inv-border">
      </div>
      <a href="browsebooking.php" button type="button" class="inv-button">CONTINUE SHOPPING</button></a>
    </div>
    <!-- <-- END OF INVOICE -->

</body>

</html>
