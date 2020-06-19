<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Curso";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT u.id, u.nombre, u.Correo, u.Status, C.id, c.Nombre, c.Calificacion, c.Descripcion, c.Fecha_inicio, c.Status FROM usuario_curso uc inner join cursos c on uc.id=c.id INNER JOIN usuarios u on uc.id=u.id where u.id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Nombre"]. " " . $row["Correo"]. " - Name: " . $row["Status"]. " " . $row["id"]. " " . $row["Calificacion"]. " - Name: " . $row["Descripcion"]. " " . $row["Fecha_inicio"]. " - Name: " . $row["Status"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>