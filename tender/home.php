<?php
session_start();
// print_r($_SESSION);
// die;
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
  <link rel="stylesheet" href="css/reboot.scss">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    nonce="10103964-004b-4a99-b2c8-e02088e28228">(function (w, d) { !function (bg, bh, bi, bj) { bg[bi] = bg[bi] || {}; bg[bi].executed = []; bg.zaraz = { deferred: [], listeners: [] }; bg.zaraz.q = []; bg.zaraz._f = function (bk) { return function () { var bl = Array.prototype.slice.call(arguments); bg.zaraz.q.push({ m: bk, a: bl }) } }; for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm); bg.zaraz.init = () => { var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj), bp = bh.getElementsByTagName("title")[0]; bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text); bg[bi].x = Math.random(); bg[bi].w = bg.screen.width; bg[bi].h = bg.screen.height; bg[bi].j = bg.innerHeight; bg[bi].e = bg.innerWidth; bg[bi].l = bg.location.href; bg[bi].r = bh.referrer; bg[bi].k = bg.screen.colorDepth; bg[bi].n = bh.characterSet; bg[bi].o = (new Date).getTimezoneOffset(); if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({ ...bu[1], ...bv[1] }))))) zaraz.set(bt[0], bt[1], { scope: "page" }); bg[bi].q = []; for (; bg.zaraz.q.length;) { const bw = bg.zaraz.q.shift(); bg[bi].q.push(bw) } bo.defer = !0; for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => { try { bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by)) } catch { bg[bi]["z_" + by.slice(7)] = bx.getItem(by) } })); bo.referrerPolicy = "origin"; bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi]))); bn.parentNode.insertBefore(bo, bn) };["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>

</head>

<body>
  <style>
    .scroller {
      height: 300px !important;
      width: auto;
      overflow-y: scroll !important;
      overflow-x: hidden !important;
      scroll-snap-type: y mandatory !important;
    }

    .scroller section {
      scroll-snap-align: start !important;
    }
  </style>
  <div class="strip">

 
    
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
.auction-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.countdown-btn {
  padding: 5px;
  border-color: #0c0c0c;
  border-radius: 20px;
  color: #333131;
  background-color: #ffffff;
  margin-right:20px;

}
.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
  }
.tender-header,
.deal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.bor {
    border: 1px solid #858282;
    border-radius: 5px;
    margin-bottom: 18px;
    padding:7px;
    overflow-y: hidden;
    margin-left: 1%;
    margin-right: 2%;
  }
  h1{
    font-size: 28px;

  }
  
  
  h2{
    font-size: 23px;
    font-family: 'Montserrat', sans-serif;
    color:#595a5e;
    font-weight: bold;
  }
  h6{
    font-size: 15px;
  }
  h5{
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
    color:#595a5e;
    font-weight: bold;
 
  }
  h4{
    font-size: 13px
  }
  h3{
    font-size: 16px;
    padding:10px;
    color:#595a5e;
    font-family: Arial, Helvetica, sans-serif;
  }
  .vl {
  border-left: 1px solid rgb(184, 176, 176);
  height: 230px;
}

.vl2 {
  border-right: 1px solid rgb(185, 179, 179);
  height: 230px;
}
  .tft {
  color: white;
  font-size: 20px;
  text-shadow: -1px 1px 0 #004085,
                1px 1px 0 #004085,
               1px -1px 0 #004085,
              -1px -1px 0 #004085;
  }
  .bor:nth-child(even) {
    background-color: #f2f2f2;
}
.bor:nth-child(odd) {
    background-color: white;
} 
.last-day {
  background-color: red;
  color: white;
}

