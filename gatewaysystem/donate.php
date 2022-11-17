<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">  
    <title>Sparks Donation</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/donate.css">
  

</head>
<body>

 
    <header>
    <div class='con'>
    <div class='nav-cont'>
<nav class="navbar navbar-inverse nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <img src="./images/Charity.png" alt="" class='img'>
                        <a class="navbar-brand" href="index.php">
                            <span id='spark-title'>Sparks FOUNDATION</span>
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
                        <li class='trans nav-link' ><a href="#explore" class='nav-lin'>EXPLORE</a></li>
                        <li class='bills nav-link'><a href="#" class='nav-lin'>DONATE</a></li>
                        <li class='data nav-link'><a href="#contact" class='nav-lin'>CONTACT US</a></li>
                    </ul>
                    </div>
                </div>
            </nav>
            </div>

            <main>
            <div class='cont-form'>
<h2>Donate</h2>

<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button class='btn' type="submit" onclick="payWithPaystack()"> Donate </button>
  </div>
</form>
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
                    <p class='delivery'>
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
    <script src="./js/pay.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 

        </body>
        </html>