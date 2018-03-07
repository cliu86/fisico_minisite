<!doctype html>
<html lang="en">
  <head>
   <?php require_once('_head.php');  ?>
  </head>
  <body>
    <div id="main">
        <!-- Nav -->
        <?php require_once('_nav.php');  ?>

        <!-- Contact -->  
        <div id="questions_title">
           <h1 class="mx-auto my-auto pt-2">Contact:</h1>
       </div>
         <!-- Contact content-->  
        <div class="container" id="contact">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">For inquiries and customer support, please use the form below to send us a message:</h4>
                <hr>
                <form class="needs-validation" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="first name" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="last name" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="subject" value="" required>
                            <div class="invalid-feedback">
                                Valid subject is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Message</label>
                        <textarea class="form-control" id="message" placeholder="message" rows= 5 required></textarea>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" style="background-color:#13a0e6" type="submit">Send Message</button>
                </form>
                <hr class="mb-4">
            </div>
            <!-- Contact info -->
            <div class="row">
                <div class="col-md-6">
                    <p>We can also be reached via the following:</p>
                    <p>Email to support [AT] arthrozene.com.</p>
                    <p>Phone: 800-392-4727 <b>(please use the contact form above for fastest service)</b>.</p>
                </div>

                 <div class="col-md-6">
                    <p>Postal Mail:</p>
                    <p>Fisico Inc. - 6 Lyberty Way, Suite 103</p>
                    <p>Westford, MA 01886</p>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <?php require_once('_footer.php');  ?>
    </div>
    <!-- End of Main -->
  </body>
</html>