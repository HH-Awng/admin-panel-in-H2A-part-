@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Setting',
    'activePage' => 'Setting',
    'activeNav' => '',
])


@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
    <a class="navbar-brand" href="#pablo">Setting</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <form>
        <div class="input-group no-border">
          <input type="text" value="" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
            </div>
          </div>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <i class="now-ui-icons media-2_sound-wave"></i>
            <p>
              <span class="d-lg-none d-md-block">Stats</span>
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_world"></i>
            <p>
              <span class="d-lg-none d-md-block">Some Actions</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">Account</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="http://localhost:8000/profile">My profile</a>
            <a class="dropdown-item" href="http://localhost:8000/profile">Edit profile</a>
            <a class="dropdown-item" href="http://localhost:8000/logout"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- End Navbar -->      <div class="panel-header panel-header-sm">
  </div>


    <!-- Container Div -->
    <div class="container content">
    
      <div class="card">
      <div class="card-header">
        <h3>Add New</h3>
      </div>
         <!-- Form -->
    <form action="" method="POST" enctype="multiple/form-data">

<!-- Container Row -->
<div class="row settingrow mb-3">

<!-- Column Md 7 -->
<div class="col-md-7">
    
      <!-- card-header -->
      
      <!-- end card-header -->
      <div class="card-body">
         <div class="title">
         <label>Title:</label>
          <input type="text" name="title" class="form-control setting-form" placeholder="creat-title">
         </div>
    
        <div class="email">
        <label>email:</label>
        <input type="text" name="email" class="form-control setting-form" placeholder="creat-email">
        </div>

        <div class="mb">
        <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
        <textarea class="form-control setting-des"  rows="6" placeholder="create-description"></textarea>
        </div>
    
      </div>
    
 
</div>

<!-- End Column MD 7 -->

<!-- Column Md 5 -->
<div class="col-md-5">
<div class="logo mt-2">
<label>Logo:</label>
<input type="file" name="title" class="form-control setting-form" placeholder="creat-title">
</div>
    
    <div class="coverphoto mt-2">
    <label>Cover Photo:</label>
    <input type="file" name="title" class="form-control setting-form" placeholder="creat-title">
    </div>
    <button type="submit" class="btn btn-primary btn-round ml-4">Create</button>
</div>
<!-- EndColumn Md 5 -->



          


</div>
<!-- End Form  -->
</form>

      </div>

    </div>

   
    <!-- End Container Row -->

    <!-- End Container Div -->



@endsection