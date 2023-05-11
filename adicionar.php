<?php
require "connect.php";

$nome = $_GET['nome'];
$nascimento = $_GET['nascimento'];
$renda = $_GET['renda'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO aula1 VALUES ('$nome', '$nascimento', '$renda')";

if ($conn->query($sql) == TRUE) {
    header("location: index.php/?select=1");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>