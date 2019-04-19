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
}
}
{
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.item {
  position: relative;
  
  border: 1px solid #333;
  margin: 2%;
  overflow: hidden;
  width: 100%;
}
.item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
#custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    }
 
    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }
    .table1{
      margin:150px;
      width:50%;
    }
    body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(26, 49, 95, 1)), color-stop(10%, rgba(26, 49, 95, 1)), color-stop(24%, rgba(29, 108, 141, 1)), color-stop(37%, rgba(41, 136, 151, 1)), color-stop(77%, rgba(39, 45, 100, 1)), color-stop(90%, rgba(26, 49, 95, 1)), color-stop(100%, rgba(26, 49, 95, 1)));
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#1a315f', endColorstr='#1a315f', GradientType=0);
}


    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>
    <b><font size="7" class="font2"><p class="p1">Hotel Taj</font></b></p>
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

                                  $sql = "SELECT * FROM r_cost";
                                  $result = $conn->query($sql);

                                  if ($result->num_rows > 0) {
                                      echo "<center class='text-info'><table class='table table1 table-striped'><thead><tr><th>type</th><th>cost</th></tr></thead>";
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                          echo "<tr><td>".$row["type"]."</td><td>".$row["cost"]."</td></tr>";
                                      }
                                      echo "</table></center>";
                                  } else {
                                      echo "0 results";
                                  }
                                  $conn->close();
                                  ?>
                     
            </div>
</body>
</html>