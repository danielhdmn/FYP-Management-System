<!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
      </head>
      <body>
        
      @include("admin.nav")
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

                  <div class="col-12 grid-margin stretch-card">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Create New FYP Project</h4>

    <form class="forms-sample" action="createproject/" method="POST">
        @csrf
      <div class="form-group">
        <label for="exampleInputName1">Type</label>
        <input type="text" class="form-control" id="exampleInputName1" name="type" placeholder="Type">
      </div>

      <div class="form-group">
        <label for="exampleInputName1">Title</label>
        <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Project Title">
      </div>

      <div class="form-group">
        <label for="exampleSelectGender">Student</label>
        <select class="form-control" id="exampleSelectGender" name="student_name">
            @foreach($student as $stud)
                <option value={{$stud['student_id']}}>{{$stud['student_name']}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleSelectGender">Supervisor</label>
        <select class="form-control" id="exampleSelectGender" name="supervisor">
            @foreach($lecturer as $lect)
                <option value={{$lect['lecturer_id']}}>{{$lect['lecturer_name']}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleSelectGender">Examiner 1</label>
        <select class="form-control" id="exampleSelectGender" name="examiner_1">
            @foreach($lecturer as $lect)
                <option value={{$lect['lecturer_id']}}>{{$lect['lecturer_name']}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleSelectGender">Examiner 2</label>
        <select class="form-control" id="exampleSelectGender" name="examiner_2">
            @foreach($lecturer as $lect)
                <option value={{$lect['lecturer_id']}}>{{$lect['lecturer_name']}}</option>
            @endforeach
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary me-2">Submit</button>
      <button class="btn btn-dark">Cancel</button>
    </form>

  </div>
</div>
</div>
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
