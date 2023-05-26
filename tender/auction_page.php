<?php
include "connect.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Home Page</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/_buttons.scss">
  <link rel="stylesheet" href="css/buttons.scss">
  <!-- <link rel="stylesheet" href="css/buttons.scss"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css"> -->

  <script
    nonce="10103964-004b-4a99-b2c8-e02088e28228">(function (w, d) { !function (bg, bh, bi, bj) { bg[bi] = bg[bi] || {}; bg[bi].executed = []; bg.zaraz = { deferred: [], listeners: [] }; bg.zaraz.q = []; bg.zaraz._f = function (bk) { return function () { var bl = Array.prototype.slice.call(arguments); bg.zaraz.q.push({ m: bk, a: bl }) } }; for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm); bg.zaraz.init = () => { var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj), bp = bh.getElementsByTagName("title")[0]; bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text); bg[bi].x = Math.random(); bg[bi].w = bg.screen.width; bg[bi].h = bg.screen.height; bg[bi].j = bg.innerHeight; bg[bi].e = bg.innerWidth; bg[bi].l = bg.location.href; bg[bi].r = bh.referrer; bg[bi].k = bg.screen.colorDepth; bg[bi].n = bh.characterSet; bg[bi].o = (new Date).getTimezoneOffset(); if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({ ...bu[1], ...bv[1] }))))) zaraz.set(bt[0], bt[1], { scope: "page" }); bg[bi].q = []; for (; bg.zaraz.q.length;) { const bw = bg.zaraz.q.shift(); bg[bi].q.push(bw) } bo.defer = !0; for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => { try { bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by)) } catch { bg[bi]["z_" + by.slice(7)] = bx.getItem(by) } })); bo.referrerPolicy = "origin"; bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi]))); bn.parentNode.insertBefore(bo, bn) };["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>
</head>

<body>
  <style>
    .scroller {
      height: 300px !important;
      overflow-y: scroll !important;
      scroll-snap-type: y mandatory !important;
    }

    .scroller section {
      scroll-snap-align: start !important;
    }
  </style>

  <div class="strip">
    <a href="#"><i class="fa-solid fa-phone"></i>&nbsp Helpline No: +91 9945454505</a>
    <div class="container-fluid px-md-5">
      <div id="typedtext" class="ml-5" style="color: white;">
      </div>
    </div>
  </div>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .strip {
      width: 100%;
      background-color: #3b8beb;
      overflow: auto;
    }

    .strip a {
      float: right;
      margin-right: 15px;
      padding-left: 10px;
      color: white;
      text-decoration: none;
      font-size: 15px;
    }

    .strip a:hover {
      color: #000000;
    }


    @media screen and (max-width: 500px) {
      .strip a {
        float: none;
        display: block;
      }
    }

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

    body {

      font-family: "Roboto", helvetica, arial, sans-serif;
      font-size: 16px;
      font-weight: 400;
      text-rendering: optimizeLegibility;
    }

    div.table-title {
      display: block;
      margin: auto;
      max-width: 600px;
      padding: 5px;
      width: 100%;
    }

    .table-title h3 {
      color: #3b8beb;
      font-size: 30px;
      font-weight: 400;
      font-style: normal;
      font-family: "Roboto", helvetica, arial, sans-serif;
      text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
      text-transform: uppercase;
    }

    /*** Table Styles **/

    .table-fill {
      background: white;
      border-radius: 3px;
      border-collapse: collapse;
      height: 120px;
      margin: auto;
      max-width: 600px;
      padding: 5px;
      width: 100%;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
      animation: float 5s infinite;
    }

    th {
      color: #ffffff;
      ;
      background: #3b8beb;
      border-bottom: 4px solid #9ea7af;
      border-right: 1px solid #343a45;
      font-size: 18px;
      font-weight: 500;
      padding: 10px;
      text-align: left;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
      vertical-align: middle;
    }

    th:first-child {
      border-top-left-radius: 3px;
    }

    th:last-child {
      border-top-right-radius: 3px;
      border-right: none;
    }

    tr {
      border-top: 1px solid #C1C3D1;
      border-bottom: 1px solid #C1C3D1;
      color: #666B85;
      font-size: 16px;
      font-weight: normal;
      text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
    }

    tr:hover td {
      background: #828393;
      color: #FFFFFF;

    }

    tr:first-child {
      border-top: none;
    }

    tr:last-child {
      border-bottom: none;
    }

    tr:nth-child(odd) td {
      background: #EBEBEB;
    }

    tr:nth-child(odd):hover td {
      background: #828393;
    }

    tr:last-child td:first-child {
      border-bottom-left-radius: 3px;
    }

    tr:last-child td:last-child {
      border-bottom-right-radius: 3px;
    }

    td {
      background: #FFFFFF;
      padding: 10px;
      text-align: center;
      vertical-align: middle;
      font-weight: 300;
      font-size: 18px;
      text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
      border-right: 1px solid #C1C3D1;
    }



    td:last-child {
      border-right: 0px;
    }

    th.text-left {
      text-align: left;
    }

    th.text-center {
      text-align: center;
    }

    th.text-right {
      text-align: right;
    }

    td.text-left {
      text-align: left;
    }

    td.text-center {
      text-align: center;
    }

    td.text-right {
      text-align: right;
    }

    h4,
    h5,
    h6 {
      color: #757b89;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size:18px;

    }

    .space {
      padding: 6px;


    }
    .color{
      color: #fff !important;
    }
  </style>
  <section class="ftco-section" style="padding-top: 5px;">

    <section class="d-flex justify-content-between p-3" style="background-color:white">
      <div class="me-5">
        <img src="image/rawmetlogo.jpeg" width="80px" height="auto" style="border-radius: 5px; margin-left: 40px;">

      </div>&nbsp <p style="  margin-top: 25px;" class="tft">RAWMET24</p>
      <div class="container" style="margin-left: 270px; ">
        <form class="form-inline" action="/action_page.php">
          <label for="email"></label>
          <input type="email" class="form-control" id="email" placeholder="Username" name="email">
          <label for="pwd"></label>&nbsp
          <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">&nbsp&nbsp
          <div class="form-check">

          </div><br>
          <button type="submit" class="btn btn-primary"
            style="background-color: #3b8beb !important; border-color: #3b8beb;"> <a href="signin.html"
              style="font-size: medium;color: #ffffff; ">
              <i class="fa-solid fa-user" style="padding: 5px; "></i>SignIn
            </a></button>
          <a href="signup.html" style="font-size: medium; padding: 25px; ">
            <i class="fa-solid fa-user-plus"></i>SignUp
          </a>
        </form>
      </div>

    </section>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav m-auto">
            <li class="nav-item "><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="tender.php" class="nav-link">Tenders</a></li>
            <li class="nav-item active"><a href="auction.php" class="nav-link">Auctions</a></li>
            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="excluedeal_page.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>
            <li class="nav-item"><a href="info_page.html" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </section>



  <div class="container-fluid" style="background-color: #3b8beb; padding: 30px;"><br>
   

   <a href="price.html"> <button class="btn btn-primary" style="border-color: #fff;">View All Auctions</button><br><br><br><br></a>
  </div>

  <div class="container" class="col-lg-6 col-md-12" style="margin-top: -130px;"><br><br>
    <div class="card">
      <div class="card-body">
        <div class="clearfix some-new-selector">
          <div class="pull-left">
            <div class="pull-right span9" style="color: #9e9797; padding:10px">
              <h6>Home / Auction Search / Auction Detail</h6>
              <br>
              <?php
                    $id = $_GET['g'];
                    $sql = "select * from auction where id=$id";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {

                        ?>
              <h3 style="color: #595a62;"> COMPANY NAME: <a href="price.html">XXXXX</a></h3>
              <h5><i class='bx bx-map'></i> <?php echo $row['aucLocation']; ?></h5>
              <hr>
              <div style="margin-left: 40px;">
                <table class="table table-bordered">
                  <thead>
                    <tr>

                    </tr>
                  </thead>
                  <tbody>
              

                        <td>Information Number</td>
                        <td>
                          <?php echo $row['infoId']; ?>
                        </td>
                        </tr>
                        


                        <tr>

                          <td>Location</td>
                          <td>
                            <?php echo $row['aucLocation']; ?>
                          </td>
                        </tr>
                      

                          <td>Auction No</td>
                          <td>
                          <a href="price.html">XXXXX</a>
                          </td>
                        </tr>
                        <tr>

                          <td>ePublishing Date & Time</td>
                          <td>
                            <?php echo $row['ePublishingDateTime']; ?>
                          </td>
                        </tr>
                        <tr>

                          <td>Bid Submission Date</td>
                          <td>
                            <?php echo $row['startDatetime']; ?>
                          </td>
                        </tr>
                        <tr>

                          <td>Bid Submission Close Date</td>
                          <td>
                            <?php echo $row['endDatetime']; ?>
                          </td>
                        </tr>
                        <tr>

                          <td>Inspection From Date</td>
                          <td>
                          <a href="price.html">XXXXX</a>
                          </td>
                        </tr>
                        <tr>

                          <td>Inspection Closing Date</td>
                          <td>
                          <a href="price.html">XXXXX</a>
                          </td>
                        </tr>
                        <tr>

                          <td>EMD amount</td>
                          <td>
                          <a href="price.html">XXXXX</a>
                          </td>
                        </tr>
                       
                  </tbody>
                </table></div></div>
                <div style="margin-left: 40px;">
      <table class="table table-bordered">
  <thead>
    <tr>
     <th>List of Materials</th>
    </tr>
  </thead>
  <tbody>
 
   
    <tr>
     
      <td>Bronze</td>
    
    </tr>
    <tr>
    <td>Steel</td>
    
    </tr>
    <tr>
    <td>Silver</td>
    
    </tr>
     
    
   
</table>


                <div class="space">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

<div class="row">
<div class="card" style="background-color: #3b8beb; margin-left:550px; margin-top:-850px; margin-bottom:700px; padding:10px; ">
<div class="card-body">
<h4 style="color:#fff;">AUCTION VALUE:&nbsp ₹<?php echo $row['aucValue']; ?>000.00</h4><hr>
<h4 style="color:#fff;">QUANTITY :&nbsp <?php echo $row['quantity']; ?> TONS</h4><hr>

  <h5 style="color:#fff;">Opening date and time :<br><i class='bx bx-calendar-alt'>&nbsp<?php echo $row['ePublishingDateTime']; ?> </i><br>
                    
                    <br> Bid Submission Started <br>
                    <h6 style="color:#fff;"><i class='bx bxs-calendar-alt'></i> <?php echo $row['startDatetime']; ?> &nbsp &nbsp
                        &nbsp </h6>
                  <hr>



  <h6 style="color:#fff;">Sector:&nbsp<?php echo $row['sector']; ?></h6><hr>

          <h6 style="color:#fff;"><i class='bx bxs-calendar-alt'></i> Expires on <?php echo $row['endDatetime']; ?> &nbsp &nbsp
            &nbsp </h6>
            </div>    
      <center>  <a href="price.html"><button class="btn btn-light" style="color :#3b8beb">Open Website</button></a></center>
</div>
    

  </div>
</div>
</div>
</div>
</div>
  </div>

  <div class="container">
    <div class="card" style="margin-top:-300px;">
      <div class="card-body" >

        <h3>Documents</h3>
        <hr>

      </div>
      <div class="card-columns">
        <div class="card" style="width:150px;">
          <center> <img class="card-img-top"
              src="https://www.pcworld.com/wp-content/uploads/2022/08/pdf-icon.jpg?quality=50&strip=all"
              alt="Card image" style="width:70%"></center>
          <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-text">viewNtlPdf_76656788(1).pdf</p>
          </div>
        </div>&nbsp; &nbsp; &nbsp;
        <div class="card" style="width:150px;margin-left: 15px; ">
          <center><img class="card-img-top"
              src="https://www.pcworld.com/wp-content/uploads/2022/08/pdf-icon.jpg?quality=50&strip=all"
              alt="Card image" style="width:70%"></center>
          <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-text">viewNtlPdf_76656788(1).pdf</p>
          </div>
        </div>


        <div class="card" style="width:150px; ">
          <center style="margin-left: 4px;"> <img class="card-img-top"
              src="https://cdn-icons-png.flaticon.com/512/5968/5968517.png" alt="Card image" style="width:48%"></center>
          <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-text">viewhuldoc_67897742(1).doc</p>
          </div>
        </div>
      </div>
      <div class="container">
      <a href="price.html"> <h4 style="margin-left:900px;">Download All ></h4><br></a>
    </div>
    </div>
  </div>
  </div>

  <?php
                      }
                    }
                    ?>


