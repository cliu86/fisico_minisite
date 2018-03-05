<?php 
    echo '
        <nav class="navbar navbar-expand-md  navbar-light bg-light fixed-top" id="main-nav">
            <div class="container">
                <div class="navbar-collapse collapse nav-content order-2">
                    <ul class="nav navbar-nav">
                        <li id="index_link" class="nav-item">
                            <a class="nav-link" href="../index">HOME</a>
                        </li>
                        <li id="product_link" class="nav-item">
                            <a class="nav-link" href="product">PRODUCT</a>
                        </li>
                        <li id="faqs_link" class="nav-item">
                            <a class="nav-link" href="faqs">FAQs</a>
                        </li>
                        <li id="presentation_link" class="nav-item">
                            <a class="nav-link" href="presentation">PRESENTATION</a>
                        </li>
                       
                    </ul>
                </div>
                <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2" >
                    <li class="nav-item"><a class="nav-link" id="logo-area" href="../index"><img src="../images/logo.png"></a></li>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
                <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
                    <ul class="ml-auto nav navbar-nav">
                        <li id="order_now_link" class="nav-item">
                             <a class="nav-link" href="order_now">ORDER NOW</a>
                         </li>
                        <li id="contact_link" class="nav-item">
                            <a class="nav-link" href="contact">CONTACT</a>
                        </li>
                        <li id="policy_link" class="nav-item">
                            <a class="nav-link" href="policy">POLICY</a>
                        </li>
                        <li id="advertorial_link" class="nav-item">
                            <a class="nav-link" href="advertorial">ADVERTORIAL</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    ';

    require_once('_small_nav.php');
?>