<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Booking Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <a class="button">Log Out</a>
    <a href="listaClientes.php" class="button" >List of Clients</a>
  </header>
  <div class="container">
    <h1>Appointment Booking Form</h1>
    <form action="insertCode.php" method="POST" id="appointmentForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
      <label for="date">Date of Appointment:</label>
      <input type="date" id="date" name="date" required>
      
      <a class="button" input type="submit" name="submit" >Book Appointment</a>
    </form>
  </div>
</body>
</html>
