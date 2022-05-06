<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "cpm_db"); 
	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. " 
	        . mysqli_connect_error());
	}

	$nameErr = $emailErr = "";
	$name = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	  }
	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	  }
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	// Performing insert query execution
		$sql = "INSERT INTO customer_table VALUES (NULL, '$name', 
	    '$email')";
	if(mysqli_query($conn, $sql)){
	} else{
	// Echo error if failed query fails
	    echo "ERROR: $sql. " 
	        . mysqli_error($conn);
	}
	// Close connection
	mysqli_close($conn);
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Added</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}
</style>
<body>
	<div class="">
		<h1><strong>Customer Added:</strong></h1>
        <p><strong>Customer Name: <?php echo $name;?><span class="error"><?php echo $nameErr;?></span></strong></p>
        <p><strong>Customer Email: <?php echo $email;?><span class="error"><?php echo $emailErr;?></span></strong></p>
	</div>
<script type="text/javascript">
</script>	
</body>
</html>