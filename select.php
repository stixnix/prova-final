<?php
// SQL para selecionar todos os registros da tabela "users"
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Iniciar a tabela HTML
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>

                </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["email"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Fechar conexão
$conn->close();

?>