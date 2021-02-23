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

           <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <script type="text/javascript" src="./js/main.js"> </script>
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

	
  
        
        <?php
          include_once("./templates/header.php");

        ?> 
      	

        <?php
          include_once("./templates/catagory.php");
        ?> 

         <?php
          include_once("./templates/brand.php");
        ?>

      <?php
          include_once("./templates/product.php");
      ?>

<br/><br/>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="card mx-auto">
                    <img class="card-img-top mx-auto" style="width:40%" src="./images/user.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">Profile Info</h4>
                      <p class="card-text"> <i class="fa fa-user"></i> Afifa Sultana</p>
                      <p class="card-text"><i class="fa fa-user"></i> Admin</p>
                      <p class="card-text">Last Login:XXXXX</p>
                      <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
                    </div>
                  </div>
                </div>
                        <div class="col-md-8">
                               <div class="jumbotron" style="height: 90% ;width:100%;">
                                     <h1>Welcome Admin</h1>

                                     <div class="row">
                                        <div class="col-sm-6">
                                 <iframe src="http://free.timeanddate.com/clock/i6iga1mf/n2624/szw110/szh110/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/facfff/fnu2/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="110" height="110"></iframe>

                               </div>
                               <div class="col-sm-6">
                                 <div class="card">
                                     <div class="card-body">
                                     <h5 class="card-title">New Orders</h5>
                                   <p class="card-text">Here you can make invoices and Create new orders.</p>
                                      <a href="#" class="btn btn-primary">New Orders</a>
                              </div>
                        </div>

                   </div>
                 </div>
               </div>
             </div>

        <p></p>
        <p></p>
          <div class="container">
            <div class ="row">
              <div class ="col-md-4">
                <div class="card">
                 <div class="card-body">
                <h4 class="card-title">Catagoris</h4>
                <p class="card-text">add new parent and sub catagories you can make .</p>
              
              <a href="#" data-toggle="modal" data-target="#form_catagory"class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Manage</a>
            </div>
          </div>

        </div>
            <div class ="col-md-4">
              <div class="card">
                 <div class="card-body">
                <h4 class="card-title">Brand</h4>
                <p class="card-text"> add your Brand  .</p>
              
              <a href="#" data-toggle="modal" data-target="#form_brand"class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Manage</a>
            </div>
          </div>
              
        </div>
            <div class ="col-md-4">
            <div class="card">
                 <div class="card-body">
                <h4 class="card-title">Product</h4>
                <p class="card-text"> Add your Product .</p>
              
              <a href="#" data-toggle="modal" data-target="#form_product" class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Manage</a>
            </div>
          </div>
      </div>
    </div> 

</div>


</body>
</html>

