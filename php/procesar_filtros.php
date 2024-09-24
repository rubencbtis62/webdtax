<?php
include('sql.php');

$conn = new mysqli("localhost", "root", "Apcas123*", "webdtax");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$anio = $_POST['anio'];
$id_em = $_POST['id_em'];



$sql = "SELECT * FROM captura WHERE ";
if (!empty($anio)) {
    $sql .= "anio = '$anio'";
}
if (!empty($id_emp)) {
    $sql .= " AND id_em = '$id_em'";
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Columna1: " . $row["anio"]. " - Columna2: " . $row["id_em"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
