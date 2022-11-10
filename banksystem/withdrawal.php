<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php
    include('header.php');
    ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="view.php">V iew customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Withdrawal</li>
  </ol>
</nav>
    <main>
        <div>
            <?php
            include('db.php');
                
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    // $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    // $sql = "SELECT * from customers where id=$to";
    // $query = mysqli_query($conn,$sql);
    // $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['account_balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['account_balance'] - $amount;
                $sql = "UPDATE customers set account_balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['first_name'];
                $receiver = NULL;
                $sqli = "INSERT INTO transactions (`sender`, `receiver`, `balance`) VALUES ('$sender',NULL,'$amount');";
                // $query=mysqli_query($conn,$sql);

                if($query){
                    echo "<script> alert('Transaction Successful');
                    window.location='transactionhistory.php';
                        </script>";
                    
                }

                // $newbalance= 0;
                // $amount =0;
        }
    
}
?>
 <div class="container">
        <h1>Transaction</h1>
            <?php
                include 'db.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="withdraw" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Firstname</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['first_name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['account_balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
       
            <div>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-primary" name="submit" type="submit" id="btn">Withdraw</button>
            </div>
        </form>
    </div>
        </div>
    </main>

    <?php 
    include('footer.php');
    ?>
</body>
</html>