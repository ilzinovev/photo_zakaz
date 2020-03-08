
<meta http-equiv="refresh" content="5;URL=http://photo-zakaz" />
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";

$db='zakazi';


// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$zakaz=mysqli_real_escape_string ($conn,$_GET['order']);
$razmer=mysqli_real_escape_string ($conn,$_GET['size']);
$bumaga=mysqli_real_escape_string ($conn,$_GET['paper']);
$polya=mysqli_real_escape_string ($conn,$_GET['border']);
$ima=mysqli_real_escape_string ($conn,$_GET['name']);
$telefon=mysqli_real_escape_string ($conn,$_GET['phone']);
$kolichestvo=mysqli_real_escape_string ($conn,$_GET['count']);

$sql = "INSERT INTO zakazi (order_number, size, paper,border,name,phone)
VALUES ('{$zakaz}', '{$razmer}', '{$bumaga}', '{$polya}',  '{$ima}', '{$telefon}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<br><br><br><h1 align=center color=blue>Заказ создан. Номер заказа: ".$_GET["order"]."</h1>"

?>
