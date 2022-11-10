<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="add.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>


<body>
  <header>
    <?php
    include('header.php');
    ?>
  </header>
  <div class='cont-form'>
<h2>Add Customer</h2><br>

<form action="insert-member.php" method="post">
  <label for="fname">First Name:</label><br>
  <input type="text" id="fname" name="first_name" required><br>

  <label for="sname">Last Name:</label><br>
  <input type="text" id="lname" name="last_name"><br>

  <label for="age">Email:</label><br>
  <input type="email" id="email" name="email"><br>


  <label for="pnumber" id='accnum'>Account Number: </label><br>
  <input type="number" id="accnum" name="account_number" required><br>

  <label for="pnumber" id='accbal'>Account Balance:</label><br>
  <input type="number" id="accbal" name="account_balance" required><br><br>

  <input type="submit" value="Add" class='btn'><br>
</form> 
</div>
</div>

<?php
include('footer.php');
?>
<script src="./js/add.js"></script>
</body>
</html>