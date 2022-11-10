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
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
</head>
<body>
    <header>
            <nav class="navbar navbar-inverse nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img src="./images/logo.png" alt="" class='img'>
                        <a class="navbar-brand" href="#">
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
                        <li class='data nav-link'><a href="#" class='nav-lin'>Contact Us</a></li>
                    </ul>
                    </div>
                </div>
            </nav>
            <aside class='container' id='firsttext'>
            <h2 class='spark-header'>There's so much to <br> do on <span class='sparks'>Sparks Bank!!!</span></h2>
            <p class='description'>Using <span class='sparks'>Sparks Bank</span>, 
            <br> you can pay for anything you need 
            <br> and access all other of our services</p> <br>
            <button class='button'> <a href="#menu">GET STARTED 
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </button>
            </aside>

            <aside class='container aside2'>
            <h2 class='spark-header'>Bank for free <br> with <span class='sparks'>Sparks Bank!</span></h2>
            <p class='description'>Using <span class='sparks'>Sparks Bank</span>, 
            <br> you can pay for anything you need 
            <br> without Extra charges on transactions</p> <br>
            <button class='button'> <a href="#menu">GET STARTED 
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </button>
            </aside>
            
    </header>

    <main>
        <div class='container'>
            <div class='row' id='menu'>
                <div class=' col-sm-6 col-md-4 card-cont'>
                    <a href="addcustomer.php">
                    <img src="./images/vector.jpg" alt="" class='img-card'>
                    <p class='detail'>Bank Transfer</p>
                    </a>
                </div>

                <div class='col-sm-6 col-md-4 card-cont card-mid'>
                    <a href="view.php">
                    <img src="./images/withdraw.jpg" alt="" class='img-card'>
                    <p class='detail'>Withdrawal</p>
                    </a>
                </div>

                <div class='col-sm-12 col-md-4 card-cont'>
                    <a href="view.php">
                    <img src="./images/customer.jpg" alt="" class='img-card'>
                    <p class='detail'>View All Customers</p>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="panel-footer">
        <div class="container">
            <div class="row">
                <section id="hours" class="col-sm-4 section-1">
                    <span>Hours:</span><br> Mon-Thurs: 08:00am-05:00pm Fri:10:00am-3:30pm Saturday and Sunday Closed
                    <hr class="visible-xs">
                </section>
                <section id="address" class="col-sm-4">
                    <span>Address:</span><br> 21 Heng Mui Keng Terrace, Icube Building<br> Singapore 119613
                    <p>
                        * Delivery area within 3-4 miles, with minimum order of $20 plus $3 charge for all deliveries.
                    </p>
                    <hr class="visible-xs">
                </section>
                <section id="testimonials" class="col-sm-4">
                    <p>
                        "There's no better banking system on this earth"
                    </p>
                    <p>
                        "Best banking system to ever exist on this earth"
                    </p>
                </section>
            </div>
            <div class="text-center">
                &copy; The Sparks Foundation Internship 2022.
            </div>
        </div>
    </footer>
    

    <script src="./js/jquery-2.1.4.min.js"></script>
    <script src="./js/home.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>