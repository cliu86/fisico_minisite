<?php 
    echo '
    <div id="slide_in_nav" class="fixed-top" style="display:none">
        <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="../index">HOME</a>
            <a href="product">PRODUCT</a>
            <a href="faqs">FAQs</a>
            <a href="presentation">PRESENTATION</a>
            <a href="order_now">ORDER NOW</a>
            <a href="contact">CONTACT</a>
            <a href="policy">POLICY</a>
            <a href="advertorial">ADVERTORIAL</a>
        </div>
        </div>
        <div class="d-flex justify-content-around align-content-center mt-2">
            <a class="nav-link" href="../index"><img src="../images/logo.png"></a>
            <span style="font-size:2em;cursor:pointer" class="pt-3" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
    </div>
    ';
?>