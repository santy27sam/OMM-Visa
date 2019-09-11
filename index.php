<?php include_once 'connect.php';



if (isset($_POST['Enter'])) {

  if(empty($form_errors)){


  $userid =$_POST['userid'];
  $subid = $_POST['subid'];
  $session= $_POST['session'];
  $form= $_POST['form'];
  $date= $_POST['date'];

  $add_user = mysqli_query($con, "INSERT INTO Registration VALUES ('$userid','$subid','$session','$form','$date')") or die("error" . mysqli_error($con));

?>
    <p style='padding: 20px; color: black;'> Registration Successful. Please <a href="instruction_page.php"> Click Here </a> to start the task.
    </p>
<?php } 
 } ?>  

<?php
if (isset($_POST['subid'])){
$con=mysqli_connect("localhost","root","","bank");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "Create Table `Nav".$subid."` (res int(2))";





if (mysqli_multi_query($con,$sql))
{
  do
    {
    
    if ($result=mysqli_store_result($con)) {
  
      while ($row=mysqli_fetch_row($result))
        {
        printf("");
        }
    
      mysqli_free_result($result);
      }
    }
  while (mysqli_next_result($con));
}

mysqli_close($con);
}
?>

<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <meta charset="utf-8" name="viewport" content="widtg=device-width", initial-scale=1>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
   <div class="jumbotron">
 <div class="container-fluid padding">
<div class="container">
 

  <?php if (!empty($form_errors)) { ?> 

  <p style='color: red ; border: 1px solid gray;'> There were <?php echo count($form_errors); ?> errors in the form
  <?php echo show_errors($form_errors); ?>
</p>
<?php }?>

  <form class="form_align" action="" method="post">
User_ID<br>
  <input type="text" name="userid" placeholder="Please enter a unique ID" required><br>
  Subject_ID<br>
  <input type="text" name="subid" required><br>
  Session<br>
  <input type="text" name="session" required>
<br>
Form_ID<br>
<input type="text" name="form" required><br>
Date<br>
<input type="text" name="date" placeholder="YY/MM/DD" required><br>

<center><input type="submit"  name="Enter" value="Enter" style="color: white;"></center></input></form>

</BODY>
</HTML>