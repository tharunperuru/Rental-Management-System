
<?php include '../include/header.php';?>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">To-let</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br>
    <div class="container">
        <div class="row">               
              <div class="col-md-8 mx-auto">
                <div class="alert alert-info" role="alert">
                    <h2 class="text-center">Register</h2>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username" placeholder="User Name" name="username" required>
                              </div>
                            </div>
                       </div>
                       <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" required>
                              </div>
                             </div>
                            <div class="col-6">                   
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                              </div>
                             </div>
                        </div>

                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                      </div>

                      <div class="form-group">
                        <label for="c_password">Confirm Password</label>
                        <input type="password" class="form-control" id="c_password" placeholder="Confirm Password" name="c_password" required>
                      </div>

                      <button type="submit" class="btn btn-danger" name='register' value="register">Submit</button>
                    </form>             
                </div>
            </div>
        </div>
    </div>