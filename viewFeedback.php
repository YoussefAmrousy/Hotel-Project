<?php
$user = 'root';
$password = '';
$database = 'web-project';
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM feedback ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<table>
			<tr>
				<th>id</th>
                <th>name</th>
				<th>room</th>
				<th>hotel score</th>
				<th>room score</th>
				<th>food score</th>
                <th>feedback</th>

    </tr>			
    <?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['room'];?></td>
				<td><?php echo $rows['score'];?></td>
				<td><?php echo $rows['score2'];?></td>
                <td><?php echo $rows['score3'];?></td>
				<td><?php echo $rows['feedback'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
