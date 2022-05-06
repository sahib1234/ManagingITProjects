<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "cpm_db"); 
	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. " 
	        . mysqli_connect_error());
	}

	$sql = "SELECT Customer_ID, Customer_Name, Customer_Email FROM customer_table";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "Customer ID: " . $row["Customer_ID"]. " - Customer Name: " . $row["Customer_Name"]. " - Customer Email: " . $row["Customer_Email"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>View Customers</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}
</style>
<body>
<script type="text/javascript">
</script>	
</body>
</html>