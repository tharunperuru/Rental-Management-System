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
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="services">
        <div class="container">
            <div class="row">               
              <div class="col-md-4 mx-auto">
                <div class="alert alert-info" role="alert">
                    <h2 class="text-center">Login </h2>
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email Address/Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="username" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                      </div>
                      <button type="submit" class="btn btn-success" name='login' value="Login">Login</button>
                    </form>              
                 </div>
            </div>
            </div>
        </div>