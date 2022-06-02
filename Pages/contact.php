<?php  
define('PAGE', "Contact");
?>

<!-- ** HEAD ** -->
<?php require_once '../Includes/head.php'; ?>

<header>
    <!-- ** NAV ** -->
    <?php include '../Includes/nav.php'; ?>

    <section class='title_header'>
        <img src="../Images/slider_5.png" alt="" id="boat-image">        
        <div class='title'>
            <span class='top_page_title' id='blue-bg'>
            Get In Touch With Us
            </span>
        </div>
    </section>

</header>

<section class="contact_section">
    <div class="contact">
        <h1 id='contact-form'>Contact</h1>
        <form action="">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name">

            <label for="email">Email</label>
            <input type="text" id="email">

            <label for="message">Message</label>
            <textarea id="message" cols="30" rows="10"></textarea>

            <button class="send_button">Send</button>
        </form>
    </div>
    <div class="map">

    </div>
</section>

<section class="contact_info">
    <div class="info">
        <img src="../Images/place-marker-100.png" alt="">
        <div>
            <h3>Location:</h3>
            <p>
            48 Farhat Hachad 5190<br>
            Mahdia, Tunisia
            </p>
        </div>
    </div>
    <div class="info">
        <img src="../Images/phone-250.png" alt="">
        <div>
            <h3>Phone:</h3>
            <p>
            +216 73 658 118<br>
            +216 50 448 714<br>
            +216 55 091 815
            </p>
        </div>
    </div>
    <div class="info">
        <img src="../Images/email-sign-100.png" alt="">
        <div>
            <h3>E-mail:</h3>
            <p>contact@GCT-trade.com</p>
        </div>
    </div>
</section>

<!-- ** FOOTER ** -->
<?php require_once '../Includes/footer.php'; ?>