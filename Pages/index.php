<?php  
define('PAGE', "Home");
?>

<!-- ** HEAD ** -->
<?php include '../Includes/head.php'; ?>

<header class="header">

    <!-- ** NAV ** -->
    <?php include '../Includes/nav.php'; ?>

    <section class="hero">
        <div class="slider">
            <div class="text" data-aos="fade-down-right">
                <span class='big_title' ><?=$_Home[0]?></span>
                <p>
                    <?=$_Home[1]?>
                    <br/>
                    <?=$_Home[2]?>
                </p>     
            </div>
            <div class="buttons">
                <a href="./contact.php#contact-form"><button class="main_button"><?=$_Home[3]?></button></a>
                <a href="./about.php"><button class="sec_button"><?=$_Home[4]?></button></a>
            </div>
        </div>
    </section>

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
                <button class="main_button" id='btnOpenForm'><?=$_Home[28]?></button>
                <a href="./products.php#our-oliver"><button class="sec_button"><?=$_Home[29]?></button></a>
            </div>
        </div>
    </div>
</section>

<!-- Trade With Us PopUp -->
<?php require_once '../Includes/trade_popup.php'; ?>

<!-- ** FOOTER ** -->
<?php include '../Includes/footer.php'; ?>
