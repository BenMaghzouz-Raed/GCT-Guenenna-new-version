<link rel="stylesheet" href="../Sass/Footer.css" type="text/css">

<footer style=<?php  
    if (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
    else { echo "'background-color: #283E6D;'"; }
?> >
        <div class="columns">

            <div class="logo">
                <a href="./"><img src="../Images/logo2.svg" alt="" id="logo"></a>

                <div class="social">
                   <a href="http://www.facebook.com" target="_blank"><img src="../Images/facebook-logo-64.png" alt=""></a> 
                    <a href="http://www.instagram.com" target="_blank"><img src="../Images/instagram-logo-64.png" alt=""></a>
                </div>
            </div>

            <div class="line"></div>
            
            <div class="info">
                <h3><?=$_Nav_Footer[3]?></h3>
                <p>48 Farhat Hachad 5190<br/>
                    Mahdia, Tunisia
                </p>
                <p>Fax: +216 73 658 118<br/>
                    Phone: +216 50 448 714<br/>
                    Phone: +216 55 091 815
                </p>
                <p>Email: <a href="contact@GCT-trade.com">contact@GCT-trade.com</a></p>
                
            </div>

            <div class="line"></div>

            <div class="info">
                <h3><?=$_Nav_Footer[4]?></h3>
                <a href="../Pages/products.php#trade-with-us"><p><?=$_Nav_Footer[5]?></p></a>
                <a href="../Pages/about.php#our-presence"><p><?=$_Nav_Footer[6]?></p></a>
                <a href="../Pages/about.php#origins"><p><?=$_Nav_Footer[7]?></p></a>
                <a href="../Pages/contact.php#contact-form"><p><?=$_Nav_Footer[8]?></p></a>
            </div>

        </div>
        <div class="credit">
            ©2020 <?=$_Nav_Footer[9]?><span><a href="mailto:bmraed7@gmail.com">BMRaed</a></span>
        </div>
    </footer>

    
    </body>
</html>