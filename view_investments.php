<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "cpm_db"); 
	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. " 
	        . mysqli_connect_error());
	}

	$sql = "SELECT Investment_ID, Customer_ID, Investment_Name, Investment_Amount, Investment_Gains, Investment_Losses FROM investments_table";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "Investment_ID: " . $row["Investment_ID"]. " - Customer ID: " . $row["Customer_ID"]. " - Investment Name: " . $row["Investment_Name"]. " - Investment Amount: " . $row["Investment_Amount"].  " - Investment Gains: " . $row["Investment_Gains"]. " - Investment Losses: " . $row["Investment_Losses"]."<br>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>View Investments</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}
</style>
<body>
<script type="text/javascript">
</script>	
</body>
</html>