</body>

</div>
</div>
</div>
</div>
</div>
</div>
</center>






<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-3" style="background-color:#3b8beb">
    <!-- Left -->

    <div class="me-5">

      <img src="image/rawmetlogo.jpeg" width="60px" height="50px" style="border-radius: 5px;">
    </div>
    <div class="icon" style="font-size: 35px; padding-right: 0px;word-spacing: 10px;">
      <a href="" class="text-white me-4">
        <i class="fa-brands fa-square-facebook"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa-brands fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa-brands fa-instagram"></i>
      </a>

    </div>
    <!-- Left -->

  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Company name</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            SHOPEMET is a world class general Refined metal trading company that has served as a foundation for growth
            of basic material industry in India
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Key links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            <a href="#!" class="text-white">About Us</a>
          </p>
          <p>
            <a href="#!" class="text-white">Why Tender</a>
          </p>
          <p>
            <a href="#!" class="text-white">Feedback</a>
          </p>
          <p>
            <a href="#!" class="text-white">Solutions</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Useful links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="color: #fff;">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Contact</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p><i class="fa fa-envelope" aria-hidden="true"></i> shopemet@gmail.com</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i> +91 8766443234</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i> +91 1234567819</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">

    © 2023
    <a class="text-white" href="https://mdbootstrap.com/">shopemet.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
  integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
  data-cf-beacon='{"rayId":"7c68315d0b4f26b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}'
  crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>