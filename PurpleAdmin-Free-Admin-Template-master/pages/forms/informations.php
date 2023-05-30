
<?php

session_start();
if (!isset($_SESSION['name'])){
  header("Location: /Rawmet24/PurpleAdmin-Free-Admin-Template-master/pages/samples/login.html");

}
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Information Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <style>
    a{
      color: #ffffff;
      text-decoration: none;
    }
    a:hover{
      color: #ffffff;
    }
    
    
      </style>
  <body>


    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
               
           
           
            
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/logoraw.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Rawmet</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="elements.php">
                  <i class="mdi mdi-login me-2 text-primary"></i>Register now </a>
                   <a class="dropdown-item" href="../../signout.php">
                    <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/logoraw.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">RAWMET </span>
                  <span class="text-secondary text-small">Information System</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auctions.php">
                <span class="menu-title">Auctions</span>
                <i class="mdi mdi-chart-areaspline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tenders.php">
                <span class="menu-title">Tenders</span>
                <i class="mdi mdi-animation menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="deals.php">
                <span class="menu-title">Deals</span>
                <i class="mdi mdi-drawing-box menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exclusivedeals.php">
                <span class="menu-title">Exclusive Deals</span>
                <i class="mdi mdi-diamond menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="informations.php">
                  <span class="menu-title">Information</span>
                  <i class="mdi mdi-note menu-icon"></i>
                </a>
              </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                <h6 class="font-weight-normal mb-3">Categories</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4"><a href="categories.php">+ Add a Category</a></button>
                <div class="mt-4">
                
                 
                </div>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Information Details</h4>
                    <form action="information.php" method="post" class="forms-sample">
                  
                      
                      <div class="form-group">
                        <label for="infoId">INFORMATION NUMBER</label>
                        <input type="text" class="form-control" name="infoId" placeholder="INFORMATION NUMBER" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="showName">TRADE SHOW</label>
                        <input type="text" class="form-control" name="showName" placeholder="TRADE SHOW" required>
                      </div>
                      
                     
                      <div class="form-group">
                        <label for="dateTime">DATE and TIME </label>
                        <input type="datetime-local" class="form-control" name="dateTime" placeholder="Show Date and Time" required>
                      </div>
                     
                      <div class="form-group">
                        <label for="profile">EXHIBITOR PRODUCT PROFILE</label>
                        <input type="text area" class="form-control" name="profile" placeholder="EXHIBITOR PRODUCT" required>
                      </div>
                     <br>
                     <div class="form-group">
                      <label for="organizedBy">ORGANIZED BY</label>
                      <input type="text" class="form-control" name="organizedBy" placeholder="ORGANIZED BY" required>
                    </div>
                    <div class="form-group">
                      <label for="organizedAdd">ORGANIZED ADDRESS</label>
                      <input type="text" class="form-control" name="organizedAdd" placeholder="ORGANIZED ADDRESS" required>
                    </div>
                  
                      <div class="form-group">
                        <label for="venue">VENUE</label>
                        <input type="text" class="form-control" name="venue" placeholder="VENUE" required>
                      </div>
                      <div class="form-group">
                        <label for="map">GOOGLE MAPS</label>
                        <input type="text" class="form-control" name="map" placeholder="GOOGLE MAPS" required>
                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div></div></div></div></div>


          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © rawmet24.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="https://www.rawmet24.com/" target="_blank"></a>  rawmet24.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>