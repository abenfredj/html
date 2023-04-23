<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Staff</title>
    <style>
    html {
      font-family: sans-serif;
    }

    table {
      border-collapse: collapse;
      border: 2px solid rgb(200,200,200);
      letter-spacing: 1px;
      font-size: 0.8rem;
    }

    td, th {
      border: 1px solid rgb(190,190,190);
      padding: 10px 20px;
    }

    td {
      text-align: center;
    }

    caption {
      padding: 10px;
    }
    </style>
  </head>
<body style="background-color:yellow;">
<?php

#$hostname = "192.168.1.120";
#$hostname = "svc-db-staff-internal.database"
#$username = "root";
#$password = "MySecret123";
#$db = "db1";
$hostname = "svc-db-app2.db"
$username = "root";
$password = "MySecret123";
$db = "rh";


$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
	#	die("Database connection failed: " . $dbconnect->connect_error);
	echo "Failed to connect to MySQL: " . $dbconnect -> connect_error;

}
#echo "connection";

?>

<div style="color:#0000FF">
  <h3>Staff</h3>
</div>
<table>
      
      <tr style="background-color:#FF0000">
        
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Age</th>
        
      </tr>
      
    

      <colgroup>
        <col style="width:200px;">
        <col style="width:200px;">
	<col style="width:200px;">
	<col style="width:200px;">
      </colgroup>
      <tr>
  
<?php

$query = mysqli_query($dbconnect, "SELECT * FROM employees")
or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
echo  "<tr background-color:blue>
        <td>{$row['id']}</td>
        <th>{$row['firstname']}</th>
        <th>{$row['lastname']}</th>
        <th>{$row['email']}</th>
</tr>";

}
?>
</table>
</body>
</html>
