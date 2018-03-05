<!doctype html>
<html lang="en">
  <head>
        <title>Fisico Minisite</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <!--[if IE]>
          <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
          <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
        <![endif]-->
        <!--[if lt IE 9]>
          <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
        <![endif]-->
        <!-- Custom fonts for this site -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="main">
        <!-- Nav -->
        <nav class="navbar navbar-expand-md  navbar-light bg-light fixed-top" id="main-nav">
            <div class="container">
                <div class="navbar-collapse collapse nav-content order-2">
                    <ul class="nav navbar-nav">
                        <li id="index_link" class="nav-item">
                            <a class="nav-link" href="index">HOME</a>
                        </li>
                        <li id="product_link" class="nav-item">
                            <a class="nav-link" href="view/product">PRODUCT</a>
                        </li>
                        <li id="faqs_link" class="nav-item">
                            <a class="nav-link" href="view/faqs">FAQs</a>
                        </li>
                        <li id="presentation_link" class="nav-item">
                            <a class="nav-link" href="view/presentation">PRESENTATION</a>
                        </li>
                       
                    </ul>
                </div>
                <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2" >
                    <li class="nav-item"><a class="nav-link" id="logo-area" href="index"><img src="images/logo.png"></a></li>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
                <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
                    <ul class="ml-auto nav navbar-nav">
                        <li id="order_now_link" class="nav-item">
                             <a class="nav-link" href="view/order_now">ORDER NOW</a>
                         </li>
                        <li id="contact_link" class="nav-item">
                            <a class="nav-link" href="view/contact">CONTACT</a>
                        </li>
                        <li id="policy_link" class="nav-item">
                            <a class="nav-link" href="view/policy">POLICY</a>
                        </li>
                        <li id="advertorial_link" class="nav-item">
                            <a class="nav-link" href="view/advertorial">ADVERTORIAL</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Nav for smaller screen-->
        <div id="slide_in_nav" class="fixed-top" style="display:none">
           <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                  <a href="index">HOME</a>
                  <a href="view/product">PRODUCT</a>
                  <a href="view/faqs">FAQs</a>
                  <a href="view/presentation">PRESENTATION</a>
                  <a href="view/order_now">ORDER NOW</a>
                  <a href="view/contact">CONTACT</a>
                  <a href="view/policy">POLICY</a>
                  <a href="view/advertorial">ADVERTORIAL</a>
              </div>
           </div>
           <div class="d-flex justify-content-around align-content-center mt-2">
             <a class="nav-link" href="index"><img src="images/logo.png"></a>
             <span style="font-size:30px;cursor:pointer" class="pt-3" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
           </div>
        </div>
        <!-- /ENd of Nav for smaller screen-->


        <!-- Banner -->  
        <div class="jumbotron" id="banner">
            <h1>Next-Generation Joint Pain Solution</h1>
            <h4>With 3 potent ingredients that soothe discomfort, eliminate stiffness, while improving flexibility and mobility.</h4>
            <hr class="my-4" style="color:white">
            <p>Stay in touch for special offers and discounts. Learn about natural health supplements and practices by joining our Email list.</p>
            <form class="form-inline justify-content-center">
              <label class="sr-only" for="yourEmail">Email</label>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon mt-2 mr-1"></div>
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <button id="sign_up" type="button" class="btn btn-warning my-2 my-sm-0"><b>Sign Up</b></button>
            </form>
        </div>

        <!-- Product description -->
        <div class="container mb-5" id="description">
            <div class="row">
                <div class="card col-md-4  col-sm-12 border-0">
                    <img class="card-img-top" src="images/potent-ingredients.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Premium Ingredients</h4>
                      <p class="card-text">B-2Cool® type II collagen, Mobilee® hyaluronic acid, and ApresFlex® potent joint health triad that  triad that attacks the problem at its root.</p>
                      <a href="#" class="btn btn-primary btn-block">Learn More</a>
                    </div>
                </div>
    
                <div class="card col-md-4 col-sm-12 border-0">
                    <img class="card-img-top" src="images/research-and-clinical-trials.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Research/Clinical Trials</h4>
                      <p class="card-text">Arthrozene's trademarked ingredients are backed by clinical research and human trials. To see all data, safety, and approval studies.</p>
                      <a href="#" class="btn btn-primary btn-block">Learn More</a>
                    </div>
                </div>
    
                <div class="card col-md-4 col-sm-12  border-0">
                    <img class="card-img-top" src="images/az-card.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Try Today - RISK-FREE</h4>
                      <p class="card-text">Arthrozene has a a build-up analgesic effect in the body and provides pain relief in as little as 5 days. Special offers are available for customers.</p>
                      <a href="#" class="btn btn-primary btn-block">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

         <!-- Footer -->
         <?php require_once('view/_footer.php');  ?>
       
    </div>
    <!-- End of Main -->
  </body>
</html>