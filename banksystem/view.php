<!DOCTYPE html>
<html>
<head>
    <title>View Customers</title>
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
</head>
<body>
<?php
    include('header.php');
    ?>
    <main>
        <div class='container'>
             <div class="table-responsive-xs">
            <table>
            <h2>CUSTOMER INFO</h2>
        <tr>
            <th>id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th class='hidden-xs'>Email</th>
            <th class="hidden-xs">Account number</th>
            <th>Account Balance`</th>
            <th>Action</th>
        </tr>

        <?php
    include('db.php');
    $sql = "SELECT * FROM customers";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        
        echo '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["first_name"].'</td>
        <td>'.$row["last_name"].'</td>
        <td class="hidden-xs">'.$row["email"].'</td>
        <td class="hidden-xs">'.$row["account_number"].'</td>
        <td>'.$row["account_balance"].'</td>
        <td><button class="view hidden-xs" id="'.$row["id"].'">View</button>
        <button class="trans"><a href="transfer.php?id='.$row["id"].'">Transfer</a></button> 
        <button class="withdraw"><a href="withdrawal.php?id='.$row["id"].'">Withdraw</a></button></td>
    </tr>';
      }
    } else {
      echo "<tr><td>0 results</td></tr>";
    }
    $conn->close();
    ?>
    </table>
    </div>
    <section class='sect'>
    <div class="modal-content" id='modal'>
    <span class="close">&times;</span>
    <h3>CUSTOMER PROFILE</h3>
    
  </div>
  </section>
</div>

</div>
    </div>
    </main>

    <?php 
    include('footer.php');
    ?>

 <script src="view.js"></script>
 <script src="./js/jquery-2.1.4.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>