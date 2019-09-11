<!DOCTYPE html>
<html>
<head>
  <title>Online Bank System</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="nav1.css">
<link rel="stylesheet" type="text/css" href="transaction.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<body onload="startTimer(this)">
    
<div class="container-fluid">
 <p id="errMsg"></p>
    


 
    
<script>
       var t = 0, b=0;
        var i;

     

        function startTimer(e){
            var a = e.innerHTML;
            //alert(a);
            i = window.setInterval(()=>{
                t++;
                showTime(getTime(t));
            },1000) 
            e.setAttribute("onclick","stopTimer(this)");
             b+=1;
            saveTime(getTime(t),a,b);
alert("You have chosen the home tab");
        
        }

        function stopTimer(e){
            window.clearInterval(i);
            var a = e.innerHTML;
            //alert(a);
            e.setAttribute("onclick","startTimer(this)");
    
          //alert(a);
          b+=1;
         
          saveTime(getTime(t),a,b);
          
            }
  




        function saveResponse(e){
          //"setColor(e);
          var a = e.innerHTML;
          //alert(a);
          b+=1;
          saveTime(getTime(t),a,b);
          alert("You have made the wrong choice");
        }

        function showTime(time) {
                document.getElementById("time").innerHTML= time;
        }

        function getTime(m){
            let hh = "" + Math.floor(m/3600);
            m=m%3600;
            let mm = "" + Math.floor(m/60);
            m=m%60;
            let ss = "" + m;

            return  hh.padStart(2,"0") + ":" + mm.padStart(2,"0") + ":" + ss.padStart(2,"0");
        }



        function saveTime(time,a,b) {

          
            if(t>0){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status != 200) {
                        document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
                    } else {
                        document.getElementById("errMsg").innerHTML = "";
                    }
                };
                xmlhttp.open("POST", "input.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("time=" + time + "&a=" + a + "&b=" + b);
          
            }
        }
     
</script>

<nav class="navbar navbar-expand-md navbar-light" style="background-color: #DC143C;"> 
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_item" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav_item">
    <ul class="navbar-nav mr-auto">
      <li class="nav_item active">
        <a class="nav-link" href="summary_page.php" onclick="saveResponse(this)" style="color: white">Account</a>
      </li>
      <li class="nav_item">
        <a class="nav-link"  onclick="saveResponse(this)" style="color: white">Services</a>
      </li>
       <li class="nav_item">
        <a class="nav-link" href="#" onclick="saveResponse(this)" style="color: white">Pay & Transfer</a>
      </li>
      <li class="nav_item">
        <a class="nav-link" href="#" onclick="saveResponse(this)" style="color: white">Investments</a>
      </li>
      <li class="nav_item">
        <a class="nav-link"  href="#" onclick="saveResponse(this)" style="color: white">Login</a>
      </li>
    </ul>
    
  </div>
</nav>
<hr>
<br>
<div class="jumbotron"> 

<div class="container">
  <div class="jumbotron">
    <p class="text"><strong>To Download the Statements, Please click on the link given below.</strong></p>
<button class="tablink" onclick="openPage('2018', this, 'grey')" id="defaultOpen">2018 Statements</button>
<button class="tablink" onclick="openPage('2017', this, 'grey')" >2017 Statements</button>

<div id="2018" class="tabcontent">

<a href=""   style="color: crimson; text-decoration: underline;">2018 Annual account Summary</a><br>

All Dates Are Statement Ending dates
<hr>
  August 18
 <a href="task_instruction.php" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)" style=" color: crimson;float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
  <hr>
  July 14 
  <a href="task_instruction.php"  style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)"  style=" color:crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
    <hr>
      June 18
      <a href=""  onclick="newFunction()"  style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)"   style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
        May 13
        <a href=""  onclick="newFunction()"  style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)"   style=" color:crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
          April 20
          <a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)"style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
            March 19
            <a href=""  onclick="newFunction()"  style="  color:crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)"   style=" color:crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
              February 11
              <a href="" style="  color:crimson;
  float: right;"> &nbsp
View</a>
<a href="BankStatement.pdf" download="BankStatement.pdf" onclick="stopTimer(this)"    style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
                January 6
                <a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href=""  onclick="newFunction()"  style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
</div>

<div id="2017" class="tabcontent">
  <a href=""  onclick="newFunction()" style="color: crimson; text-decoration: underline;">2017 Annual account Summary</a><br>

All Dates Are Statement Ending dates
<hr>August 18 
<a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
  <hr>
  July 14
  <a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a>
    <hr>
      June 18
      <a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
        May 13
        <a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
          April 20
          <a href="" style="  color: crimson;
  float: right;"> &nbsp
View</a>
<a href="" style=" color: crimson;
  float: right; border-right: 2px solid grey; height: 25px; ">&nbsp Download &nbsp</a><hr>
            
</div>
</div>
</div>
<hr>
<div class="container-fluid">
  <div class="row  text-center">
    <div class="col-12">
       <p class="text"><strong>Follow Us</strong></p>
    </div>
    <div class="col-12 social padding">
      <a href="#"> <i class="fab fa-facebook fa-3x fa-fw"></i></a>
      <a href="#"> <i class="fab fa-twitter fa-3x fa-fw"></i></a>
      <a href="#"> <i class="fab fa-google-plus-g fa-3x fa-fw"></i></a>
      <a href="#"> <i class="fab fa-instagram fa-3x fa-fw"></i></a>
      <a href="#"> <i class="fab fa-youtube fa-3x fa-fw"></i></a>
    </div>
    <br>
    <hr>
  </div>
</div>

<hr>
<footer>
     <div class="row text-center">
      <div class="col-md-4">
       
          <h5 style="color: black">Mortgage</h5>
 <p>Home equity
        </p>
        <p>Auto Mobile</p>
        <p>Lending</p>
      </div>
      <div class="col-md-4">
        <h5 style="color: black">Investment Planning</h5>
 <p>Personalized
        </p>
        <p>Not FDIC Insured</p>
        <p>Risk Level</p>
      </div>
      <div class="col-md-4">
        
        <h5 style="color: black">Help & Support</h5>
        <p>Contact
        </p>
        <p>Security Center</p>
        <p>Help & FAQs</p>

      </div> 
      <hr>

      
  
</div>
</footer>



<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
document.getElementById("defaultOpen").click();

function newFunction(){
  alert("Error:You have made a wrong choice");
}
</script>