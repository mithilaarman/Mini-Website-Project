<!DOCTYPE html>

<html>
    <head>
    <title>Registration Form Table View</title>

    </head>
    <body bgcolor="orange" >
	<h1 style="margin-left:500px; font-size:40px;">Form Data Table from Database</h1>
	   
	    <table bgcolor="yellow" align="center" border="5px" style="width:1300px; line-height:40px; margin-top:50px">
		    <tr>
			    <th>FirstName </th>
				<th>LastName  </th>
				<th>Email  </th>
				<th>Password </th>
				<th>Message </th>
				<th>Number </th>
				<th>Gender </th>
			</tr>
			
			<?php
			$conn = mysqli_connect("localhost", "root", "", "test");
			if($conn-> connect_error){
				die("connection failed:".$conn->connect_error);
			}
			$sql = "SELECT firstName, lastName, email, password, message, number, gender from register";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td><td>".$row["message"].
						 "</td><td>".$row["number"]."</td><td>".$row["gender"]."</td></tr>";
				}
				echo "</table>";
			}
			else{
		echo "0 result";
			}
	$conn->close();
			?>
		
  </table>
</body>
</html>