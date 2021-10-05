<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="lay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>calculator</title>
    
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">

	</head>

    <style>
      body{
        background-image: url("https://ak.picdn.net/shutterstock/videos/1011801818/thumb/1.jpg");
     
     background-size: cover;
     height: 100%;
      }
        .container{
    margin-top: 30px;
    padding: 20px;
    

    
}
/* Calculator Section */
.container .calc{
    border: 1px solid;
    padding: 15px;
    background-color: black;
}
/* Display Area */
.container input{
    height: 50px;
    background-color: mintcream;
}
/* Button Container */
.container .calc .button-lay{
    margin-top: 10px;
    padding: 0px;

}
/* Buttons */
.container .calc .button-lay .btn{
    height: 60px;
    padding: 0px;
    width: 100%;
    font-weight: bold;
}
.container .calc .button-lay .btn:hover{
  background-color: black;
  color: white;
}
/* History Section */
#history{
    margin-left: 10px;
    font-style: italic;
    letter-spacing: 1px;
    border: 1px solid;
    text-decoration: underline;
    height: 300px;
    color: white;
   
    /* text-align: center; */
    padding: 15px;
    /* background-color: mintcream; */
    background-image: url("https://media.istockphoto.com/photos/expense-cost-budget-and-tax-or-investment-calculation-black-pen-with-picture-id1059005782?b=1&k=20&m=1059005782&s=170667a&w=0&h=ebvAUjvJ9GsxkIivRSScsrnEgQT8KMVOr6uy0dqo1Sc=");
}
#display{
  
  font-size: larger;
}


/* h2{
    text-align: center;
    padding-top: 10px;
    font-style: italic;
    */

 

    </style>
	<body>
  <main>
        <!-- <h2>Calculator</h2> -->
        <div class="container">
            <section class="row">
                <!-- Calculator Section -->
                <div class="col-sm-6  calc">
                    <div class="row">
                        <!-- Display Area -->
                        <div class="col-lg-12">
                            <input type="text" name="calculator" id="calc" class="calcArea form-control">
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="row button-lay">
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('1')">1</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('2')">2</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('3')">3</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-success btn-block " onclick="num('+')" >+</button>
                        </div>
                    </div>
                    <div class="row button-lay">
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('4')">4</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('5')">5</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('6')">6</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-success btn-block " onclick="num('-')">-</button>
                        </div>
                    </div>
                    <div class="row button-lay">
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('7')">7</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('8')">8</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('9')">9</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-success btn-block " onclick="num('*')">*</button>
                        </div>
                    </div>
                    <div class="row button-lay">
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('.')">.</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('0')">0</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-primary btn-block " onclick="num('**')">^</button>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <button class="btn btn-success btn-block " onclick="num('/')">/</button>
                        </div>
                    </div>
                    <div class="row button-lay">
                        <div class="col-sm-4 col-lg-4 ">
                            <button class="btn btn-warning btn-block " onclick="clr()">Clear</button>
                        </div>
                        <div class="col-sm-4 col-lg-4 ">
                            <button class="btn btn-warning btn-block " onclick="del()">Del</button>
                        </div>
                        <div class="col-sm-4 col-lg-4 ">
                            <button class="btn btn-warning btn-block " onclick="calc()">=</button>
                        </div>
                    </div>
                    
                </div>
                <!-- History Section -->
                <div class="col-sm-6">
                    <div id="history">
                        <h3>HISTORY</h3>
                        <p id="display"></p>
                    </div>
                </div>
            </section>
           

        </div>
    </main>
 <script>
   var result = document.getElementById('calc');
let history = document.getElementById('display');
result.value='';




// let history = document.getElementById("history");
//       function calculation(v) {
//         para = document.createElement("p");
//         data = v + "=" + eval(v);
//         para.innerText = data;
//         history.appendChild(para);
//         return eval(v);
// Getting the input value
function num(val){
    result.value += val;
    history.innerHTML+=val; //History Log
}

//Calculating the result
function calc(){
result.value=eval(result.value);
history.innerHTML =  history.innerHTML +" = " +   result.value +"<br> "; //History Log
result.value='';
}



//Clear Display Area
function clr() {
    result.value='';
    history.innerHTML+='<br>';//history Log
}
//BackSpace Operation
del =()=>{
    var a = result.value;
    result.value = a.substr(0,a.length-1);
    history.innerHTML+="<br>" + result.value;
}
</script>
   

 
    
