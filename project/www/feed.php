<?php
session_start();
?>
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
$em=$_SESSION["email"];
echo $em;
if(isset($_POST["c_id"]) && isset($_POST["feedback"]))
{
  $flag=1;
  $c_id=$_POST["c_id"];
  $feedback=$_POST["feedback"];
  $sql3="SELECT `feedback`.`c_id` from feedback where `feedback`.`c_id` IN (SELECT `customer`.`c_id` from customer where email='$em')";
    $sql2="SELECT `customer`.`c_id` from customer where email!='$em'";
  $result2 = $conn->query($sql3);
  $result1 = $conn->query($sql2);
if($result1->num_rows > 0)
{
                                      while($row1 = $result1->fetch_assoc()) {
                                          if($row1["c_id"]==$c_id)
                                          {
                                                      $flag=2;
                                                      break;
                                          }
                                    }
}
if ($result2->num_rows > 0 && $flag!=2)
 {
                                      while($row2 = $result2->fetch_assoc()) {
                                          if($row2["c_id"]==$c_id)
                                          {
                                                      $flag=0;
                                                      break;
                                          }
                                          else
                                          {
                                            $flag=1;
                                          }
                                    }
}}?>
<?php
if(isset($flag))
{
  if($flag==1)
  {
   $sql2="INSERT into feedback (c_id,feedback)
    values ($c_id,'$feedback')";
    $result1 = $conn->query($sql2);
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

<body>
    <b><font size="7" class="font2"><p class="p1">Hotel Taj</font></b></p>
    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
     
        <a href="index.html"><button type="button" class="btn btn-outline-primary">HOME</button></a>
          <a href="feed.php"> <button type="button" class="btn btn-outline-secondary">feedback</button></a>
    </nav>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <div class="container">  
        <form id="contact" action="feed.php" method="post">
        <font color="black"><h3>Feedback From</h3></font>
          <fieldset>
            <input placeholder="customer id" name="c_id" type="number" tabindex="1"  required autofocus>
          </fieldset>
          <fieldset>
            <textarea placeholder="feedback" rows="3" cols="20"  type="text" name="feedback" tabindex="2" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset><FONT color=black>
          <?php
          echo $flag;
          if (isset($flag)) {
          if ($flag==1)
          {
            echo "your feedback is submitted sucessfully...";
          }
          else if($flag==0){
            echo "you have already entered feedback...";
          }
          else{
            echo "incorrect input";
          }  
        }
          ?>
        </form>
      </div>
</body>

</html>