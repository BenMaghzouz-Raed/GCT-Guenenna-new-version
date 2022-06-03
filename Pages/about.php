<?php  
define('PAGE', "About Us");
?>

<!-- ** HEAD ** -->
<?php require_once '../Includes/head.php'; ?>

<header>
    <!-- ** NAV ** -->
    <?php include '../Includes/nav.php'; ?>

    <section class='title_header'>
        <img src="../Images/slider_4.jpg" alt="">        
        <div class='title'>
            <span class='top_page_title'>
                Like Father, Like Son.
            </span>
        </div>
    </section>

    <section class="about_section">
        <div class="origins">
            <div class="left">
                <h1 id='origins'>Origins</h1>
                <p>
                Originally a family of farmers, we at GCT have decided to use our ancestral
                experience and expertise in the field of agriculture to produce quality products.
                </p>
                <p>Founded in 1995, we are an import/export company based out of the Eastern Coast of Tunisia, 
                    North Africa with high regard for quality and business diversity
                </p>
            </div>
            <div class="right">
                <img src="../Images/full-logo.png" alt="">
            </div>
        </div>
        <div class="presence" id='our-presence'>
            <div class="left">
                <img src="../Images/Group 1.png" alt="" id="earth-image" style="width:50%;">
            </div>
            <div class="right">
                <h1>Our Presence</h1>
                <p>With a global import / export presence and trade representatives present in countries like <b>
                    Egypt, France, Italy, Germany, Canada, and South Korea</b>, today, we are present in almost all major countries of 
                    the world.
                </p>
                <p>
                We are open to business opportunities anywhere in the world and are not constrained by geographical boundaries.
                </p>
            </div>
        </div>
    </section>

    <section class="about_trade">
        <img src="../Images/Group 2.png" alt="">
        <p>Whether you’re a company or an individual, a wholesaler, or a reseller, we’re are open to all business prospects for 
            expanding to new markets.
        </p>
        <button class='main_button' id='btnOpenForm'>Trade With Us</button>
    </section>

    <section class="more_about" id="why-us">
        <h1>How We Beat Our Competition ?</h1>
        <p>
        We follow the three E’s of management for a seamless trading experience that is rich in diversity and logistics 
        expertise. However, but we stand out significantly from the competition when it comes to our working methodology.
        </p>
        <p>
        This is because, in addition to the three E’s of management, we also follow our very own three E’s of 
        business – Efficiency, Efficacy, and Expertise.
        </p>
        <div class="testimonials">
            <div class="testimonial">
                <span class="title">
                    <img src="../Images/icon_1.png" alt="">
                    Efficiency
                </span>
                <p>
                Our network of traders not makes us diverse but also very efficient in what we do.
                We adopt the best trading practices depending on the region.<br><br>
                We also understand that diversity results in different needs of customers, be it quality, taste, raw materials, textiles, or paint colors used.<br><br>
                We provide our own recommendations based on the same.
                </p>
            </div>
            <div class="testimonial">
                <span class="title">
                    <img src="../Images/icon_2.png" alt="">
                    Efficacy
                </span>
                <p>
                Our mission is to provide quality products and services and expand our business globally through the quality and variety of the products and services we offer.<br><br>
                In order to accomplish this, we implement only tried and tested trading strategies based on quality assurance.<br><br>
                 However, we also keep in mind ethnicity, cultural understanding, and regional requirements. 
                </p>
            </div>
            <div class="testimonial">
                <span class="title">
                    <img src="../Images/icon_3.png" alt="">
                    Expertise
                </span>
                <p>
                Our past inspires us to propel us towards an even better future where GCT and its traders across the world can redefine what quality products and services mean today.<br><br>
                We aim to become a global trading organization through sheer dedication, our ever-expanding network, and high-quality products and services.
                </p>
            </div>
        </div>
        
        <h1>OMNIPRESENCE</h1>
        <p>
        As a family of farmers, we capitalize on our own knowledge of the food and agricultural industries. We have successfully worked across Europe and Asia to increase our presence, and are open to trading in all countries of the world with companies, factories, farmers, and individual importers across the globe.
        </p>
        <p>
        Right from e-commerce industries to large companies, our clients trade with us for our openness to diversity and our motivation for expansion.<b> Regardless of where you trade or import from – Europe, Asia, France, Egypt, Italy – we have trade representatives almost all across the globe.</b>
        </p>
        <p>
        Their customer base values our export quality and product reliability, especially when it comes to our exports in the food industry. With the continued support of our clientele, our dream of global expansion is set to come true, and now, we dare to dream of a future that is truly global!
        </p>
    </section>

</header>

<!-- Trade With Us PopUp -->
<?php require_once '../Includes/trade_popup.php'; ?>

<!-- ** FOOTER ** -->
<?php require_once '../Includes/footer.php'; ?>