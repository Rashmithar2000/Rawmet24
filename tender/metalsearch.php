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
<!-- Add these links in the head section of your HTML document -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href="metalprice.css">
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
    <a href="#"><i class="fa-solid fa-phone"></i>&nbsp Helpline No: 08042332722</a>
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
      
        <?php }else{ ?>
          <div class="user" style="padding-top:25px;padding-right:30px"> <p style="color:#3b8beb;">
          Hi! <?php echo $_SESSION['buyer_name'];?>&nbsp&nbsp
              <button class="btn btn-primary" ><a href="signout.php" style="color:white;"> Signout </a></button>

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
            <li class="nav-item "><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tender.php" class="nav-link">Tenders</a></li>

            <li class="nav-item"><a href="auction.php" class="nav-link">Auctions</a></li>
            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="exclusivedeals.php" class="nav-link">Exclusive Deals</a></li>
            <li class="nav-item active"><a href="#" class="nav-link">Metal Prices</a></li>
            <li class="nav-item"><a href="info_page.php" class="nav-link">Information Document</a></li>
            <li class="nav-item"><a href="price.php" class="nav-link">Premium</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </section>
  <br>
  <section class="home">

    <div class="container">

      <div class="row ">
        <div class="col-12 col-md-10 col-lg-8">
          <form method="GET" action="metalsearch.php?metal=Copper&category=Cu1">

            <form class="card card-sm">
              <div class="card-body row no-gutters align-items-center" style="background-color: #eae9e9;">


                Metal <select name="metal" id="id_metal" data-category-id='id_category' class='dependent-selects__metal'
                  style="padding:13px; margin-left: 15px; margin-right: 8px; border-radius:3px;" placeholder="Search ">
                  <option value="">select one</option>
                  <?php
                  $sql = "SELECT DISTINCT metal FROM `metal`;";
                  $result = mysqli_query($con, $sql);
                  if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {

                      ?>
                      <option value="<?php echo $row['metal']; ?>"><?php echo $row['metal']; ?></option>
                    <?php }
                  }
                  ?>
                </select>

                <select name="category" id="id_category" class='dependent-selects__category'
                  style="padding:13px; margin-left: 15px; margin-right: 8px; border-radius:3px;" placeholder="Search ">
                  <option value="">select one</option>
                  <?php $sql = "select * from metal";
                  $result = mysqli_query($con, $sql);
                  if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                      //print_r($row);
                      //die;
                      ?>
                      <option value="<?php echo $row['scrap_metal']; ?>"><?php echo $row['scrap_metal']; ?></option>
                    <?php }
                  }
                  ?>
                </select>


                <div class="col-auto">
                  <button class="btn btn-primary" id="search" type="submit">Search</button>
                </div>

              </div>
            </form>
        </div>
      </div>
    </div>
    <br>
   
    <div class="container">
  <div class="card">
    <div class="card-body">
      <div id="wrapper">
        <h1>Metals Futures Prices</h1>

        <div class="table-responsive">
          <table id="keywords" class="table" cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th onclick="sortTable(0)"><span>ID</span></th>
                <th onclick="sortTable(0)"><span>Metal</span></th>
                <th onclick="sortTable(0)"><span>Scrap Metal</span></th>
                <th onclick="sortTable(0)"><span>Price</span></th>
                <th onclick="sortTable(0)"><span>TimeStamp</span></th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (isset($_GET['metal']) && isset($_GET['category'])) {
                $a = $_GET['metal'];
                $b = $_GET['category'];
                $sql = "select * from metal WHERE metal='$a' AND scrap_metal='$b'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td class="lalign">
                        <?php echo $row['id']; ?>
                      </td>
                      <td>
                        <?php echo $row['metal']; ?>
                      </td>
                      <td>
                        <?php echo $row['scrap_metal']; ?>
                      </td>
                      <td>
                        <?php echo $row['price']; ?>
                      </td>
                      <td>
                        <?php echo date('Y-m-d', strtotime($row['timestamp'])); ?>
                      </td>
                    </tr>
                    <?php
                  }
                }
              } else {
                $sql = "select * from metal";
                $result = mysqli_query($con, $sql);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <td class="lalign">
                        <?php echo $row['id']; ?>
                      </td>
                      <td>
                        <?php echo $row['metal']; ?>
                      </td>
                      <td>
                        <?php echo $row['scrap_metal']; ?>
                      </td>
                      <td>
                        <?php echo $row['price']; ?>
                      </td>
                      <td>
                        <?php echo date('Y-m-d', strtotime($row['timestamp'])); ?>
                      </td>
                    </tr>
                    <?php
                  }
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>















    
    <script>
      function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("keywords");
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc";
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
          //start by saying: no switching is done:
          switching = false;
          rows = table.rows;
          /*Loop through all table rows (except the
          first, which contains table headers):*/
          for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /*check if the two rows should switch place,
            based on the direction, asc or desc:*/
            if (dir == "asc") {
              if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
              }
            } else if (dir == "desc") {
              if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
              }
            }
          }
          if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            //Each time a switch is done, increase this count by 1:
            switchcount++;
          } else {
            /*If no switching has been done AND the direction is "asc",
            set the direction to "desc" and run the while loop again.*/
            if (switchcount == 0 && dir == "asc") {
              dir = "desc";
              switching = true;
            }
          }
        }
      }
    </script>

    <br>
  </section>

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
          <p><i class="fa fa-phone" aria-hidden="true"></i> +91 8766443234</p>
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
    $(document).on("click", "#search", function (e) {
      e.preventDefault();

      var std = $("#select_std").val();
      var res = $("#select_res").val();

      if (std !== "" && res !== "") {
        $('#record_table').DataTable().destroy();
        fetch(std, res);
      } else if (std !== "" && res == "") {
        $('#record_table').DataTable().destroy();
        fetch(std, '');
      } else if (std == "" && res !== "") {
        $('#record_table').DataTable().destroy();
        fetch('', res);
      } else {
        $('#record_table').DataTable().destroy();
        fetch();
      }
    });</script>

  </div>
  <script>
    $(document).ready(function() {
      $('#keywords').DataTable();
    });
  </script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  
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







