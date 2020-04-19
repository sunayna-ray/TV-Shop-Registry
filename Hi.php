<html>
<head>
<style type="text/css">
body{
	border:blue solid 3px;
	text-align: center;
	background-color: black;
	}
th{text-align:center;
	background-color: orange;
	color:black;
	font-family: arial-black;
	font-size:20px;
	}
td{text-align:center;
	color:white;
	font-family:tahoma;
	font-size:15px;
	}
CAPTION{text-align:center;
	color:RED;
	font-family: arial-black;
	font-size: 30px;
	text-decoration:underline;
   }
h1{text-align:center;
	background-color:orange;
	color:Black;
	font-family: arial-black;
	font-size:35px;
}
h2{text-align:center;
	color:orange;
	font-family: arial-black;
	font-size:25px;
}
form{text-align:center;
	position:relative;
	width:600px;
    left:400px;
	background-color:orange;
	border:blue solid 3px;
	color:red;
	font-family: arial-black;
	font-size:25px;
}
ul {
    list-style-type: none;
    margin: 25px;
    padding: 0;
    overflow: hidden;
	border: orange solid 3px;
	}
li a {
	float:left;
    display: block;
	width:12.5%;
	height: 100px;
	text-align: center;
    padding: 4px;
	color: blue;
	font-size:25px; 
	}
</style>
</head>
<body>
<h1><img src="tv.jpg" align="Left" height="100px"><br/>
Television Shop
<img src="tv.jpg" align="Right" height="100px"><br/><br/></h1><br/>
<form action="Hi.php" method="post"><br/>
Enter Query: <input type="text" name="query" style="width:500px;"><br/>
<input type="submit" value="     Submit Query     "><br/><br/>
</form>
<?php 
//Opens connection to server
$dbcon = mysql_connect('localhost','root', '');
if (!$dbcon){
	die('Connection Error' .mysql_error());}
//Select database
$dbselect = mysql_select_db('tv', $dbcon);
if(!$dbselect){
	die('Cant connect: ' .mysql_error());
}
$query=$_POST["query"];
$result=mysql_query($query);
if ($result){
echo '<h2>Your query has been executed.</h2>';
}
mysql_close($dbcon);
?>
<br/><br/>
<ul>
<li><a href="Product_Details.php"> Product Details </a></li>
<li><a href="Customer_Details.php"> Customer Details </a></li>
<li><a href="Employee_Details.php"> Employee Details </a></li>
<li><a href="Wholesaler_Details.php"> Wholesaler Details </a></li>
<li><a href="Purchase_Details.php"> Purchase Details </a></li>
<li><a href="Sales_Details.php"> Sales Details </a></li>
<li><a href="Total_Balance_Sheet.php"> Total Balance Sheet </a></li>
</ul>
<form action="index.html" method="post" style{align="Left";}>
<input type="submit" value="     Log out     ">
</form>
</body>
</html>