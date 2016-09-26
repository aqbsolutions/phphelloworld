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
<?php
$servername = "<%= node['awesome_customers_ubuntu']['database']['host'] %>";
$username = "<%= node['awesome_customers_ubuntu']['database']['admin_username'] %>";
$password = "<%= node['awesome_customers_ubuntu']['database']['admin_password'] %>";
$dbname = "<%= node['awesome_customers_ubuntu']['database']['dbname'] %>";

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