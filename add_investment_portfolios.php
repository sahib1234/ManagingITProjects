<!DOCTYPE html>
<html>
<head>
	<title>Add Customers</title>
</head>
<style type="text/css">
	* {box-sizing: border-box}

  input[type=text] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: red;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
<body>
<form action="insert_investment_portfolios.php" method="post">
  <div class="container">
    <h1>Add Investment Portfolio</h1>
    <p>Please fill in this form to add an investment portfolio.</p>
    <hr>
    <label for="cusid"><b>Customer ID</b></label>
    <input type="text" placeholder="Enter Customer ID" name="cusid" required>
    <br>
    <label for="invid"><b>Investment ID</b></label>
    <input type="text" placeholder="Enter Investment ID" name="invid" required>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>