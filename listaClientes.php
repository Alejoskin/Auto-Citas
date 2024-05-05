<?php
include("conection.php");

$search_term = ""; // Initialize the variable

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $search_term = mysqli_real_escape_string($db, $_POST['search']);
    $query = "SELECT * FROM clientes WHERE nombre LIKE '%$search_term%'";
} else {
    $query = "SELECT * FROM clientes";
}

$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Lista de Clientes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <a href="Logout.php" class="button">Logout</a>
    <a href="Home.php" class="button">Main Page</a>
  </header>
  <div class="container">
    <form action="" method="POST">
      <input type="text" name="search" placeholder="Search by name...">
      <button type="submit">Search</button>
    </form>  
  </div>    
  <div class="container">
    <h1> Lista de Clientes</h1>    
    <table class="w3-table-all w3-xlarge">
      <tr class="w3-teal">
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Cita</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['nombre'] . "</td>";

          $telefono = $row['telefono'];
          $formatted_telefono = substr($telefono, 0, 3) . "-" . substr($telefono, 3, 3) . "-" . substr($telefono, 6);
          echo "<td>" . $formatted_telefono . "</td>";
          echo "<td>" . $row['fecha'] . "</td>";
          echo "</tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>
