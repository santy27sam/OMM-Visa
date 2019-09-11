<?php
$con=mysqli_connect("localhost","root","","bank");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "INSERT INTO final(response,count,answer)
 SELECT  response, COUNT(response),answer FROM task2 GROUP BY response HAVING COUNT(response) % 2 != 0;";



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
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>thank you..!!</p>
</body>
</html>