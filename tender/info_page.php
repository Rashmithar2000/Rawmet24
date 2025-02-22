<?php
session_start();
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
  <title>Informations</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/_buttons.scss">
  <link rel="stylesheet" href="css/buttons.scss">
  <link rel="stylesheet" href="dropdown.css">
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
    nonce="10103964-004b-4a99-b2c8-e02088e28228">(function (w, d) { !function (bg, bh, bi, bj) { bg[bi] = bg[bi] || {}; bg[bi].executed = []; bg.zaraz = { deferred: [], listeners: [] }; bg.zaraz.q = []; bg.zaraz._f = function (bk) { return function () { var bl = Array.prototype.slice.call(arguments); bg.zaraz.q.push({ m: bk, a: bl }) } }; for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm); bg.zaraz.init = () => { var = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj), bp = bh.getElementsByTagName("title")[0]; bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text); bg[bi].x = Math.random(); bg[bi].w = bg.screen.width; bg[bi].h = bg.screen.height; bg[bi].j = bg.innerHeight; bg[bi].e = bg.innerWidth; bg[bi].l = bg.location.href; bg[bi].r = bh.referrer; bg[bi].k = bg.screen.colorDepth; bg[bi].n = bh.characterSet; bg[bi].o = (new Date).getTimezoneOffset(); if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({ ...bu[1], ...bv[1] }))))) zaraz.set(bt[0], bt[1], { scope: "page" }); bg[bi].q = []; for (; bg.zaraz.q.length;) { const bw = bg.zaraz.q.shift(); bg[bi].q.push(bw) } bo.defer = !0; for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => { try { bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by)) } catch { bg[bi]["z_" + by.slice(7)] = bx.getItem(by) } })); bo.referrerPolicy = "origin"; bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));.parentNode.insertBefore(bo,) };["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
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
      font-size: medium;

    }

    .space {
      padding: 6px;


    }
    .table-container {
  
  top: 50%; /* Adjust the value based on your desired vertical position */
  left: 50%; /* Adjust the value based on your desired horizontal position */
 /* Centers the table in the middle */
  max-height: 300px; /* Adjust the value based on your desired maximum height */
  overflow: visible;
   /* Optional: Specify a z-index if needed */
  / 
  
}
@media (max-width: 767px) {
  .desktop-view {
    display:none;
  }
}

@media (min-width: 768px) {
  .mobile-view {
    display: none;
  }
}
@media (max-width: 480px) {
.containerr {
    display: flex;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    white-space: nowrap;
  }

  .containerr a {
    display: inline-block;
    white-space: normal;
    scroll-snap-align: start;
  }
}
</style>
<div class="strip desktop-view">
<a href="https://wa.me/9945454505"><i class=" fa-solid fa-brands fa-whatsapp"></i> Whatsapp Number: 9945454505</a>  
  <a href="tel:9606800462">9606800462</a> 
  <a href="tel:8123010365" style="margin-right:-5px"><i class="fa-solid fa-phone"></i>&nbsp Helpline Number: 8123010365,</a>
  <div class="container-fluid px-md-5">
  <div id="typedtext" class="ml-5"  style="color: white;">
</div>
</div>
     </div>
  

<!-- ============================================mobile-view===============================================-->
<div class="containerr strip mobile-view">
  <marquee direction="left" height="5%" style="white-space: nowrap;">
  <a href="tel:8123010365" style="margin-right:-5px"><i class="fa-solid fa-phone"></i>&nbsp Helpline Number: 8123010365,</a>
  <a href="tel:9606800462">9606800462</a> 
  <a href="https://wa.me/9945454505"><i class=" fa-solid fa-brands fa-whatsapp"></i> Whatsapp Number: 9945454505</a>  
  <div class="container-fluid px-md-5">
  <div id="typedtext" class="ml-5"  style="color: white;">
