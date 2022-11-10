<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <header>
            <nav class="navbar navbar-inverse nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img src="./images/logo.png" alt="" class='img'>
                        <a class="navbar-brand" href="index.php">
                            <span id='spark-title'>Sparks Bank</span>
                        </a>

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="collapsible-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right nav-list" id='nav-li'>
                        <li class='trans nav-link' ><a href="transactionhistory.php" class='nav-lin'>Transaction History</a></li>
                        <li class='bills nav-link'><a href="addcustomer.php" class='nav-lin'>Add Customer</a></li>
                        <li class='data nav-link'><a href="#" class='nav-lin'>contact</a></li>
                    </ul>
                    </div>
                </div>
            </nav>
</header>
</body>