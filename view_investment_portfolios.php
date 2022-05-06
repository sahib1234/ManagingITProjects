<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "cpm_db"); 
	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. " 
	        . mysqli_connect_error());
	}

	$sql = "SELECT Portfolio_ID, Customer_ID, Investment_ID FROM portfolio_table";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "Portfolio ID: " . $row["Portfolio_ID"]. " - Customer ID: " . $row["Customer_ID"]. " - Investment ID: " . $row["Investment_ID"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>View Investment Portfolios</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}
</style>
<body>
<script type="text/javascript">
</script>	
</body>
</html>