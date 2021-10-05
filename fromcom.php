
<style>
    *{
        margin: 0;padding: 0;box-sizing: border-box;
    }


    body{
        background-color: silver;
        
        overflow-x: hidden;

    }
    .o1{
        text-decoration: underline;
    }
   
    form{
        width: 550px;
        height: 500px;
        padding: 50px;
        
        /* background-image: url("https://images.pexels.com/photos/866351/pexels-photo-866351.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"); */
        background-image: url("https://images.unsplash.com/photo-1517816743773-6e0fd518b4a6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80");
        /* background-image: url("https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"); */
    background-repeat: no-repeat;
    box-shadow: -5px -7px 14px 10px rgba(82,74,74,0.57);
-webkit-box-shadow: -5px -7px 14px 10px rgba(82,74,74,0.57);
-moz-box-shadow: -5px -7px 14px 10px rgba(82,74,74,0.57);
    }
    h1{
       color: black;
      
    }
    #inputGroup-sizing-lg{
        background-color: black;
        color: white;
    }
    
    .hcontainer{
       padding: 20px;
       height: 100vh;
       width: 100vw;
       display: flex;
   
       align-items: center;
       flex-direction: column;
       justify-content: center;
    }

 .hcontainer button{
     width: 200px;

 }

 form span{
     font-weight: bold;
     font-size: 20px;
     
 }

 .button{
     display: flex;
     justify-content: center;
     
 }
 
 .button .btn-success:hover{
    background-image: linear-gradient(to right top, #d1c36b, #c7c558, #b8c846, #a6cb34, #8ecf21, #8bd419, #88d80f, #84dd00, #9ce300, #b3e900, #c9ef00, #dff400);
     
 }
</style>


<?php 
    error_reporting(0);
    // define variables 
    $erremail=$errpass=$crtemail=$crtpass="";
    $details =[
        "emailid"=>"prashant.mishra4801@gmail.com",
        "pass"=>"Prashant@123"
    ];
 
    
    if(isset($_POST['submit'])){
        $email=input_field($_POST['email']);
        $pass=input_field($_POST['pass']);

        //validate email
        if(empty($email)){
            $erremail = "Please Enter Email !";
        }
        elseif(empty($pass)){
            $errpass="Please Enter Password !";
        }
        else{
            if($email == $details['emailid']){
                if(empty($pass)){
                    $errpass = "Please Enter Password !";
                }
                else{
                    if($pass == $details['pass']){
                        $crtpass = "SUCCESSFULLY LOGIN !";
                        $crtemail = "SUCCESS !";
                    }
                    else{
                        $errpass ="Incorrect Password !";
                    }
                }
            }
            else{
                $erremail="Incorrect Email !";
            }
        }
    }

    function input_field($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>

  
    <section class="hcontainer
    ">
       
    <form action="" method="post">
            <h1 class="text-center text-uppercase o1">Login Here</h1><br>
            <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Email - ID</span>
            <input type="email" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" >
            </div><span class="text-danger"><?php echo $erremail;?></span><span class="text-success fw-bolder"><?php echo $crtemail?></span><br><br>
            <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
            <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="pass">
            </div><span class="text-danger"><?php echo $errpass?></span><span class="text-success fw-bolder"><?php echo $crtpass?></span><br><br><br>
            <div class="button">
            <button type="submit" class="btn btn-success form-control p-2" name="submit">Sign in</button>

            </div>
            </form>
    </section>
