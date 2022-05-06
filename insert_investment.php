<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "cpm_db"); 
	// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. " 
	        . mysqli_connect_error());
	}

	$cusidErr = $nameErr = $amountErr = $gainErr = $lossErr = "";
	$cusid = $name = $amount = $gain = $loss = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["cusid"])) {
	    $cusidErr = "Customer ID is required";
	  } else {
	    $cusid = test_input($_POST["cusid"]);
	  }
	  if (empty($_POST["name"])) {
	    $nameErr = "Investment Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	  }
	  if (empty($_POST["amount"])) {
	    $amountErr = "Investment Amount is required";
	  } else {
	    $amount = test_input($_POST["amount"]);
	  }
	  if (empty($_POST["loss"])) {
	    $lossErr = "Investment Loss is required";
	  } else {
	    $loss = test_input($_POST["loss"]);
	  }
	  if (empty($_POST["gain"])) {
	    $gainErr = "Investment Amount is required";
	  } else {
	    $gain = test_input($_POST["gain"]);
	  }
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	// Performing insert query execution
		$sql = "INSERT INTO investments_table VALUES (NULL,'$cusid', 
	    '$name', '$amount', '$loss', '$gain')";
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
	<title>Investment Added</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}
</style>
<body>
	<div class="">
		<h1><strong>Investment Added:</strong></h1>
        <p><strong>Customer ID: <?php echo $cusid;?><span class="error"><?php echo $cusidErr;?></span></strong></p>
        <p><strong>Investment Name: <?php echo $name;?><span class="error"><?php echo $nameErr;?></span></strong></p>
        <p><strong>Investment Amount: <?php echo $amount;?><span class="error"><?php echo $amountErr;?></span></strong></p>
        <p><strong>Investment Gain: <?php echo $gain;?><span class="error"><?php echo $gainErr;?></span></strong></p>
        <p><strong>Investment Loss: <?php echo $loss;?><span class="error"><?php echo $lossErr;?></span></strong></p>
	</div>
<script type="text/javascript">
</script>	
</body>
</html>