<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

$query = "SELECT * FROM logaccounts";
$result = $conn->query($query);
$block = "BLOCK"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Analyzer</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
	<table>
		<tr>
			<th>Email</th>
			<th>Time</th>
			<th>Block Button</th>
		</tr>

		<?php
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["timee"] . "</td>";
				echo "<td><button>" . $block . "</button></td>";
				echo "</tr>";
				}
			$conn->close();
		?>
	</table>
</body>
</html>