.imgg{
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
  margin-bottom: -20px;
  margin-left:-10px;
  
}
.dropdown-item:hover{
  background-color:#3b8beb;
  color:#fff;

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
    <a style="color:#fff; margin-right"  href="https://wa.me/9945454505"><i class=" fa-solid fa-brands fa-whatsapp"></i> Whatsapp Number: 9945454505</a>  
  <a style="color:#fff;" href="tel:9606800462" style="margin-right:5px">9606800462</a> 
  <a style="color:#fff;" href="tel:8123010365" ><i class="fa-solid fa-phone"></i>&nbsp Helpline Number: 8123010365,</a>
    
   
     </div>
  

<!-- ============================================mobile-view===============================================-->
<div class="containerr strip mobile-view">
  <marquee direction="left" height="5%" style="white-space: nowrap;">
    <a style="color:#fff;" href="tel:8123010365" style="margin-right:-5px"><i class="fa-solid fa-phone"></i> Helpline Number: 8123010365, </a> 
    <a style="color:#fff;" href="tel:9606800462">9606800462</a> 
    <a style="color:#fff;" href="https://wa.me/9945454505" ><i class="fa-solid fa-brands fa-whatsapp"></i>Whatsapp Number: 9945454505</a>
  </marquee>
</div>


<section class="ftco-section" style="padding-top: 5px;">

<section
           class="d-flex justify-content-between p-3"
           style="background-color:white;"
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
                <a href="excluedeal_page.php?g=<?php echo $id; ?>"><?php echo $r['material']; ?></a>
                <?php
            }
        } else {
            echo "<p>No blocked deals.</p>";
        }
        ?>
    </div>
</div> 
         &nbsp&nbsp Hi! <?php echo $_SESSION['buyer_name'];?>&nbsp&nbsp
              <button class="btn btn-primary" >
                <a href="signout.php" style="color:white;"> Signout </a></button>
                <?php
                  $nm=$_SESSION['buyer_name'];
                    $sql = "select * from buyer_dashboard where name='$nm'";

                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      
                    $ro = mysqli_fetch_assoc($result);
                      
                        ?>
              <!--<a href="profile.php?g=<?php echo $ro['id'];?>"><i class='ii bx bxs-user-circle bx-md '></i></a> -->
 
<?php } ?>
          </p></div>
            
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
            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tender.php" class="nav-link">Tenders</a></li>
            <li class="nav-item"><a href="auction.php" class="nav-link">Auctions</a></li>
            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item"><a href="metalsearch.php" class="nav-link">Metal Prices</a></li>
            <li class="nav-item"><a href="info_page.php" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.html" class="nav-link">Premium</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <br>
  <section class="home"> 
    <div class="container " style="margin-top:40px;">
    <div class="dropdown desktop-view" style=" margin-left:40px;">
  <button style="padding:10px;" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Top Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="category.php?type=Consultancy Tenders">Consultancy Tenders</a>
    <a class="dropdown-item" href="category.php?type=Procurement Tenders">Procurement Tenders </a>
    <a class="dropdown-item" href="category.php?type=Manufacturing Tenders">Manufacturing Tenders</a>
    <a class="dropdown-item" href="category.php?type=Disposal Tenders">Disposal Tenders </a>
    <a class="dropdown-item" href="category.php?type=Business Tenders">Business Tenders </a>  
    <a class="dropdown-item" href="category.php?type=Public Tenders">Public Tenders </a>


  </div>
</div>

      <div class="row ">
        
        <div class="col-12 col-md-10 col-lg-8">  
                 

            <div class="card card-sm desktop-view" style="margin-right:-80px; margin-top:-70px; margin-left:30px">
              <div class="card-body row no-gutters align-items-center" style="background-color: #eae9e9;">
                <div class="col-auto">
                  <i class="fa fa-search" style="font-size: 30px; margin-right: 8px;"></i>
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" type="search" id="meterial"
                    placeholder="Search for Tender, Auction & Deals" style="padding:10px 0px 10px 6px; margin-right: 100px;">
                </div>
                <select name="sort" id="tender" style="padding:13px; margin-left: 15px; margin-right: 8px; border-radius:3px;"
                  placeholder="Search ">
                  
                  <option value="tenders">Tenders</option>
                  <option value="auction">Auctions</option>
                  <option value="deals">Deals</option>

                </select>

                <div class="col-auto">
                  <button class="btn btn-primary" onclick="myFunction()" type="submit">Search</button>
                </div>
              </div>
            
        </div>
      </div>
    </div>
    



