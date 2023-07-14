<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homework</title>
  <style>
    * {
      box-sizing: border-box;
    }

    .header div {
      background-color: #ddd;
      padding-left: 20px;
      font-weight: bold;
    }

    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type="submit"] {
      background-color: #04aa6d;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      /* float: right; */
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 100%;
      justify-content: center;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    .row {
      display: grid;
      grid-template-columns: 30% auto;
      gap: 2px;
    }

    /* Clear floats after the columns */
    .row::after {
      content: "";
      display: table;
      clear: both;
      grid-row: 20px;
      grid: 20px;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type="submit"] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>

<body>

  <?php
  //isset($_POST["submit"])
  if (isset($_POST["submit"])) {
    $v_tires = $_POST["tires"];
    $v_oil = $_POST["oil"];
    $v_spark = $_POST["spark"];
    $v_shipping = $_POST["shipping"];
  }
  ?>

  <div class="container">
    <h3>Bob`s Auto Parts</h3>
    <h5>Order Form</h5>
    <form action="getdata.php" method="post">
      <div class="row header">
        <div>
          <p>Item</p>
        </div>
        <div>
          <p>Quantity</p>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="tires">Tires</label>
        </div>
        <div class="col-25">
          <input type="text" id="tires" name="tires" autocomplete="off" />
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="oil">Oil</label>
        </div>
        <div class="col-25">
          <input type="text" id="oil" name="oil" autocomplete="off" />
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="spark">Spark Phugs</label>
        </div>
        <div class="col-25">
          <input type="text" id="spark" name="spark" autocomplete="off" />
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="shipping">Shipping Address</label>
        </div>
        <div class="col-75">
          <input type="text" id="shipping" name="shipping" autocomplete="off" />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-25"></div>
        <div class="col-75">
          <input type="submit" value="Submit Order" name="submit" />
        </div>
      </div>
    </form>
  </div>
</body>

</html>