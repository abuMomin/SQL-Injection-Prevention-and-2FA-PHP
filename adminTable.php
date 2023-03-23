<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

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
			<th>Column 1</th>
			<th>Column 2</th>
			<th>Column 3</th>
			<th>Column 4</th>
		</tr>
		<tr>
			<td>Row 1, Column 1</td>
			<td>Row 1, Column 2</td>
			<td>Row 1, Column 3</td>
			<td><button>Button 1</button></td>
		</tr>
		<tr>
			<td>Row 2, Column 1</td>
			<td>Row 2, Column 2</td>
			<td>Row 2, Column 3</td>
			<td><button>Button 2</button></td>
		</tr>
		<tr>
			<td>Row 3, Column 1</td>
			<td>Row 3, Column 2</td>
			<td>Row 3, Column 3</td>
			<td><button>Button 3</button></td>
		</tr>
		<tr>
			<td>Row 4, Column 1</td>
			<td>Row 4, Column 2</td>
			<td>Row 4, Column 3</td>
			<td><button>Button 4</button></td>
		</tr>
		<tr>
			<td>Row 5, Column 1</td>
			<td>Row 5, Column 2</td>
			<td>Row 5, Column 3</td>
			<td><button>Button 5</button></td>
		</tr>
		<tr>
			<td>Row 6, Column 1</td>
			<td>Row 6, Column 2</td>
			<td>Row 6, Column 3</td>
			<td><button>Button 6</button></td>
		</tr>
    </table>
</body>
</html>