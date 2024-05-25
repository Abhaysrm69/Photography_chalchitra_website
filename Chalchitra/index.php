<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';
$Name = $_POST['Name'];
$Email = $_POST['Phone'];
$Packages = $_POST['Message'];

//Database connection
$conn = new mysqli('localhost','root','','Chalchitra');
if ($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into Chalchitra(Name,Phone,Message)
    values(?,?,?)");
    $stmt->bind_param("sss",$Name, $Phone, $Message);
    $stmt->execute();
    echo "Register Successful";
    echo '<a href="contact.php">Click</a>';
    $stmt->close();
    $conn->close();
}
?>