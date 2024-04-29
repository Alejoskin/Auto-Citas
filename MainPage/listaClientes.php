<!-- Aqui va el php para insertar-->
<?php
	include("conection.php");
	$query = "select * from clientes";
	$result = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Appointment Booking Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <a class="button">Log Out</a>
    <a href="main.php" class="button" >Main Page</a>
  </header>
  <div class="container">
	<h1> Lista de Clientes</h1> 
	<form action="" method="POST class" >
		
	<table class="w3-table-all">
		<tr class="w3-teal">
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Fecha</th>
		</tr>

	<?php
/* Specific search
		if(isset($_POST['submit']))
		{

			$search=$_POST['search'];
			$sql = "SELECT * FROM student WHERE student_debt >= '$search' ";
			$debt=mysqli_query($db, $sql);

			
			while($row = mysqli_fetch_array($debt))
			{
				?>
					<tr>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
						<td><?php echo $row['fecha']; ?></td>	
					</tr>
				<?php
			}
		}
		//Aqui va el search de todo si no hicieron submit
		else 
*/
		{
			if($row = mysqli_fetch_array($result))
			{
				?>
					<tr>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
						<td><?php echo $row['fecha']; ?></td>		
					</tr>
				<?php

			}
		}
		
	
	?>
	</table>
	
  
  <!-- Copy of the main page 
  <div class="container">
    <h1>Appointment Booking Form</h1>
    <form id="appointmentForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      <label for="date">Date of Appointment:</label>
      <input type="date" id="date" name="date" required>
      
      <button type="submit">Book Appointment</button>
    </form>
  </div> -->
</form>
</body>
</html>