<!-- =========================================================mobile-view============================================================== -->


   

      <div class="row ">
        
        <div class="col-12 col-md-10 col-lg-8">  
                 

            <div class="card card-sm  mobile-view" style="margin-top:-40px;">
              <div class="card-body row no-gutters align-items-center" style="background-color: #eae9e9;">
                <div class="col-auto">
                  <i class="fa fa-search" style="font-size: 30px; margin-right: 8px;"></i>
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" type="search" id="meterial"
                    placeholder="Search for Tender, Auction & Deals" style="padding:10px 0px 10px 6px; margin-right: 100px;">
                </div>
                <select name="sort" id="tender" style="padding:13px; margin-left: 15px; margin-right: 8px; border-radius:3px;"
                  placeholder="Search ">
                  
                  <option value="tenders">Tenders</option>
                  <option value="auction">Auctions</option>
                  <option value="deals">Deals</option>

                </select>

                <div class="col-auto">
                  <button class="btn btn-primary" onclick="myFunction()" type="submit">Search</button>
                </div>
              </div>
            
        </div><center>
        <div class="dropdown mobile-view" >
  <button style="padding:10px;" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Top Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="category.php?type=Consultancy Tenders">Consultancy Tenders</a>
    <a class="dropdown-item" href="category.php?type=Procurement Tenders">Procurement Tenders </a>
    <a class="dropdown-item" href="category.php?type=Manufacturing Tenders">Manufacturing Tenders</a>
    <a class="dropdown-item" href="category.php?type=Disposal Tenders">Disposal Tenders </a>
    <a class="dropdown-item" href="category.php?type=Business Tenders">Business Tenders </a>  
    <a class="dropdown-item" href="category.php?type=Public Tenders">Public Tenders </a>


  </div>
</div></center>
      </div>
    </div>
   
    <div class="desktop-view">

<img class="d-block w-100 " src="https://sppp.assam.gov.in/img/enbanner4.e246bb3c.jpg">

</div>

<!-- =========================================================mobile-view============================================================== -->
<br>
 <div class="mobile-view">

<img class="d-block w-100 " src="image/banner.png">

