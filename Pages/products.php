<?php  
define('PAGE', "Our Product");
?>

<!-- ** HEAD ** -->
<?php require_once '../Includes/head.php'; ?>

<header>
    <!-- ** NAV ** -->
    <?php include '../Includes/nav.php'; ?>

    <section class='title_header'>
        <img src="../Images/slider_3.jpg" alt="">        
        <div class='title'>
            <span class='top_page_title'>
                <?=$_Our_Product[0]?>
                <br/>
                <?=$_Our_Product[1]?>
            </span>
        </div>
    
    </section>
</header>

    <section class="our_story">
        <div class="image" data-aos="fade-right">
            <img src="../Images/5.jpg" alt="">
        </div>
        <div class="info">
            <div class="info_title">
                <h2><?=$_Our_Product[2]?></h2>
            </div>
            <p>
                <?=$_Our_Product[3]?>
            </p>
        </div>
    </section>

    <section class="product-details">
        <div class="product-details_icon">
            <img src="../Images/icon_olive.png" id='our-oliver'>
        </div>

        <h4><?=$_Our_Product[4]?></h4>

        <div class="details">
            <div class="left">
                <div class="single-detail">
                    <div class="num-icon" id="top">
                        <img src="../Images/icon_blood.png" alt="">
                        <h2>1</h2>
                    </div>
                    <p>
                        <?=$_Our_Product[5]?>                    
                    </p>
                </div>
                <div class="single-detail">
                    <div class="num-icon" id="middle">
                        <img src="../Images/icon_blood.png" alt="">
                        <h2>2</h2>
                    </div>
                    <p>
                        <?=$_Our_Product[6]?>
                    </p>
                </div>
                <div class="single-detail">
                    <div class="num-icon" id="bottom">
                        <img src="../Images/icon_blood.png" alt="">
                        <h2>3</h2>
                    </div>
                    <p>
                        <?=$_Our_Product[7]?>                    
                    </p>
                </div>
            </div>

            <div class="right">
                <div class="single-detail">
                    <div class="num-icon" id="top">
                        <img src="../Images/icon_blood.png" alt="">
                        <h2>4</h2>
                    </div>
                    <p>
                        <?=$_Our_Product[8]?>
                    </p>
                </div>
                <div class="single-detail">
                    <div class="num-icon" id="middle">
                        <img src="../Images/icon_blood.png" alt="">
                        <h2>5</h2>
                    </div>
                    <p>
                        <?=$_Our_Product[9]?>
                    </p>
                </div>
                <div class="single-detail">
                    <div class="num-icon" id="bottom">
                        <img src="../Images/icon_blood.png" alt="">
                        <h2>6</h2>
                    </div>
                    <p>
                        <?=$_Our_Product[10]?>                    
                    </p>
                </div>
            </div> 
        </div>
    </section>

    <section class="our_story" id='trade-with-us'>
        <div class="image" data-aos="fade-right">
            <img src="../Images/4.jpg" alt="">
        </div>
        <div class="info">
            <div class="info_title">
                <h2><?=$_Our_Product[11]?></h2>
            </div>
            <p>
                <?=$_Our_Product[12]?>
                <br>
                <?=$_Our_Product[13]?>
            </p>
            <button class="main_button" id='btnOpenForm'><?=$_Our_Product[14]?></button>
        </div>
    </section>

<!-- Trade With Us PopUp -->
<?php require_once '../Includes/trade_popup.php'; ?>

<!-- ** FOOTER ** -->
<?php require_once '../Includes/footer.php'; ?>