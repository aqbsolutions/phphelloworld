<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers</title>
    <style>
      table, th, td {
        border: 2px solid #999999;
        border-collapse: collapse;
        font-family: sans-serif;
        padding: 15px;
      }
      table tr:nth-child(even) td {
        background-color: #CCCCCC;
      }
    </style>
</head>
<body>
<h1>this is from git</h1>
<h1>this is from git</h1>
<?php
require_once('config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);
}

// Perform SQL query
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>UID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>\n";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      echo "\t<tr>\n";
      foreach ($row as $col_value) {
          print "\t\t<td>$col_value</td>\n";
      }
      echo "\t</tr>\n";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
</body>
</html>
