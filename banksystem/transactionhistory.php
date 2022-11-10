<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="view.php">View customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Transaction History</li>
  </ol>
</nav>
   <main>
	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include ('db.php');

        $sql ="SELECT * FROM transactions";

        $query =mysqli_query($conn, $sql);

        while($rows = mysqli_fetch_assoc($query))
        {
    ?>

        <tr>
        <td class="py-2"><?php echo $rows['id']; ?></td>
        <td class="py-2"><?php echo $rows['sender']; ?></td>
        <td class="py-2"><?php echo $rows['receiver']; ?></td>
        <td class="py-2"><?php echo $rows['balance']; ?> </td>
        <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            
    <?php
        }

    ?>
    </tbody>
</table>

</div>
</div>
</main> 
    <?php 
    include('footer.php');
    ?>
</body>
</html>