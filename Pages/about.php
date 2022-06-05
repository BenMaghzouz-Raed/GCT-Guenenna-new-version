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
                <?=$_About_Us[0]?>
            </span>
        </div>
    </section>
</header>

<section class="about_section">
    <div class="origins">
        <div class="left">
            <h1 id='origins'><?=$_About_Us[1]?></h1>
            <p>
                <?=$_About_Us[2]?>
            </p>
            <p>
                <?=$_About_Us[3]?>
            </p>
        </div>
        <div class="right" data-aos="fade-left">
            <img src="../Images/full-logo.png" alt="">
        </div>
    </div>
    <div class="presence" id='our-presence'>
        <div class="left" data-aos="fade-right">
            <img src="../Images/Group 1.png" alt="" id="earth-image" style="width:50%;">
        </div>
        <div class="right">
            <h1><?=$_About_Us[4]?></h1>
            <p>
                <?=$_About_Us[5]?>
                <b><?=$_About_Us[6]?></b>
                <?=$_About_Us[7]?>
            </p>
            <p>
                <?=$_About_Us[8]?> 
            </p>
        </div>
    </div>
</section>

<section class="about_trade">
    <img src="../Images/Group 2.png" alt="">
    <p>
        <?=$_About_Us[9]?>
    </p>
    <button class='main_button' id='btnOpenForm'><?=$_About_Us[10]?></button>
</section>

<section class="more_about" id="why-us">
    <h1><?=$_About_Us[11]?></h1>
    <p>
        <?=$_About_Us[12]?>
    </p>
    <p>
        <?=$_About_Us[13]?>
    </p>
    <div class="testimonials">
        <div class="testimonial" data-aos="zoom-in-right">
            <span class="title">
                <img src="../Images/icon_1.png" alt="">
                <?=$_About_Us[14]?>
            </span>
            <p>
                <?=$_About_Us[15]?>
                <br><br>
                <?=$_About_Us[16]?>
                <br><br>
                <?=$_About_Us[17]?>
            </p>
        </div>
        <div class="testimonial" data-aos="zoom-in">
            <span class="title">
                <img src="../Images/icon_2.png" alt="">
                <?=$_About_Us[18]?>
            </span>
            <p>
                <?=$_About_Us[19]?>
                <br><br>
                <?=$_About_Us[20]?>
                <br><br>
                <?=$_About_Us[21]?>
            </p>
        </div>
        <div class="testimonial" data-aos="zoom-in-left">
            <span class="title">
                <img src="../Images/icon_3.png" alt="">
                <?=$_About_Us[22]?>
            </span>
            <p>
                <?=$_About_Us[23]?>
                <br><br>
                <?=$_About_Us[24]?>                
            </p>
        </div>
    </div>
    
    <h1><?=$_About_Us[25]?></h1>
    <p>
        <?=$_About_Us[26]?>        
    </p>
    <p>
        <?=$_About_Us[27]?>        
        <b><?=$_About_Us[28]?></b>     
    </p>
    <p>
        <?=$_About_Us[29]?>        
    </p>
</section>

<!-- Trade With Us PopUp -->
<?php require_once '../Includes/trade_popup.php'; ?>

<!-- ** FOOTER ** -->
<?php require_once '../Includes/footer.php'; ?>