<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="login.css">



<p id="errMsg"></p>
<body>

  <div class="nv">
<nav>
  
    <nav class="navbar navbar-expand-md navbar-light">
  <span id="sp1">
  
    <ul class="navbar-nav">
      <li><a href="#" onclick="newFunction()" ><i class="fa fa-fw fa-bars fa-2x"></i></a></li>
      <li class="nav_item">
    <p class="text-center">OMM VISA</p>
      </li>

      <li class="logo"><a href="#" onclick="newFunction()"><i class="fa fa-fw fa-search fa-2x"></i></a></li>
    </ul>

  </div>
</nav>
    
  
  

</nav>

<form action="" class="container" method="POST">
   <h3 style="color:Black">Welcome</h3>

    
    <input type="text" placeholder="User Name" name="username" required>

    <input type="password" placeholder="Password" name="psw" required>
<a href="summary_page.php" type="submit" id="bt1">Login</a>
    
    <br>
    <a href="index.php" style="color: #bb0000" >Forgot username/password</a> 
    <br>
  </form>
<section></section>
<hr>
<br>
<p1 style ="font-family: Lucida Console; font-size: 2em; color: grey" ><center> Rewards Visa Signature Cards</center></p1>

<div id="navbar">
  <a  onclick="newFunction(), startTimer(this)" href="#">Home</a>
  <a href="#" onclick="newFunction(), stopTimer(this)">Rewards</a>
  <a href="#" onclick="newFunction()">Redeem Rewards</a>

<div id="navbar1">
    <a href="#" onclick="newFunction()" >Manage Account</a>
      <a href="#" onclick="newFunction()" >Contact</a>
</div>
 
</div>
    </div>
  </div>
</div>



</div>


</div>
</div>
</div>

<hr>
<br>
<hr>

 <div class="jumbotron">
 <div class="container-fluid padding">
  <div class="row" >
  <div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
    <div class="maincontainer">
  <div class="thecard" onclick="newFunction()">
    <div class="front">
    <img src="Government-transactional--001.jpg" id="img">
    </div>  


  </div>
</div>
</div>

<hr>
<div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
  <div class="maincontainer">
    <div class="thecard" onclick="newFunction()">
      <div class="front">
        <img src="graph-0317-7-01.gif" id="img">
      </div>
     
 


    </div>
  </div>
</div>


<hr>
<div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
  <div class="maincontainer">
    <div class="thecard" onclick="newFunction()">
      <div class="front">
        <img src="b2a1c5bc93f9d4432762764b208152a3.jpg" id="img">
      </div>
 


</div>


</div>
</div>
</div>

<hr>
<div class="container-fluid">
  <div class="row  text-center">
    <div class="col-12">
       <p class="text" onclick="newFunction()"><strong>Follow Us</strong></p>
    </div>
    <div class="col-12 social padding">
      <a href="#" onclick="newFunction()"> <i class="fab fa-facebook fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction()"> <i class="fab fa-twitter fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction()"> <i class="fab fa-google-plus-g fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction()"> <i class="fab fa-instagram fa-3x fa-fw"></i></a>
      <a href="#" onclick="newFunction()"> <i class="fab fa-youtube fa-3x fa-fw"></i></a>
    </div>
    <br>
    <hr>
  </div>
</div>

<hr>
<footer>
     <div class="row text-center">
      <div class="col-md-4">
       
          <h5 style="color: black" onclick="newFunction()">Mortgage</h5>
 <p onclick="newFunction()">Home equity
        </p>
        <p onclick="newFunction()">Auto Mobile</p>
        <p onclick="newFunction()">Lending</p>
      </div>
      <div class="col-md-4">
        <h5 style="color: black" onclick="newFunction()">Investment Planning</h5>
 <p>Personalized
        </p>
        <p onclick="newFunction()">Not FDIC Insured</p>
        <p onclick="newFunction()">Risk Level</p>
      </div>
      <div class="col-md-4">
        
        <h5 style="color: black" onclick="newFunction()">Help & Support</h5>
        <p onclick="newFunction()">Contact
        </p>
        <p onclick="newFunction()">Security Center</p>
        <p onclick="newFunction()">Help & FAQs</p>

      </div> 
      <hr>

      
  
</div>
</footer>
    <br>

<script>
  $(document).ready(function(){
    $(window).scroll(function(){
if($(window).scrollTop()>250){
  $('nav').addClass('color');

}else{
  $('nav').removeClass('color');
}

    });
  });
</script>




 <script >
  
    
        var t = 0;
        var i;
     
     function startTimer(e){
            i = window.setInterval(()=>{
                t++;
                showTime(getTime(t));
            },1000) 
            e.setAttribute("onclick","stopTimer(this)");
             var a = e.innerHTML;
            saveTime(getTime(t),a);
     }

        function stopTimer(e){
            window.clearInterval(i);
            e.setAttribute("onclick","startTimer(this)");
          var a = e.innerHTML;
            saveTime(getTime(t),a);
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
           var b = 0;
function newFunction(){
  alert("Error:You have made a wrong choice");
b +=1;
}



        function saveTime(time,ans) {
          
            if(t>0){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status != 200) {
                        document.getElementById("errMsg").innerHTML = "Exception while saving data : " + this.responseText;
                    } else {
                        document.getElementById("errMsg").innerHTML = "";
                    }
                };
                xmlhttp.open("POST", "buchuk.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("time=" + time + "&ans=" + ans);
          
            }
        }




</script>

</body>
</html>
