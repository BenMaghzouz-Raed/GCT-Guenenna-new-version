<?php  
define('PAGE', "Home");
?>

<!-- ** HEAD ** -->
<?php include '../Includes/head.php'; ?>

<header class="header">

    <!-- ** NAV ** -->
    <?php include '../Includes/nav.php'; ?>

    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">
            <div class="slide slide-0 active">
                <div class="slide__bg">
                </div>
                <div class="slide__text text">
                    <span class="slide__text-heading big_title"><?=$_Home[0]?></span>
                    <p class="slide__text-desc">
                        <?=$_Home[1]?>
                        <br/>
                        <?=$_Home[2]?>
                    </p> 
                    <div class="buttons slide__text-link">
                        <a href="./contact.php#contact-form"><button class="main_button"><?=$_Home[3]?></button></a>
                        <a href="./about.php"><button class="sec_button"><?=$_Home[4]?></button></a>
                    </div>
                </div>
            </div>
            <div class="slide slide-1">
            <div class="slide__bg">
            </div>
            <div class="slide__content text">
                <div class="slide__text">
                    <span class="slide__text-heading big_title">
                        <?=$_Home[24]?>
                        <?=$_Home[25]?>
                    </span>
                    <p class="slide__text-desc">
                        <?=$_Home[26]?>
                        <br/>
                        <?=$_Home[27]?>
                    </p> 
                    <div class="buttons slide-1-buttons">
                        <button class="main_button" id='btnOpenForm'><?=$_Home[28]?></button>
                        <a href="./products.php#our-oliver"><button class="sec_button"><?=$_Home[29]?></button></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</header>

<section class="Home_Section_1">
    <div class="left" data-aos="fade-right">
        <h1><?=$_Home[5]?></h1>
        <p>
            <?=$_Home[6]?>
        </p>
        <p>
            <?=$_Home[7]?>
        </p>
        <a href="./about.php#origins"><button class="main_button"><?=$_Home[8]?></button></a>
    </div>
    <div class="right" data-aos="fade-left">
        <img src="../Images/2.jpg" alt="">
    </div>
</section>

<section class="Home_Section_2">
    <h1><?=$_Home[9]?></h1>
    <div class="testimonials">
        <div class="testimonial" data-aos="zoom-out-right">
            <span class="title">
                <img src="../Images/icon_1.png" alt="">
                <?=$_Home[10]?>
            </span>
            <p>
                <?=$_Home[11]?>
                <br>
                <?=$_Home[12]?>
            </p>
        </div>
        <div class="testimonial" data-aos="zoom-out-right">
            <span class="title">
                <img src="../Images/icon_2.png" alt="">
                <?=$_Home[13]?>
            </span>
            <p>
                <?=$_Home[14]?>
                <br>
                <?=$_Home[15]?>
            </p>
        </div>
        <div class="testimonial" data-aos="zoom-out-right">
            <span class="title">
                <img src="../Images/icon_3.png" alt="">
                <?=$_Home[16]?>
            </span>
            <p>
                <?=$_Home[17]?>
                <br>
                <?=$_Home[18]?>
            </p>
        </div>
    </div>
</section>
<section class="Home_Section_1 reverse">
    <div class="right" data-aos="fade-right">
        <img src="../Images/3.jpg" alt="">
    </div>
    <div class="left" data-aos="fade-left">
        <h1><?=$_Home[19]?></h1>
        <p>
            <?=$_Home[20]?>
        </p>
        <p>
            <?=$_Home[21]?>
        </p>
        <a href="./about.php#why-us"><button class="main_button"><?=$_Home[22]?></button></a>
    </div>
</section>
<section class="Product_Section">
    <div class="title">
        <img src="../Images/slogan.png" alt="">
        <h2><?=$_Home[23]?></h2>
    </div>
    
    <div class="product">
        <img src="../Images/slider_2.png" alt="">
        <div class="content">
            <div class="text" data-aos="fade-down-right">
                <span class='big_title'><?=$_Home[24]?>
                    <br/><?=$_Home[25]?>
                </span>
                <p>
                    <?=$_Home[26]?>
                    <br/>
                    <?=$_Home[27]?>
                </p>     
            </div>
            <div class="buttons">
                <button class="main_button" id='btnOpenForm1'><?=$_Home[28]?></button>
                <a href="./products.php#our-oliver"><button class="sec_button"><?=$_Home[29]?></button></a>
            </div>
        </div>
    </div>
</section>

<!-- Trade With Us PopUp -->
<?php require_once '../Includes/trade_popup.php'; ?>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../JavaScript/home-slider.js"></script>
<!-- ** FOOTER ** -->
<?php include '../Includes/footer.php'; ?>
