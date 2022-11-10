<head>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    

    <span class="close">&times;</span>
    <h3>CUSTOMER PROFILE</h3>
    <img src="./images/user.png" alt="User profile" class='modal-img'>
    <div class='modal-textcont'>
<?php
include('db.php');
$value = $_GET['value'];
    $sqla = "SELECT * FROM customers WHERE id='$value'";
    $resulta = $conn->query($sqla);
    
    if ($resulta->num_rows > 0) {
      // output data of each row
      while($rows = $resulta->fetch_assoc()) {
        ?>

    <P class='modal-text mod' >Firstname:<?php echo $rows['first_name']; ?></P>
    <P class='modal-text'>Lastname:<?php echo $rows['last_name']; ?></P>
    <P class='modal-text'>Email:<?php echo $rows['email']; ?></P>
    <P class='modal-text'>Account Number:<?php echo $rows['account_number']; ?></P>
    <P class='modal-text'>Account balance:<?php echo $rows['account_balance']; }} else {
      echo "<tr><td>0 results</td></tr>";
    }?></P>
    </div>
    </body>
  