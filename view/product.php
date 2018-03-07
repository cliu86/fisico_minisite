<!doctype html>
<html lang="en">
  <head>
   <?php require_once('_head.php');  ?>
  </head>
  <body>
    <div id="main">
        <!-- Nav -->
        <?php require_once('_nav.php');  ?>
        <!-- Banner -->  
        <!-- Start #page-content -->
        <div class="jumbotron mb-5" id="banner">
            <h2>Next-Generation Joint Pain Solution</h2>
            <h4>With 3 potent ingredients that soothe discomfort, eliminate stiffness, while improving flexibility and mobility.</h4>
            <hr class="my-4" style="color:white">
            <p>Stay in touch for special offers and discounts. Learn about natural health supplements and practices by joining our Email list.</p>
            <form class="form-inline justify-content-center">
              <label class="sr-only" for="yourEmail">Email</label>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon mt-2 mr-1"></div>
                    <input type="text" id="sign_up_input" class="form-control " placeholder="Your Email">
                </div>
              <button id="sign_up" type="button" class="btn btn-warning my-2 my-sm-0"><b>Sign Up</b></button>
            </form>
        </div>
    
        <!-- Start the features -->
        <div class="container mb-4" id="features">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading text-center">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead text-center">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. 
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo
                        llamcorper nulla non metus auctor frin ullamcorper nulla non mfringilla..
                    </p>
                </div>
                <div class="col-md-5 d-flex align-self-center">
                    <img class="featurette-image img-fluid mx-auto" src="../images/potent-ingredients.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading text-center">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead text-center">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. 
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo
                        llamcorper nulla non metus auctor frin ullamcorper nulla non mfringilla..
                    </p>
                </div>
                <div class="col-md-5 order-md-1 d-flex align-self-center">
                    <img class="featurette-image img-fluid mx-auto" src="../images/research-and-clinical-trials.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette pb-4 mb-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading text-center">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead text-center">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. 
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo
                        llamcorper nulla non metus auctor frin ullamcorper nulla non mfringilla..
                    </p>
                </div>
                <div class="col-md-5 d-flex align-self-center ">
                    <img class="featurette-image img-fluid mx-auto" src="../images/az-card.jpg" alt="Generic placeholder image">
                </div>
            </div>
        </div> <!-- /End of THE FEATURETTES -->
    
        <!-- Footer -->
        <?php require_once('_footer.php');  ?>
    </div>
    <!-- End of Main -->
  </body>
</html>