<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ");
} 
?>
<?php
$flag=0;
if(isset($_POST["c_name"]) && isset($_POST["email"]) && isset($_POST["tel"]))
{

$name=$_POST["c_name"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$type=$_POST["room"];
$res = $conn->query("SELECT room_no FROM room WHERE `room_no` = $type and `booked` = 'Y'");
if($res->num_rows == 1) {
     $flag=3;
}
$res1 = $conn->query("SELECT room_no FROM room WHERE `booked` = 'N'");
if($res->num_rows == 1)
{
	$flag=2;
}
}?>
<?php
	if($flag==0)
	{
    $sql3="UPDATE `room` SET `booked` = 'Y' WHERE `room`.`room_no` = $type";
    $conn->query($sql3);
}
?>
<?php
if($flag==0 && isset($type))
{
$sql1="SELECT * from customer";
$result3 = $conn->query($sql1);
$count=1;
if ($result3->num_rows > 0) {
                                  
                                      while($row3 = $result3->fetch_assoc()) {
                                      	$cnt=$row3["c_id"];
                                      }
                                      	$count=1;


	$count=$count+$cnt;
}}?>
<?php
if($flag==0)
{
	$sql5="INSERT into `customer` (`c_id`, `cname`, `room_no`, `contactno`, `email`) VALUES ($count,'$name',$type,$tel,'$email')";
	$conn->query($sql5);
}?>
<?php
if($flag==0)
{
  $sql7="SELECT cost from r_cost where type IN (SELECT type from room where room_no=$type)";
  $result1 = $conn->query($sql7);
  if($result1->num_rows == 1)
  {
   $row4 = $result1->fetch_assoc();    
    $cost=$row4["cost"];
  }
   $date=date("Y/m/d");
  $sql6="INSERT INTO `bill` (`c_id`, `roomno`, `arri_date`, `dept_date`, `payment`) VALUES ($count,$type,'$date',NULL,$cost);";
  $conn->query($sql6);



                                 
}?>
<?php
if($flag==0)
{
	$pass=rand(1000,9999);
  if($email!=NULL)
  {
	$sql4="INSERT into customer_login values('$email','$pass')";
	$conn->query($sql4);
    }
                             }
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Security-Policy"
        content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <!--<link rel="stylesheet" type="text/css" href="css/index.css">-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>welcome to our hotel page</title>
    <style type="text/css">
		*{font-family: "Helvetica"}
    <style type="text/css">
		*{font-family: "Helvetica"}
    .zoom {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
  		div{
			border: 0px black solid;
			position: absolute;
		}
		a{
	text-decoration: none;
}
	.p1 {
  	padding-left: 175px;
  	
}
.font2{
color:white;
}
 .font1{
color:white;
 
 }
 .img1 {
  -webkit-filter: blur(4px); /* Safari 6.0 - 9.0 */
  filter: blur(4px);
}
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
background: rgb(26, 49, 95);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(26, 49, 95, 1)), color-stop(10%, rgba(26, 49, 95, 1)), color-stop(24%, rgba(29, 108, 141, 1)), color-stop(37%, rgba(41, 136, 151, 1)), color-stop(77%, rgba(39, 45, 100, 1)), color-stop(90%, rgba(26, 49, 95, 1)), color-stop(100%, rgba(26, 49, 95, 1)));
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#1a315f', endColorstr='#1a315f', GradientType=0);

}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

	</style>
</head>

<body style="background-repeat: no-repeat; background-size: cover; background-position: center center;background-image :www\img\bg.jpg">
    <br><b><font size="7" class="font2"><p class="p1">Hotel Taj</font></b></p>
    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
            <a href="index.html"><button type="button" class="btn btn-outline-primary">HOME</button></a>
            <a href="admin.php"><button type="button" class="btn btn-outline-dark">ADMIN</button> </a>
            <a href="cusdetail.php"><button type="button" class="btn btn-outline-success">ADD CUSTOMERS DETAILS</button></a>
            <a href="serve.html"><button type="button" class="btn btn-outline-info">CO-WORKERS</button></a>
            <a href="room.html"> <button type="button" class="btn btn-outline-danger">ROOMS</button></a>
            <a href="bill.php"> <button type="button" class="btn btn-outline-dark">Bill</button></a>
            <a href="admfeed.php"> <button type="button" class="btn btn-outline-info">view feedback</button></a> 
            <a href="csearch.php"><button type="button" class="btn btn-outline-primary">customer details</button></a>
    </nav>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <div class="container">  
        <form id="contact" action="cusdetail.php" method="post">
        	      	  <?php
      if(isset($flag) && isset($_POST["c_name"]) && isset($_POST["email"]) && isset($_POST["tel"]))
        if($flag==1)
      echo "<font  color='black'>please inform the customer to change the email as it already exist</font>";
  		else if($flag==3)
		echo "<font  color='black'>all rooms are full</font>";
		else if($flag==2)
		echo "<font  color='black'>entered room is full</font>";
		else if($flag==0)
		{
			echo "<font  color='black'>customer is successfully added</font>";
		}
    ?>
        <font color="black"><h3>Customer Details From</h3></font>
          <fieldset>
            <input placeholder="customer name" name="c_name" type="text" tabindex="1"  required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Customer Email Address"  type="email" name="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Customer Phone Number" type="tel" tabindex="3" name="tel" max= "10" min="10" required>
          </fieldset>
          <frameset>
            <table width="100%">
              <th>
                <td align="left"><font size="4" color="black" class="btn btn-outline-dark"> <b>Room no.</font></td>
                <td><select class="btn btn-outline-primary" name="room">
                  <option value="101">101</option>
                  <option value="102">102</option>
                  <option value="103">103</option>
                  <option value="201">201</option>
                  <option value="202">202</option>
                  <option value="203">203</option>
                  <option value="301">301</option>
                  <option value="302">302</option>
                  <option value="303">303</option>
                  <option value="401">401</option>
                  <option value="402">402</option>
                  <option value="403">403</option>
                  <option value="501">501</option>
                  <option value="502">502</option>
                  <option value="503">503</option>
                </select></td>
              </th>
            </table>
          </frameset>
          <fieldset><br>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ADD CUSTOMER</button>
          </fieldset>
        </form>
      </div>
      <div class="container"><font color="white">
                                <?php
                                  ini_set('mysql.connection_timeout',300);
                                  ini_set('default_socket_timeout',300);

                                  $servername = "localhost:3306";
                                  $username = "root";
                                  $password = "";
                                  $dbname = "project";

                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  } 

                                  $sql = "SELECT room_no FROM room where booked='N'";
                                  $result = $conn->query($sql);
                                  echo "empty room:";
                                  if ($result->num_rows > 0) {

                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                          echo " ".$row["room_no"]." ";
                                      }

                                  }
                                  $conn->close();
                                  ?>
                     
            </div>
</body>
</html>