</div>
<br>

    <center style="color: #3b8beb;">
      <div class="container">
        <div class="row">
        <div class="col-md-4">
          <div class="card">
          <div class="card-body">
          
            <h1><span class="counter">
            <?php 
                $sql = "select * from tenders";
                $result = mysqli_query($con, $sql);
                echo ($result->num_rows-1)."+";
                //echo "+";
                //die;
            ?>
            
            
            </span></h1>
            <h5>Tenders</h5>
            <i class="fa fa-users "></i>
          </div></div></div>
          <div class="col-md-4">
          <div class="card">
          <div class="card-body">
          
            <h1><span class="counter"><?php 
                $sql = "select * from auction";
                $result = mysqli_query($con, $sql);
                echo ($result->num_rows-1)."+";
                //echo "+";
                //die;
            ?></span></h1>
            <h5>Auctions</h5>
            <i class="fa fa-desktop"></i>
          </div></div></div>
          <div class="col-md-4">
          <div class="card">
          <div class="card-body">
            <h1><span class="counter"><?php 
                $sql = "select * from deals";
                $result = mysqli_query($con, $sql);
                echo ($result->num_rows-1)."+";
                //echo "+";
                //die;
            ?></span></h1>
            
            <h5>Deals</h5>
            <i class="fa fa-user"></i>
          </div>
        </div>
      </div></div></div>
    </center>



    <br>
    <!-- <center>
      <h2 style="color: #3b8beb;">TOP CATEGORIES</h2>
    </center><br>
    <div class="grey-bg container-fluid">

      <section id="minimal-statistics">
        <div class="large">
          <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">

              <div class="card">
                <div class="card-content">
                  <a href="category.php?type=Consultancy Tenders">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-user secondary font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3>
                          <?php 
                $sql = "select * from tenders where category='Consultancy Tenders'";
                $result = mysqli_query($con, $sql);
                //print_r($result);
                echo ($result->num_rows);
                //echo "+";
                //die;
            ?>
                          </h3>
                          <span>
                          Consultancy Tenders
                          </span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.php?type=Procurement Tenders">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="bx bxs-truck warning font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3> <?php 
                $sql = "select * from tenders where category='Procurement Tenders'";
                $result = mysqli_query($con, $sql);
                //print_r($result);
                echo ($result->num_rows);
                //echo "+";
                //die;
            ?></h3>
                          <span>Procurement Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.php?type=Manufacturing Tenders">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-settings info font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                          <h3> <?php 
                $sql = "select * from tenders where category='Manufacturing Tenders'";
                $result = mysqli_query($con, $sql);
                //print_r($result);
                echo ($result->num_rows);
                //echo "+";
                //die;
            ?></h3>
                          <span>Manufacturing Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
      </section>

      <section id="minimal-statistics">
        <div class="large">
          <div class="row">
            <div class="col-xl-4 col-sm-6 col-12">

              <div class="card">
                <div class="card-content">
                  <a href="category.php?type=Disposal Tenders">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-trash primary font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                        <h3> <?php 
                $sql = "select * from tenders where category='Disposal Tenders'";
                $result = mysqli_query($con, $sql);
                //print_r($result);
                echo ($result->num_rows);
                //echo "+";
                //die;
            ?></h3>
                          <span>Disposal Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.php?type=Business Tenders">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-briefcase success font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                        <h3> <?php 
                $sql = "select * from tenders where category='Business Tenders'";
                $result = mysqli_query($con, $sql);
                //print_r($result);
                echo ($result->num_rows);
                //echo "+";
                //die;
            ?></h3>
                          <span>Business Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <a href="category.php?type=Public Tenders">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="align-self-center">
                          <i class="icon-users danger font-large-4 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                        <h3> <?php 
                $sql = "select * from tenders where category='Public Tenders'";
                $result = mysqli_query($con, $sql);
                //print_r($result);
                echo ($result->num_rows);
                //echo "+";
                //die;
            ?></h3>
                          <span>Public Tenders</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
      </section>

      
      <br><br>
    </div>
  </section> -->





<div class="container " style="padding: 5px 20px 40px 20px; border-color: #000000; border-radius: 20px; color: #333131; background-color: #ffffff; background-image: linear-gradient(to right,#000E6F, #24C6DC);"><img class="imgg" src="image/crown.png" width="80px;">
  <h1 class="GFG" style="color: #fff; font-family: 'Montserrat', sans-serif; margin-left:30px;">Deals</h1>
  <div class="card-body">
    <article class="scroller">
      
                                    
      <table class="table table-bordered table-responsive" style="background-color:#fff;">
  <thead >
    <tr>
      <th scope="col">RLD</th>
      <th scope="col">Location</th>
      <th scope="col">Material</th>
      <th scope="col">Quantity</th>
      <th scope="col">Bid Before</th>
      <th scope="col">Deal Value</th>
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <?php
      
      $sql = "SELECT * FROM deals";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                              $radNumber = 181204; 
                                foreach ($result as $row):
                                  $endDatetime = new DateTime($row['dealDatetime']);
                                  $currentDate = new DateTime();
                                  $interval = $currentDate->diff($endDatetime);
                                  $daysToGo = $interval->format('%a');
                          
                                  $status = ($currentDate > $endDatetime) ? " ago" : " to go";
                                  $daysText = ($status >= " ago") ? "Days" : "Days";
                                  if ($daysToGo == 0) {
                                    $daysToGo ='Last Day';
                                    $status='';
                                    $daysText=''; // Replace 0 with 'Last Day'
                                  } 
                                  if ($status == " ago") {
                                    continue; // Skip the iteration and move to the next item
                                  }
                                  ?>
  <tbody>
    <tr >
      <th scope="row"><?php echo $radNumber++; ?></th>
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['material']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo date('Y-m-d', strtotime($row['dealDatetime'])); ?></td>
      <td>₹<?php echo $row['dealValue']; ?></td>
      <td><a href="deal_page.php?g=<?php echo $row['id']; ?>">
                       <button style="padding:5px; border-radius: 6px;font-size: 100%; " class="btn btn-primary" type="submit">View Deal</button>
                    </a></td>
    </tr>
    <?php
              endforeach;
           } 
      ?>
  </tbody>
