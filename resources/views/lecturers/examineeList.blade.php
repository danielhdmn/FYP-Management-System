<!DOCTYPE html>
    <html lang="en">
      <head>
        @include("lecturers.lecturercss")
      </head>
      <body>
        
      @include("lecturers.navlect")

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
                    <h4 class="card-title">Examinee Final Year Project 1</h4>


                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Examinee Name</th>
                            <th>Examinee ID</th>
                            <th>Examinee Email</th>
                            <th>Project Type</th>
                            <th>Project Title</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($examinee as $exame)
                        
                          <tr>
                            <td>{{($student->where('student_id', '=', $exame['student_id'])->first())['student_name']}}</td>
                            <td>{{$exame['student_id']}}</td>
                            <td>{{($student->where('student_id', '=', $exame['student_id'])->first())['email']}}</td>
                            <td>{{$exame['type']}}</td>
                            <td>{{$exame['title']}}</td>
                          </tr>
                        @endforeach

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
            @include("lecturers.lecturerscript")
      </body>
    </html>
