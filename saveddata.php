<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pengunjung</title>
  <style>
th {
  background-color: #04AA6D;
  color: white;
  padding: 15px;
  text-align: left;
}

  </style>
</head>
<body>
<div style="overflow-x:auto;">
<?php
$conn = mysqli_connect("localhost", "root","","feedback");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = ("SELECT id, nama, email, pesan FROM data");
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
  echo "<table><tr><th>ID</th><th>Nama</th><th>Email</th><th>Pesan</th></tr>";
  while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["email"]."</td><td>".$row["pesan"]."</td></tr>";
  }
  echo "</table>";
  } else {
  echo "0 results";
}
  
$conn->close();
?>
</div>
</body>
</html>
