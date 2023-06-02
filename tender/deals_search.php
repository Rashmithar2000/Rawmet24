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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Deals</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/_buttons.scss">
<link rel="stylesheet" href="css/buttons.scss">
<link rel="stylesheet" href="css/auction.css">
<link rel="stylesheet" href="css/reboot.scss">
<!-- <link rel="stylesheet" href="css/buttons.scss"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<!-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css"> -->

<script nonce="10103964-004b-4a99-b2c8-e02088e28228">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
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
  <div id="typedtext" class="ml-5"  style="color: white;">
</div>
</div>
</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
  color: white;
}


@media screen and (max-width: 500px) {
  .strip a {
    float: none;
    display: block;
  }
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
</style>
<section class="ftco-section" style="padding-top: 5px;">
  
<section
           class="d-flex justify-content-between p-3"
           style="background-color:white"
           >
    <div class="me-5">
      <img src="image/rawmetlogo.jpeg" width="80px" height="auto" style="border-radius: 5px; margin-left: 40px;">
  
    </div>&nbsp   <p style=" position:absolute; margin-left:130px; margin-top: 25px;" class="tft desktop-view">RAWMET24</p>
    <?php 
       
       if(!isset($_SESSION['name'])){
 
       ?>
         <form class="form-inline" action="verify.php" method="post">
           <label for="email"></label>
           <input type="email" class="form-control" name="email" placeholder="Username" name="email">
           <label for="pwd"></label>&nbsp
           <input type="password" class="form-control" name="password" placeholder="Password" name="pswd">&nbsp&nbsp
           <div class="form-check">
 
           </div><br>
           <button class="btn btn-primary" type="submit">Sign in</button>
           <a href="signup.html" style="font-size: medium; padding: 20px; ">
             <i class="fa-solid fa-user-plus"></i>SignUp
           </a>
         </form>
       
       
         <?php }else{ ?>
          <div class="user" style="padding-top:25px;padding-right:30px"> <p style="color:#3b8beb;">
          Hi! <?php echo $_SESSION['name'];?>&nbsp&nbsp
              <button class="btn btn-primary" ><a href="signout.php" style="color:white;"> Signout </a></button>

?>
<h4>Hi! <?php echo $_SESSION['name'];?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h4>
<a href="signout.php"> Signout </a>

</div><?php
} ?>
</section>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container-fluid">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav m-auto">
<li class="nav-item "><a href="home.php" class="nav-link">Home</a></li>
<li class="nav-item "><a href="tender.php" class="nav-link">Tenders</a></li>

<li class="nav-item  "><a href="auction.php" class="nav-link">Auctions</a></li>
<li class="nav-item active "><a href="deals.php" class="nav-link">Deals</a></li>
<li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
<li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>
<li class="nav-item"><a href="info_page.php" class="nav-link">Information Document</a></li>
<li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>
</ul>
</div>
</div>
</nav>
</section>


<section class="home">
<br>
 <center>
 <h2 style="color: #7e828b;">DEALS</h2> </center>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <form action="deals_search.php?l=" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filter&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <button type="submit" class="btn btn-primary btn-sm float-end" >Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Location</h6>
                            <hr>
                            <?php

                            $brand_query = "SELECT * FROM location";
                            $brand_query_run = mysqli_query($con, $brand_query);

                            if (mysqli_num_rows($brand_query_run) > 0) {
                                foreach ($brand_query_run as $locationlist) {
                                    $checked = [];
                                    if (isset($_GET['locations'])) {
                                        $checked = $_GET['locations'];
                                    }
                                    ?>
                                    <div id="checkbox">
                                        <input type="checkbox" name="locations" value="<?= $locationlist['state_name']; ?>"
                                            <?php //if (in_array($locationlist['state_id'], $checked)) {
                                                //echo "checked";
                                            //} 
                                            ?>>
                                        <?= $locationlist['state_name']; ?>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "No locations Found";
                            }
                            ?>


                        </div>

                    </div>
                </form>
            </div>


            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                        if (isset($_GET['locations'])) {
                            $branchecked = [];
                            $branchecked[0] = $_GET['locations'];
                            //print_r($branchecked);die;
                            //echo $branchecked; die;
                            foreach ($branchecked as $rowbrand) {
                                 $sql = "SELECT * FROM deals WHERE aucLocation='".$rowbrand."'";

                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    foreach ($result as $row):
                                        ?>
                                       <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                                              <h6 style="color:#3b8beb; "> <i class='bx bxs-map'></i><?php echo $row['location'];?>| Biz value : <?php echo $row['expQuotation'];?> Bn | Bid Before : <?php echo $row['dealDatetime'];?> <button style="padding:5px ;border-color: #0c0c0c; border-radius: 20px; color: #333131; background-color: #ffffff; margin-left: 20px;">4 Days to go</button></h6>
                        <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">
                        MATERIAL:&nbsp<?php echo $row['material'];?><br><br>QUANTITY:&nbsp<?php echo $row['quantity'];?>
                        </h5>
    <p><?php echo $row['specification'];?></p>
   

    <a href="deal_page.php?g=<?php echo $row['id'];?>"><button class="btn btn-primary" type="submit">View Deal</button></a></h6>
                      </div>
                    </div>
                  </div>
                                        <?php
                                    endforeach;
                                } else{
                                  echo "No result is found";
                                }

                            }
                        } else {
                          if(isset($_GET['search'])){
                            $a = $_GET['search'];
                           
                            $sql = "select * from deals WHERE material LIKE '$a%' OR 	specification LIKE '$a%' ";
                               $result = mysqli_query($con, $sql);
                               //print_r($result);die;
                               if (mysqli_num_rows($result) > 0) {
                                 while ($row = mysqli_fetch_assoc($result)) {
                                   //print_r($row);die;
                                   ?>
                                    <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                                              <h6 style="color:#3b8beb; "> <i class='bx bxs-map'></i><?php echo $row['location'];?>| Biz value : <?php echo $row['expQuotation'];?> Bn | Bid Before : <?php echo $row['dealDatetime'];?> <button style="padding:5px ;border-color: #0c0c0c; border-radius: 20px; color: #333131; background-color: #ffffff; margin-left: 20px;">4 Days to go</button></h6>
                        <h5 style="color:#8590aa; font-family: 'Montserrat', sans-serif;">
                        MATERIAL:&nbsp<?php echo $row['material'];?><br><br>QUANTITY:&nbsp<?php echo $row['quantity'];?>
                        </h5>
    <p><?php echo $row['specification'];?></p>
   

    <a href="deal_page.php?g=<?php echo $row['id'];?>"><button class="btn btn-primary" type="submit">View Deal</button></a></h6>
                      </div>
                    </div>
                  </div>
                                   <?php
                                 }
                               }else{
                                echo "No result is found";
                               }
                     
                     
                             }}
                        ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
    <center style="color: #3b8beb;"> 


    <!-- Remove the container if you want to extend the Footer to full width. -->
   
    <br><br>


<!-- Footer -->


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
            <a href="aboutus.php" class="text-white">About Us</a>
            <a href="aboutus.php" class="text-white">About Us</a>
          </p>
       
          <p>
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

// <script src="js/toggle.js"></script>
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