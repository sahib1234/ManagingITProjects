<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "cpm_db"); 
	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. " 
	        . mysqli_connect_error());
	}

	$cusidErr = $invidErr = "";
	$cusid = $invid = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["cusid"])) {
	    $cusidErr = "Customer ID is required";
	  } else {
	    $cusid = test_input($_POST["cusid"]);
	  }
	  if (empty($_POST["invid"])) {
	    $invidErr = "Investment ID is required";
	  } else {
	    $invid = test_input($_POST["invid"]);
	  }
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	// Performing insert query execution
		$sql = "INSERT INTO portfolio_table VALUES (NULL,'$cusid', 
	    '$invid')";
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
	<title>Investment Portfolio Added</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}
</style>
<body>
	<div class="">
		<h1><strong>Investment Portfolio Added:</strong></h1>
        <p><strong>Customer ID: <?php echo $cusid;?><span class="error"><?php echo $cusidErr;?></span></strong></p>
        <p><strong>Investment ID: <?php echo $invid;?><span class="error"><?php echo $invidErr;?></span></strong></p>
	</div>
<script type="text/javascript">
</script>	
</body>
</html>