</table>
             
      
      </article>
    </div></div></div>

<br><br>

<div class="container" style="padding: 2%; border-color: #000000; border-radius: 20px; color: #333131; background-color: #ffffff;">
  <h2 class="GFG" style="color: #3b8beb; font-family: 'Montserrat', sans-serif;">Auction</h2>
  <div class="card-body">
    <article class="scroller">
      <table class="table table-bordered table-responsive" style="background-color:#fff;">
        <thead style="background-color:#3b8beb; color:#fff;">
          <tr>
            <th scope="col">RAD</th>
            <th scope="col">Location</th>
            <th scope="col">Material</th>
            <th scope="col">Quantity</th>
            <th class="w-25">Bid Before</th>
            <th class="w-25">Auction Value</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
          $sql = "SELECT * FROM auction";
          $result = mysqli_query($con, $sql);
          if ($result) {
            $radNumber = 180104; // Starting RAD number
            while ($row = mysqli_fetch_assoc($result)) {
              $endDatetime = new DateTime($row['endDatetime']);
              $currentDate = new DateTime();
              $interval = $currentDate->diff($endDatetime);
              $daysToGo = $interval->format('%a');
              $status = ($currentDate > $endDatetime) ? " ago" : " to go";
              $daysText = ($status >= " ago") ? "Days" : "Days";
              if ($daysToGo == 0) {
                $daysToGo = 'Last Day';
                $status = '';
                $daysText = ''; // Replace 0 with 'Last Day'
              }
              if ($status == " ago") {
                continue; // Skip the iteration and move to the next item
              }
        ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $radNumber++; ?></th>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['material']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo date('Y-m-d', strtotime($row['endDatetime'])); ?></td>
            <td>₹<?php echo $row['aucValue']; ?></td>
            <td>
              <a href="auction_page.php?g=<?php echo $row['id']; ?>">
                <button style="padding:5px; border-radius: 6px; font-size: 100%;" class="btn btn-primary" type="submit">View Auction</button>
              </a>
            </td>
          </tr>
        <?php
            }
          } 
        ?>
        </tbody>
      </table>
    </article>
  </div>
</div>



<br><br>



    <!-- <article class="scroller">
  <?php
      $sql = "select * from auction";
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $endDatetime = new DateTime($row['endDatetime']);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($endDatetime);
            $daysToGo = $interval->format('%a');
    
            $status = ($currentDate > $endDatetime) ? " ago" : " to go";
             $daysText = ($status >= " ago") ? "Days" : "Days";
                                  if ($daysToGo == 0) {
                                    $daysToGo ='Last Day';
                                    $status='';
                                    $daysText=''; // Replace 0 with 'Last Day'
                                  } 
                                  if ($status == " ago") {
                                    continue; // Skip the iteration and move to the next item
                                  }
    
            ?>
            <div class="row bor">
     <div class="col-sm-12 col-md-3 vl2">
                <h6 style="margin-top:20px;">RLD: 181204</h6>
                <hr>
                <h5>Category: Ferrous </h5> 

                <h5 style="color:#3b8beb; "><i class='bx bxs-map'></i><?php echo $row['location']; ?></h5>
                <a href="auction_page.php?g=<?php echo $row['id']; ?>"><button  style="padding: 5px; border-radius:6px;font-size: 100%; margin-top:30px;" class="btn btn-primary" type="submit">View Deal</button></h6></a>
               </div>
     <div class="col-sm-12 col-md-6">
               <h2 style="margin-top:20px;"> <?php echo $row['material']; ?> </h2> 
               <h6 style="color:#444f68; padding: 4px;">Description:<br><br> <?php echo $row['aucDescription']; ?></h6>
        </div> 

    <div class="col-sm-12 col-md-3 vl">
            
            <center><button style="padding:5px ;border-color: #0c0c0c; border-radius: 20px; color: #333131; margin-top:20px;"><?php echo $daysToGo . ' ' . $daysText . $status;?></button>
                  <div class="" style="padding:12px ;border-color: #0c0c0c;  color: #333131;margin-top:20px; "><h4>Bid Before: <?php echo $row['endDatetime']; ?> </h4><h3>Quantity: 34kgs<br>Deal Value: ₹<?php echo $row['aucValue']; ?></h3></div></center>
                         
          
                  </div>
      </div>
             <?php
        }
           } 
      ?>
      
      </article>
    </div></div></div>

