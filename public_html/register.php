<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Invertory Management System</title>

 


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
             <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
             <script type="text/javascript" src="./js/main.js"></script>
             <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
             <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                    crossorigin="anonymous"></script>

            </head>
<body>

  <?php
    include_once("./templates/header.php");
  ?>
  
       <br/><br/>
              <div class="container">
              <div class="card mx-auto" style="width: 30rem;">
                    <div class ="card-header">Register </div>
                     <div class="card-body">
                      <form id ="register_form" onsubmit="return false" autocomplete="off">
                        <div class="form-group">
                           <label for="username">Full Name</label>
                           <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
                            <small id="u_error" class="form-text text-muted"></small>

                         </div>

                         <div class="form-group">
                           <label for="email">Email address</label>
                           <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           <small id="e_error" class="form-text text-muted">we'll never share your email with anyone else</small>
                       </div>

                       <div class="form-group">
                          <label for="password1">Password</label>
                            <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
                             <small id="p1_error" class="form-text text-muted"></small>
                        </div>
                       <div class="form-group">
                          <label for="password2">Re-enter Password</label>
                          <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                           <small id="p2_error" class="form-text text-muted"></small>
                        </div>

                          <div class="form-group">
                          <label for="usertype">Usertype</label>
                          <select name ="usertype" class="form-control" id="usertype">
                            <option value ="">Choose User Type</option>
                            <option value ="Admin">Admin </option>
                            <option value ="Other">Other </option>
                          </select>
                           <small id="t_error" class="form-text text-muted"></small>

                        </div>

                  <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
                   <span><a href="index.php">Login</a></span>
                 </form>
                 
                 </div>
                 <div class="card-footer text-muted">
                 </div>
                </div>
              </div>
                
              </body>
              </html>
