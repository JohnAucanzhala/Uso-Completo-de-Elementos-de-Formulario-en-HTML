<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Datos Recibidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contenedor {
      max-width: 800px;
      margin: 40px auto;
      border: 2px solid #0d6efd;
      padding: 25px;
      border-radius: 10px;
      background-color: #ffffff;
    }
  </style>
</head>
<body class="bg-light">

  <div class="contenedor">
    <h2 class="text-center text-success mb-4">Datos guardados correctamente</h2>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-primary">
          <tr>
            <th>Campo</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($_POST as $campo => $valor) {
              echo "<tr>";
              echo "<td><strong>" . htmlspecialchars($campo) . "</strong></td>";
              if (is_array($valor)) {
                  echo "<td>" . htmlspecialchars(implode(", ", $valor)) . "</td>";
              } else {
                  echo "<td>" . htmlspecialchars($valor) . "</td>";
              }
              echo "</tr>";
          }
          if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
              echo "<tr>";
              echo "<td><strong>Archivo subido</strong></td>";
              echo "<td>" . htmlspecialchars($_FILES['archivo']['name']) . "</td>";
              echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>

    <div class="text-center mt-4">
      <a href="index.html" class="btn btn-outline-primary">← Volver al formulario</a>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-3 mt-4">
    John Aucanzhala | NRC: 23357 | APLICACIÓN TECNOLOGÍAS WEB
  </footer>

</body>
</html>
