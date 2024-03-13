<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $p_numpla = isset($_POST['p_numpla']) ? $_POST['p_numpla'] : '';

    if (!empty($p_numpla)) {
        $stmt = $pdo->prepare("EXEC usp_vehiculo_sel ?");
        $stmt->bindParam(1, $p_numpla, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($results)) {
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Nombre Empresa</th>";
            echo "<th scope='col'>Zona</th>";
            echo "<th scope='col'>Afiliado</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody class= 'tbody-content'>";
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td class= 'td-content'>" . $row['nomEmpresaTransporte'] . "</td>";
                echo "<td>" . $row['zonatrabajo'] . "</td>";
                echo "<td>" . $row['verAfiliado'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<strong>No se encontró la placa ingresada.</strong>";
        }

        
    }
   
}
?>