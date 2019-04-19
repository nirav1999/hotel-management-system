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


body{
background: rgb(26, 49, 95);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(26, 49, 95, 1)), color-stop(10%, rgba(26, 49, 95, 1)), color-stop(24%, rgba(29, 108, 141, 1)), color-stop(37%, rgba(41, 136, 151, 1)), color-stop(77%, rgba(39, 45, 100, 1)), color-stop(90%, rgba(26, 49, 95, 1)), color-stop(100%, rgba(26, 49, 95, 1)));
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#1a315f', endColorstr='#1a315f', GradientType=0);
}

		
	</style>
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
    <img src="img\welcome.jpg" width="100%" height="550px" style="padding-left : 100px; padding-right: 100px">

</body>

</html>