<br> -->


 <div class="container" style="padding: 3%; border-color: #000000; border-radius: 20px; color: #333131; background-color: #ffffff;">
  <h2 class="GFG" style="color: #3b8beb; font-family: 'Montserrat', sans-serif;">Tenders</h2>
  <div class="card-body">

  <article class="scroller">
      
                                    
      <table class="table table-bordered table-responsive" style="background-color:#fff;">
<thead style="background-color:#3b8beb; color:#fff;">
<tr>
<th scope="col">RTD</th>
            <th scope="col">Location</th>
            <th scope="col">Material</th>
            <th scope="col">Quantity</th>
            <th class="w-25">Bid Before</th>
            <th class="w-25">Tender Value</th>
            <th scope="col">Action</th>


</tr>
</thead>
<?php
      $sql = "select * from tenders";
      $result = mysqli_query($con, $sql);

      if ($result) {
        $radNumber = 182004;
        while ($row = mysqli_fetch_assoc($result)) {
            $endDatetime = new DateTime($row['endDatetime']);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($endDatetime);
            $daysToGo = $interval->format('%a');
    
            $status = ($currentDate > $endDatetime) ? " ago" : " to go";
             $daysText = ($status >= " ago") ? "Days" : "Days";
                                  if ($daysToGo == 0) {
                                    $daysToGo ='Last Day';
                                    $status='';
                                    $daysText=''; // Replace 0 with 'Last Day'
                                  } 
                                  if ($status == " ago") {
                                    continue; // Skip the iteration and move to the next item
                                  }
    
            ?>
<tbody>
<tr >
<th scope="row"><?php echo $radNumber++; ?></th>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['material']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo date('Y-m-d', strtotime($row['endDatetime'])); ?></td>
<td> ₹<?php echo $row['tenderValue']; ?></td>
<td><a href="tend_page.php?g=<?php echo $row['id']; ?>">
<button style="padding:5px; border-radius: 6px;font-size: 100%; " class="btn btn-primary" type="submit">View Tender</button>
</a></td>
</tr>
<?php
        }
           } 
      ?>
</tbody>
</table>


</article>
</div></div></div>

<br><br>




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
function myFunction() {
  var val = document.getElementById("tender").value;
  var idval =document.getElementById("meterial").value;
  if(idval==""){
    alert("enter values in search");
return false;
  }
  //alert(idval);return false;
  if (val=="tenders") {
    //alert("tenders");
    window.location.replace('tender_search.php?search='+idval);
    return false;
  } else  if (val=="auction") {
    //alert("tenders");
    window.location.replace('auction_search.php?search='+idval);
    return false;
  }else if (val=="deals") {
    //alert("tenders");
    window.location.replace('deals_search.php?search='+idval);
    return false;
  }
}
</script>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
    integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
    data-cf-beacon='{"rayId":"7c68315d0b4f26b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}'
    crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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