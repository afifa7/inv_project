
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

           
          <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
        <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
           crossorigin="anonymous"></script>
</head>
<body>
  <div class="overlay"><div class="loader"></div></div>

  <!--Navbar-->

  <?php
    include_once("./templates/header.php");
  ?>
  
<br/><br/>
<div class="container">





  <?php
      if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
        ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_GET["msg"]; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            
          </div>
        <?php
      }
    ?>
 





        <div class="card mx-auto" style="width: 20rem;">
             <img class="card-img-top mx-auto " style="width:60%" src="./images/login.png" alt="Login Icon">
               <div class="card-body">
                <form id="form_login" onsubmit="return false">
                <h4 class="card-title"></h4>
                <form>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" name="log_email"id="log_email"  placeholder="Enter email">
                     <small id="e_error" class="form-text text-muted">We'll never share your email address</small>
                 </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="log_password"id="log_password" placeholder="Password">
                  <small id="p_error" class="form-text text-muted"></small>
                  </div>
                 <div class="form-group form-check">
                 
                
              </div>
             <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
             <span><a href="register.php">Register</a></span>
           </form>
           
           </div>
           <div class="card-footer"><a href="#">Forget Password</a></div>
          </div>
        </div>
          
        </body>
        </html>
