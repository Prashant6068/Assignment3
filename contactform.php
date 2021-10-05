<?php
$nameerror = $passworderror = $cpassworderror = $emailerror = $mobnoerror = $gendererror = $cityerror = $feedbackerror = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    // $password = $_POST['pass'];
    // $cpassword = $_POST['cpass'];
    // $gender = @$_POST['gender'];
    // $city = $_POST['city'];
    $feedback = $_POST['feedback'];

    //name
    if (empty($name)) {
        $nameerror = "*Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "*Only Letters and White Space allowed";
        }
    }

    

    //email
    if (empty($email)) {
        $emailerror = "*Email is required";
    } else {

        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailerror = "*Invalid Email Format";
        }
    }


    //mobileno
    if (empty($mobno)) {
        $mobnoerror = "*Mobile Number is required";
    } else {

        if (!preg_match("/^\d{10}$/", $mobno)) {
            $mobnoerror = "*Only Numbers with 10 Digits required";
        }
    }

    
    



    if(empty($feedback))
    {
        $feedbackerror="*Feedback is required";
    }

    else{
            if (!preg_match("/^[a-zA-Z ]*$/", $feedback)) {
            $feedbackerror = "Only Letters and White Space allowed";
             }}


    if ($nameerror == "" && $mobnoerror == "" && $emailerror == "" && $passworderror == "" && $cpassworderror == "" && $gendererror == "" && $cityerror == "" && $feedbackerror == "") {
        header("Location: success.php");
        exit();
        
        echo "<h1 style='color:green','text-decoration: underline'>Thank you for contacting us”</h1> ";

    
    }
}

?>

<head>
    <title>Form Validation</title>
    <style>
     
form{
    text-align: center;
    display: flex;
    flex-direction: column;
    
}




        .error {
            color: #F00;
            font-weight: bolder;
            font-size: larger;
        }

        .formcontainer{
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        body{
            /* background-color: silver; */
            /* background-image: url("https://wallpaperaccess.com/full/1336126.jpg"); */
            background-repeat: no-repeat;
            /* background-color:  rgb(163,122,122);; */
            background: rgb(238,241,222);
background: linear-gradient(90deg, rgba(238,241,222,0.7399334733893557) 9%, rgba(99,99,108,0.7399334733893557) 100%, rgba(19,19,19,1) 100%);
            
        }

        form{
           
            width: 500px;
            background-color: white;
            background-image: url("https://images.unsplash.com/photo-1583339824000-5afecfd41835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
            padding: 20px;
            
    box-shadow: -5px -7px 14px 10px rgba(82,74,74,0.57);
-webkit-box-shadow: -5px -7px 14px 10px rgba(82,74,74,0.57);
-moz-box-shadow: -5px -7px 14px 10px rgba(82,74,74,0.57);
        }

    

        /* #p1 {
            height: 34px;
            padding-left: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-weight: bold;
            font-size: 20px;
            border-radius: 5px;
        } */

        input[type=text],
        textarea {
        
            padding-left: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
        background-color: pink;
        border: 3px solid black;
        font-weight: bolder;
        
            border-radius: 5px;
            
        }
        input[type=text]{
            border: 3px solid black;
            font-weight: bolder;
            background-color: pink;
        }
form input{
    width:300px;
}
        .submit {
            padding: 10px;
            text-align: center;
            font-size: 18px;
            border: 2px solid #e5a900;
            color:black;
            font-weight: bold;
            cursor: pointer;
            text-shadow: 0px 1px 0px #13506D;
            background-image: linear-gradient(to right top, #053707, #0b6016, #118b25, #14ba36, #12eb49);
            
        }

        form div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .submit:hover {
            background: orange;
        }
        
        h2{
            text-decoration: underline;
            text-transform: uppercase;
        }
    </style>


   <div class="formcontainer">
   <form action="" method="post">
          
          <h2>Contact Us</h2>
               <span class="error"></span><br />
               <br>
               <br>
              <div class="name">
               <h3>Name:</h3> 
               <input class="input" name="name" type="text" value="">
               <span class="error"> <?php echo $nameerror; ?></span><br />
              </div>
               <br>
       
            <div class="email">
            <h3>E-mail:</h3>
               <input class="input" name="email" type="text" value="">
               <span class="error"> <?php echo $emailerror; ?></span><br />
            </div>
               <br>
               <div class="mno">
               <h3>Mobile Number :</h3>
               <input class="input" name="mobno" type="text" value="">
               <span class="error"> <?php echo $mobnoerror; ?></span>
               </div><br />
               
              
               
              
               <div class="fed">
               <h3>Feedback :</h3>
               <textarea cols="30" name="feedback" rows="3" value=""></textarea>
       
       <!-- <input type="text" name="feedback"><br> -->
               <span class="error"> <?php echo $feedbackerror; ?></span><br />
               </div><br>
               
             <div class="button">
             <input class="submit" name="submit" type="submit" value="Submit">
             </div>
           </form>
           <br />
           <br>
           <br>
       
       
   </div>