</div>
</div></marquee>
</div>

  <section class="ftco-section" style="padding-top: 5px;">

  <section
           class="d-flex justify-content-between p-3"
           style="background-color:white"
           >
    <div class="me-5">
      <img src="image/rawmetlogo.jpeg" width="80px" height="auto" style="border-radius: 5px; margin-left: 40px;">
  
    </div>&nbsp   <p style=" position:absolute; margin-left:130px; margin-top: 25px;" class="tft desktop-view">RAWMET24</p>
    <?php 
       
       if(!isset($_SESSION['buyer_name'])){
 
       ?>
         <form class="form-inline" action="verify.php" method="post">
           <label for="email"></label>
           <input type="email" class="form-control" name="email" placeholder="Email" name="email">
           <label for="pwd"></label>&nbsp
           <input type="password" class="form-control" name="password" placeholder="Password" name="pswd">&nbsp&nbsp
           <div class="form-check">
 
           </div><br>
           <button class="btn btn-primary" type="submit">Sign in</button>
           <a href="signup.html" style="font-size: medium; padding: 20px; ">
             <i class="fa-solid fa-user-plus"></i>SignUp
           </a>
         </form>
      
       
         <?php }else{

// Retrieve the buyer's name
$name = $_SESSION['buyer_name'];

// Query to get the count of exclusive deal IDs for the particular buyer
$countSql = "SELECT COUNT(DISTINCT exclusiveDeal_id) AS notificationCount FROM notification WHERE name = '$name'";
$countResult = mysqli_query($con, $countSql);

if ($countResult) {
    $r= mysqli_fetch_assoc($countResult);
    $notificationCount = $r['notificationCount'];
} else {
    $notificationCount = 0;
}

?>

          
<div class="user" style="padding-top:25px;padding-right:30px">    
<div class="dropdown">
    <button class="dropbtn">
        <span style="position: relative;">
        <i class="fa-solid fa-bell"></i>
            <?php if ($notificationCount > 0) { ?>
                <sup style="top: -10px; right:12px; background-color: red; color: white; border-radius: 30%; padding: 2px 4px;"><?php echo $notificationCount; ?></sup>
            <?php } ?>
        </span>
    </button>
    <div class="dropdown-content">
        <?php
        // Query to get the notifications for the particular buyer
        $notificationSql = "SELECT * FROM notification WHERE name = '$name'";
        $notificationResult = mysqli_query($con, $notificationSql);

        if ($notificationResult && mysqli_num_rows($notificationResult) > 0) {
            while ($row = mysqli_fetch_assoc($notificationResult)) {
              
              $id = $row['exclusiveDeal_id'];
              $sql = "select * from exclusive_deals where id=$id";
              $result = mysqli_query($con, $sql);
              $r= mysqli_fetch_assoc($result);
              ?>
               <a href="excluedeal_page.php?g=<?php echo $id; ?>"><?php echo $r['material']."-".$r['infoId']; ?></a>
                <?php
            }
        } else {
            echo "<p>No blocked deals.</p>";
        }
        ?>
    </div>
</div> 
         &nbsp&nbsp Hi! <?php echo $_SESSION['buyer_name'];?>&nbsp&nbsp
              <button class="btn btn-primary" ><a href="signout.php" style="color:white;"> Signout </a></button>
 

          </div>
 


</div><?php
} ?>
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
            <li class="nav-item"><a href="tender.php" class="nav-link">Tenders</a></li>

            <li class="nav-item"><a href="auction.php" class="nav-link">Auctions</a></li>

            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>
            <li class="nav-item active" ><a href="info_page.php" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </section>



  <div class="container-fluid" style="background-color: #3b8beb; padding: 30px;"><br>
    <h2 style="color: #ffffff;">Upcoming Events Information</h2><br>

   <br><br>
  </div>



  <div class="container" class="col-lg-6 col-md-12" style="margin-top: -130px;">
  <br><br>
  <?php
  $sql = "select * from info_table";
  $result = mysqli_query($con, $sql);
  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      //print_r($row);die;
  ?>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <h3 style="color: #595a62;">
                <?php echo $row['showName']; ?>
              </h3>
              <h5><i class='bx bx-map'></i>
                <?php echo $row['venue']; ?>
              </h5><br>
              <hr>

              <div style="margin-left: 40px;">
                <table class="table table-bordered table-container">
                  <thead>
                    <tr>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Document Type</td>
                      <td>RID</td>
                    </tr>
                    <tr>
                      <td>INFORMATION NO</td>
                      <td>
                        <?php echo $row['infoId']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>TRADE SHOW</td>
                      <td>
                        <?php echo $row['showName']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>DATE</td>
                      <td><i class='bx bx-calendar-alt'></i>
                        <?php echo $row['dateTime']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>EXHIBITOR PRODUCT PROFILE</td>
                      <td>
                        <?php echo $row['profile']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>VENUE</td>
                      <td>
                        <?php echo $row['venue']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>ORGANIZED BY</td>
                      <td>
                        <?php echo $row['organizedBy']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>ORGANIZER ADDRESS</td>
                      <td>
                        <?php echo $row['organizedAdd']; ?>
                      </td>
                    </tr>
                    <?php
                    $sentence =  $row['map'];

                    $characterCount = 70; // Maximum character count per line

                    $characters = mb_str_split($sentence); // Split the sentence into an array of characters
                    $wrappedSentence = '';

                    $currentCount = 0;
                    foreach ($characters as $character) {
                      $wrappedSentence .= $character;
                      $currentCount++;

                      if ($currentCount % $characterCount == 0) {
                        $wrappedSentence .= "<br>";
                      }
                    }

                    ?>
                    <tr>
                      <td>GOOGLE MAPS</td>
                      <td>
                        <?php echo $wrappedSentence; ?>
                      </td>
                    </tr>
                    <tr>
                  </tbody>
                </table>
              </div>
            </table>
          </div>
                  </div>
    <?php
    }
  }
  ?>
