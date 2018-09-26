<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
	<h1>Formulario</h1>
	<table>
		<form  action="register.php" method="post">
			<tr>
				<th><label>Nombre:</label></th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th><label>Apellido:</label></th>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr>
				<th><label>Correo:</label></th>
				<td><input type="email" name="email"></td>
			</tr>
			
			<tr>
				<th colspan="2"><button>Salvar</button></th>
			</tr>
		</form>
	</table>
	Su nombre es: <?php echo $_POST["name"]; ?><br>
	Su Apellido es: <?php echo $_POST["lastname"]; ?><br>
	Su email es: <?php echo $_POST["email"]; ?>
</body>
</html>