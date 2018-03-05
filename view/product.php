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
        <div id="banner" >
            <!-- Start #product-info -->
            <div id="product-info" class="pt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12 d-flex flex-column justify-content-center pt-2">
                            <img class="img-fluid" src="../images/arthrozene_3fronts.png"/>			
                        </div>
                        <div class="col-sm-7 col-xs-12 d-flex flex-column justify-content-center">
                            <h2>Next-Generation Joint Pain Solution</h2>
                            <p>Arthrozene is a 3-step solution that attacks joint pain and stiffness at their root. Its clinically tested ingredients decrease 
                                inflammation<sup>&dagger;</sup>, slow down cartilage degradation<sup>&dagger;</sup>, and increase lubrication<sup>&dagger;</sup>. 
                                This helps increase flexibility and pain-free movement so you can get back to the daily activities you enjoy<sup>&dagger;</sup>.
                            </p>
                            <button id="btn-fact" class="btn" type="button" data-toggle="collapse" data-target="#product-info-collapse-content" 
                                aria-expanded="false" aria-controls="product-info-collapse-content">
                                Click for Supplement Facts
                            </button>
                            <div id="product-info-collapse-content" class="collapse">
                                <p class="mt-3">Serving Size: 1 Capsule<br>Servings Per Container: 30</p>
                                <hr>
                                <div class="product-info-table">
                                    <table>
                                        <tbody>
                                            <tr class="amount">
                                                <td></td>
                                                <td class="amount-per-serving-td">Amount Per Serving</td>
                                                <td>% DV</td>
                                            </tr>
                                            <tr>
                                                <td>AprèsFlex® - Boswellia Serrata Extract</td>
                                                <td>100 mg</td>
                                                <td>*</td>
                                            </tr>
                                            <tr>
                                                <td>Mobilee® Natural Chicken Comb Extract (standardized to 60% hyaluronic acid, 5% collagen type II and 10% glucosaminoglycans)</td>
                                                <td>80 mg</td>
                                                <td>*</td>
                                            </tr>
                                            <tr>
                                                <td>B-2Cool® Native Collagen type II (chicken sternum)</span></td>
                                                <td>40 mg</td>
                                                <td>*</td>
                                            </tr>                           
                                        </tbody>
                                    </table>
                                </div>
                                <p><strong>* Daily Value (DV) Not Established</strong></p>	
                                <p><strong>Other ingredients:</strong> Hydroxypropyl methylcellulose (capsule), cellulose, magnesium stearate (vegetable source), silicon dioxide.</p>	
                                <p>AprèsFlex® is a registered trademark of Laila Nutraceuticals. U.S. Patent # 8,551,496 and other patents pending.</p>	
                                <p>Mobilee® and B-2Cool® are licensed trademarks of BIOIBERICA, SA.</p>		
                            </div>
                        </div>	
                    </div>			
                </div>	
            </div>
            <!-- End #product-info -->
        </div>
    
        <!-- Start the features -->
        <div class="container mb-4">
            <hr class="featurette-divider">
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

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading text-center">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead text-center">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. 
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo
                        llamcorper nulla non metus auctor frin ullamcorper nulla non mfringilla..
                    </p>
                </div>
                <div class="col-md-5 d-flex align-self-center">
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