</div>
</div>
      











 

<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-3" style="background-color:#3b8beb">
    <!-- Left -->

    <div class="me-5">

      <img src="image/rawmetlogo.jpeg" width="60px" height="50px" style="border-radius: 5px;">
    </div>
    <div class="icon" style="font-size: 35px; padding-right: 0px;word-spacing: 10px;">
      <a href="https://www.facebook.com/profile.php?id=100089553145382" class="text-white me-4">
        <i class="fa-brands fa-square-facebook"></i>
      </a>
      <a href="https://www.linkedin.com/company/shopemet/" class="text-white me-4">
        <i class="fa-brands fa-linkedin"></i>
      </a>
      <a href="https://www.instagram.com/shopemet/" class="text-white me-4">
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
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Rawmet24</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            Our concept is to provide the complete information solution that enables each trader to 
            diversify their trading profile in order to maximize their returns.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Key links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p>
            <a href="aboutus.php" class="text-white">About Us</a>
          </p>
       
          <p>
            <a href="policy.php" class="text-white">Privacy Policy</a>
          </p>
          <p>
            <a href="terms_of_service.php" class="text-white">Terms of Service</a>
          </p>

        </div>
   
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold" style="color: #fff;">Contact</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #3b8beb; height: 2px" />
          <p><i class="fa fa-envelope" aria-hidden="true"></i> info@Rawmet24.com
          </p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i>support@Rawmet24.com
          </p>
          <p><a href="tel:8123010365" style="color: #ffffff"><i class="fa-solid fa-phone"></i> Contact us- 8123010365</a></p>
  <p><a href="https://wa.me/9945454505" style="color: #ffffff"><i class=" fa-solid fa-brands fa-whatsapp"></i>  9945454505</a></p>
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
    <a class="text-white" href="https://mdbootstrap.com/">info@Rawmet24.com</a>
  </div>
  <!-- Copyright -->
</footer>



<script>
$(document).ready(function() {
  // Close the dropdown menu when clicking outside of it
  $(document).on('click', function(event) {
    var $target = $(event.target);
    if (!$target.closest('.navbar-collapse').length && $('.navbar-collapse').is(':visible')) {
      $('.navbar-collapse').collapse('hide');
    }
  });

  // Prevent dropdown menu from closing on clicking inside
  $('.navbar-collapse').on('click', function(event) {
    event.stopPropagation();
  });
});
</script>




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
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>