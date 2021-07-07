<?php

//Start session to set global variables

		session_start();
			$_SESSION['name']=$_GET['yourname'];
			$_SESSION['Email']=$_GET['youremail'];
			
		?>

<html>
	<head>
		<link href="mystyles.css" type="text/css" rel="stylesheet"> 
		<title> See Performances </title>
	</head>
		<body>
		
		<?php
		
		//Heading and welcome message
		
		echo "<h1> The Nyx Theatre: </h1>";
			echo "<h2> Performances </h2>";
			echo "<p> Thank you ". $_SESSION['name'] . "!</p>";
			echo "<p> Below are the performances we are currently showing. Please click 'See Availability' to view the seats available for a performance.</p><br>";
		
		?>
		
		
		<?php
		
		//SQL database connection
		
			include('connect.php');
				$conn = connect();
		
		//SQL query
		
					$sql = "select * from Performance";
						$handle = $conn->prepare($sql);
						$handle->execute();
						$conn = null;
		
					$res = $handle->fetchAll();
		
		?>
		
		<!-- Table creation for SQL results -->
		
		<table>
			<tr>
				<th> Title </th>
				<th> Date </th>
				<th> Time </th>
			</tr>
			
		<?php
		
		//Foreach loop to generate a table row per result with form to send data to seats.php
		
		foreach($res as $row){
		
			echo '<form name="form2" action="seats.php" method="get">';
				echo "<tr>";
					echo "<td>".$row['Title']."</td><td>".$row['PerfDate']." </td><td> ".$row['PerfTime'].	"</td>";
					echo '<td>	<input type="submit" name="performance" value="See Availability"></td>';
				echo "</tr>";
					echo '<input type="hidden" name="Title" value=" ' . $row['Title'] . '"/>';
					echo '<input type="hidden" name="Date" value=" ' . $row['PerfDate'] . '"/>' ;
					echo '<input type="hidden" name="Time" value=" ' . $row['PerfTime'] . '"/>';
			echo "</form>";
		
		}

		?>
		
		</table>
		
	</body>
</html>
