<html>
<head>
<style type="text/css">
body{border:blue solid 3px;
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
<img src="tv.jpg" align="Right" height="100px"><br/><br/></h1>
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
//Product Details
$query="SELECT * from product_details";
$data=mysql_query($query);
echo "<br/>
<br/>
<table border = 1 align=Center><CAPTION>PRODUCT DETAILS</CAPTION>
<tr>
<th>Sr.No.</th>
<th>Product Code</th>
<th>Brand</th>
<th>Description</th>
<th>Wholesale cost</th>
<th>Rating</th>
</tr>";
while($record=mysql_fetch_array($data)){
	echo "<tr>";
	echo "<td>".$record["Sr. No."];
	echo "<td>".$record["Product Code"];
	echo "<td>".$record["Brand"];
	echo "<td>".$record["Description"];
	echo "<td>".$record["Wholesale cost"];
	echo "<td>".$record["Rating"];
	echo "</tr>";
}
echo "</table><br/><br/>";
mysql_close($dbcon);
?>
<ul>
<li><a href="Hi.php"> Home </a></li>
<li><a href="Customer_Details.php"> Customer Details </a></li>
<li><a href="Employee_Details.php"> Employee Details </a></li>
<li><a href="Wholesaler_Details.php"> Wholesaler Details </a></li>
<li><a href="Purchase_Details.php"> Purchase Details </a></li>
<li><a href="Sales_Details.php"> Sales Details </a></li>
<li><a href="Total_Balance_Sheet.php"> Total Balance Sheet </a></li>
</ul>
</body>
</html>