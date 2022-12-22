<!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FYP SYSTEM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.png" />
      </head>
      <body>
        
      <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
              <div class="col-md-12 p-0 m-0">
              </div>
            </div>
            <!-- partial:partials/_sidebar.html -->
            <!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="/admin/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
    <ul class="nav">
      
      <li class="nav-item nav-category">
        <span class="nav-link">Lecturer View</span>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="/studentslist">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Students List</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/examineelist">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Examinee List</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="/superviseelist">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Supervise</span>
        </a>
      </li>
  </nav>

            <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
       <ul class="navbar-nav navbar-nav-right">
          
       <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
              <div class="navbar-profile">
                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
              </div>
            </a> 
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
              <h6 class="p-3 mb-0">Profile</h6>
              <div class="dropdown-divider"></div>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item preview-item"  href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                  </div>
                </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
              </a>
            </form>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-format-line-spacing"></span>
        </button>
      </div>
    </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="row ">
                  <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Supervisee</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Duration</th>
                            <th>Progress</th>
                            <th>Status</th>
                          </tr>
                        </thead>

                        <tbody>

                        @foreach($supervisee as $sv)

                        <form action="/updateSV" method="post">
                        @csrf

                          <tr>
                            <input type="hidden" name="project_id" value="{{$sv['project_id']}}">
                            <td> <input type="date" name="start_date"> </td>
                            <td> <input type="date" name="end_date"> </td>
                            <td> <input type="text" name="duration"> </td>
                            <td> <input type="text" name="progress"> </td>
                            <td> <input type="text" name="status"> </td>
                          </tr>

                        <tr>
                        <td>
                            <button class="btn btn-dark">Cancel</button>
                            <button type="submit" class="btn btn-primary me-2">Update</button>
                        </td>
                        </tr>
                        </form>
                        @endforeach

                      <br>



                    </div>
                  </div>
                  <br>
                </div>
              </div>
          </div>

<!-- content-wrapper ends -->              
                <!-- partial -->
                </div>
                <!-- main-panel ends -->
              </div>
              <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin/assets/js/off-canvas.js"></script>
    <script src="/admin//assets/js/hoverable-collapse.js"></script>
    <script src="/admin/assets/js/misc.js"></script>
    <script src="/admin/assets/js/settings.js"></script>
    <script src="/admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
      </body>
    </html>
