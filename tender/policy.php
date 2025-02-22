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
  <title>Privacy Policy</title>

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

  <script
    nonce="10103964-004b-4a99-b2c8-e02088e28228">(function (w, d) { !function (bg, bh, bi, bj) { bg[bi] = bg[bi] || {}; bg[bi].executed = []; bg.zaraz = { deferred: [], listeners: [] }; bg.zaraz.q = []; bg.zaraz._f = function (bk) { return function () { var bl = Array.prototype.slice.call(arguments); bg.zaraz.q.push({ m: bk, a: bl }) } }; for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm); bg.zaraz.init = () => { var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj), bp = bh.getElementsByTagName("title")[0]; bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text); bg[bi].x = Math.random(); bg[bi].w = bg.screen.width; bg[bi].h = bg.screen.height; bg[bi].j = bg.innerHeight; bg[bi].e = bg.innerWidth; bg[bi].l = bg.location.href; bg[bi].r = bh.referrer; bg[bi].k = bg.screen.colorDepth; bg[bi].n = bh.characterSet; bg[bi].o = (new Date).getTimezoneOffset(); if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({ ...bu[1], ...bv[1] }))))) zaraz.set(bt[0], bt[1], { scope: "page" }); bg[bi].q = []; for (; bg.zaraz.q.length;) { const bw = bg.zaraz.q.shift(); bg[bi].q.push(bw) } bo.defer = !0; for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => { try { bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by)) } catch { bg[bi]["z_" + by.slice(7)] = bx.getItem(by) } })); bo.referrerPolicy = "origin"; bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi]))); bn.parentNode.insertBefore(bo, bn) };["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
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

.strip a:hover{
  color: #000000;
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
    .modal-body img {
      width: 100%;
      height: auto;
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
  
    </div>&nbsp <p style=" position:absolute; margin-left:130px; margin-top: 25px;" class="tft desktop-view">RAWMET24</p>
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
       </div>
       
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
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tender.php" class="nav-link">Tenders</a></li>

            <li class="nav-item"><a href="auction.php" class="nav-link">Auctions</a></li>
            </li>

            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>

            <li class="nav-item"><a href="info_page.html" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>


<div class="container-fluid" style="background-color: #3b8beb; padding: 30px;"><br>

<div class="container">
    <div class="card">
        <div class="card-body" style="padding: 80px 120px 120px 120px;">
            <center> <h3>Privacy Policy</h3></center> <hr>
           <p style="font-family: Helvetica ;text-align:justify;">This privacy policy describes how we handle your personal information. We
collect, use, and share personal information to help the Rawmet24 website
(rawmet24.com) work and to keep it safe. All information posted in Rawmet24.com is publicly available. However we
are presenting it over the Internet media so as to make easier to get. Any information which we collect of the users via registration such as e- mail ID, Phone Number etc and while browsing such as IP address will be
stored on our servers.<br> <br>(Browsing data is collected by cookies,If you don't
want this data to be collected cookies can be disabled )
All information which we collected will be used by us to notify you of
updates(Can be disabled by notifying us info@Rawmet24.com),get your
feedback,troubleshoot problems and calculate our site statistics such as
avg.time spent on site,no of page views etc... so that we can find out where
we are lacking and improve the site.<br><br> The users privacy is very important to us. We do not and shall not at any
point in time, either sell or rent users personal information to third parties
without users explicit consent. We may be required from time to time to disclose users personal
information to Governmental or law enforcing agencies or our regulators, but we will only do so under proper authority. We may also disclose personal information to enforce our policies, respond
to claims that a posting or other content violates other's rights, or protects
anyone's rights, property or safety. We may also share personal information with:<br><br><i class="fa fa-stop" ></i> &nbsp Corporate affiliates who help detect or prevent potentially illegal acts and
provide joint services (Our corporate affiliates will market only to users who
ask them to). <br><i class="fa fa-stop" ></i> &nbsp Service providers who help with our business operations.<br><br> You may use personal information gathered from Rawmet24.com only to
follow up with another user about a specific posting, not to send
spam/phising or collect personal information from someone who hasn't
agreed to that.
We use a number of mechanisms (encryption, passwords, physical security)
to protect the security and integrity of your personal information against
unauthorized access and disclosure.<br><br> Unfortunately, no data transmission
over the internet can be guaranteed to be completely secure. So while we
strive to protect such information, we cannot ensure or warrant the security
of any information you transmit to us and you do so at your own risk. Once
any personal information comes into our possession, we will take reasonable
steps to protect that information from misuse and loss and from
unauthorised access, modification or disclosure.<br><br> Vendors who use any of the features on Rawmet24.com agree and accept
that they have been fully informed by Rawmet24.com that the use of
features may lead to publication of any personal information posted by them
while using any specific feature on Rawmet24.com. Users further agree that
the authenticity of, and consequences from the posting by users of any
personal information of themselves or any other person, are the sole
responsibility of the user.<br><br> Users further agree and accept that the terms of
the Privacy Policy will be applicable to the use of all features, existing and
new. However, the Users agree and accept that confidentiality of
information posted on such features has been waived by the Users of such
features themselves. <br><br>We may update, upgrade, modify (partially &/or fully) this policy at any
time, with updates taking effect when you next visit or after 7 days, whichever is sooner. If we or our corporate affiliates are involved in a
merger or acquisition, we may share personal information with another
company, but this policy will continue to apply. Send questions about this
policy to support@Rawmet24.com</p> 
            
            
            
            </div></div>
    
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
            <a href="#" class="text-white">Privacy Policy</a>
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


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c68315d0b4f26b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>