<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agent immobilier</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
 <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Agent Immobilier</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="#service">About</a>
                    </li>
					 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<section id="service">
    <?php
	
	$visits=0;
	
			
$value=$_COOKIE['lastvisited'];
 setcookie("lastvisited", $value."buy,", time() + (86400 * 30), "/"); 
 $test=$_COOKIE['lastvisited'];


		if(isset($_COOKIE['buy']))
		{
			$value=$_COOKIE['buy'];
			$visits=$value+1;
			
			setcookie("buy",$visits);
		}
		else
		{
			setcookie("buy","1");
		}
		
	?>
			<div class="row">
			 <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">

                                <!-- Project Details Go Here -->
                                <h2>Buy Property</h2>
                                <p class="item-intro text-muted">We sell premium properties. If you are looking for right properties at the right prices we are the one for you.</p>
                                <img class="img-responsive img-centered" src="img/buy2.jpg" alt="">
                                <p>We are not just another online real estate listings site. We believe the process of buying or selling a home should not undermine the excitement of home ownership. 
Buying real estate is about more than just finding a place to call home. Investing in real estate has become increasingly popular over the last 50 years and has become a common investment vehicle. Although the real estate market has plenty of opportunities for making big gains, buying and owning real estate is a lot more complicated than investing in stocks and bonds
We are the only site that connects you with industry leading real estate and mortgage professionals to ensure you get the highest quality service and value.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> <a href="index.php">Close Project</a></button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		<div class="row">
		
			 <div class="container">
			 <hr>
			  <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
						<h3>Buy Now</h3>
						<p class="item-intro text-muted">2 BHK bunglow, 1450 sq ft.</p>
                                <img class="img-responsive img-centered" src="img/2bhk.jpg" alt="">
						
						</div>
        </div>
		</div>
        </div>
		</section>
   
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>