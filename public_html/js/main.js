

	$(document).ready(function(){

        var DOMAIN = "http://localhost/inv_project/public_html";



        $("#register_form").on("submit",function(){

            var status = false;
            var name = $("#username");
            var email = $("#email");
            var pass1 = $("#password1");
            var pass2 = $("#password2");
            var type = $ ("#usertype");
            //var n_patt= new RegExp(/^[A-Za-z ]+$/);

            var e_patt= new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
            if(name.val()=="" || name.val().length <6){
                name.addClass("border-danger");
                $("#u_error").html("<span class ='text-danger'>Please Enter Name and Name should be more than 6 char</span>");
                status=false;

               } else{
                name.removeClass("border-danger");
                $("#u_error").html("");
                status = true;
              }


             if(!e_patt.test(email.val())){
                email.addClass("border-danger");
                $("#e_error").html("<span class ='text-danger'>Please Enter Valid Email</span>");
                status=false;

             } else{
                email.removeClass("border-danger");
                $("#e_error").html("");
                status = true;
             }

             if(pass1.val()=="" || pass1.val().length <9){
                pass1.addClass("border-danger");
                $("#p1_error").html("<span class ='text-danger'>Please Enter 9 digit </span>");
                status=false;

              } else{
                pass1.removeClass("border-danger");
                $("#p1_error").html("");
                status = true;
                }
              
              if(pass2.val()== "" || pass2.val().length <9){
                pass2.addClass("border-danger");
                $("#p2_error").html("<span class ='text-danger'>Please Enter more than 9 digit</span>");
                status=false;
               } 

                else{
                pass2.removeClass("border-danger");
                $("#p2_error").html("");
                status = true;
                 }
                if(type.val()==""){
                type.addClass("border-danger");
                $("#t_error").html("<span class ='text-danger'>Please enter more than 9 digit</span>");
                status = false;

                } else{
                type.removeClass("border-danger");
                $("#t_error").html("");
                status = true;
               }
                if ((pass1.val()== pass2.val()) && status == true){
                         
                          $.ajax({
                            
                            url : DOMAIN+ "/includes/process.php",

                            method :"POST",
                            data : $("#register_form").serialize(),
                            success: function (data){

                                if(data=="EMAIL_ALREADY_EXISTS"){
                                    alert("It is already used");
                                }  else if(data == "SOME_ERROR"){
                                    alert("Something Wrong");

                                }else{
                                    window.location.href=encodeURI(DOMAIN+"/index.php?msg=You are registered Now you can login");
                                }


                                                                                
                                }

                                
                          }) 

               
                           }else{

                            pass2.addClass("border-danger");
                            $("#p2_error").html("<span class ='text-danger'>Password not matched</span>");
                            status = true ;
                        }

                })

                //For Login part

                $("#form_login").on("submit",function(){

                    var email =$("#log_email");
                    var pass= $("#log_password");
                    var status=false;
                    if (email.val()==""){
                        email.addClass("border-danger");
                        $("#e_error").html("<span class ='text-danger'>Please enter Email Address</span>");
                        status=false;
                    }else{

                         email.removeClass("border-danger");
                        $("#e_error").html("");
                        status=true;
                      }
                     if (pass.val()==""){
                        pass.addClass("border-danger");
                        $("#p_error").html("<span class ='text-danger'>Please enter valid password</span>");
                        status=false;
                    }else{

                         pass.removeClass("border-danger");
                        $("#p_error").html("");
                        status=true;
                }
                if(status){
                   // $(".overlay").show();
                    $.ajax({
                            
                            url : DOMAIN+ "/includes/process.php",

                            method :"POST",
                            data : $("#form_login").serialize(),
                            success: function (data){

                                if(data=="NOT_REGISTERED"){
                                email.addClass("border-danger");
                                $("#e_error").html("<span class ='text-danger'>Please enter Email Address</span>");
                                 //$(".overlay").hide();
                                }  else if(data == "PASSWORD_NOT_MACTHED"){
                                   // $(".overlay").show();
                                    pass.addClass("border-danger");
                                    $("#p_error").html("<span class ='text-danger'>Please enter Correct Password/span>");
                                 status=false;

                                }else{
                                    
                                    console.log(data);
                                    window.location.href=DOMAIN +"/dashboard.php";
                                }


                                                                                
                                }

                                
                          }) 
                }

            })


    //Fetch Category
    fetch_category();
    function fetch_category(){

        $.ajax ({
            url: DOMAIN+"/includes/process.php",
            method: "POST",
            data:{getCategory:1},
            success: function(data){
                var root= "<option value ='0'>Root</option>";
                $("#parent_cat").html(root+data);
               
            }



        })
    }

        //Add category

        $("#category_form").on ("submit",function(){

            if($("#category_name").val()==""){
                $("#category_name").addClass("border-danger");
                $("#cat_error").html("<span class ='text-danger'>Pleaase Enter Category Name </span>");
                status= false;
            }else {
               $.ajax({

                    url: DOMAIN+ "/includes/process.php",
                    method: "POST",
                    data : $("#category_form").serialize(),
                    success: function(data){
                        if(data== "CATEGORY_ADDED"){

                            $("#category_name").removeClass("border-danger");
                          $("#cat_error").html("<span class= 'text-sucess'> New Category added</span>");
                            $("#category_name").val("");  
                            status= true;  
                        } else{
                            alert(data);
                        }
                    }

                })

            
           }

       })

        //Add Brand

        
        $("#brand_form").on("submit",function(){
        if ($("#brand_name").val() == "") {
            $("#brand_name").addClass("border-danger");
            $("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");
        }else{
            $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#brand_form").serialize(),
                success : function(data){
                    if (data == "BRAND_ADDED") {
                        $("#brand_name").removeClass("border-danger");
                        $("#brand_error").html("<span class='text-success'>New Brand Added Successfully..!</span>");
                        $("#brand_name").val("");
                        fetch_brand();
                    }else{
                        alert(data);
                    }
                        
                }
            })
        }
    })


})