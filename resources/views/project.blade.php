<!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
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
        <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
    <ul class="nav">
      
      <li class="nav-item nav-category">
        <span class="nav-link">Coordinator</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/projects">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Projects</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/add">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Add Projects</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/lecturers">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Lecturers</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/students">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Students</span>
        </a>
      </li>
  </nav>
            <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
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
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Profile</th>
                            <th>VatNo.</th>
                            <th>Created</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>53275532</td>
                            <td>15 May 2017</td>
                            <td><label class="badge badge-warning">In progress</label></td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>53275533</td>
                            <td>14 May 2017</td>
                            <td><label class="badge badge-info">Fixed</label></td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>53275534</td>
                            <td>16 May 2017</td>
                            <td><label class="badge badge-success">Completed</label></td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td>20 May 2017</td>
                            <td><label class="badge badge-warning">In progress</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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
            @include("admin.adminscript")
      </body>
    </html>
