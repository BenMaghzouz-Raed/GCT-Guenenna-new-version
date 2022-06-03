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
            <label for="full-name">Full Name*</label>
            <input type="text" id="full-name">

            <label for="email">Email*</label>
            <input type="text" id="email">

            <label for="message">Message</label>
            <textarea id="message" cols="30" rows="10"></textarea>

            <button class="send_button">Send</button>
        </form>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.1759020064787!2d10.703944499999997!3d35.301610499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301fc8476feb361%3A0x2341fcd7c6ac4f61!2s48%20Ave%20Farhat%20Hached%2C%20El%20Jem!5e0!3m2!1sar!2stn!4v1654198814385!5m2!1sar!2stn" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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