<?php  
define('PAGE', "Home");
?>

<!-- ** HEAD ** -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/logo.svg">
    <title>GCT GUENENNA | <?php echo PAGE ?> </title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="Sass/style.css" type="text/css">
    <link rel="stylesheet" href="Sass/Nav.css" type="text/css">

    <!-- JavaScript -->
    <script src="JavaScript/main.js" defer></script>

</head>

<body>

<header class="header">

    <!-- ** NAV ** -->

    <nav class="nav" style=<?php  
        if(PAGE == 'Home') { echo "'background-color: transparent;'" ;}
        elseif (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
        else { echo "'background-color: #283E6D;'"; }
    ?> >

    <a href="./" class="logo">
        <img src="Images/logo.svg" alt="">
    </a>
    <div class="nav_items">
        <ul>
            <li>
                <a href="Pages/index.php" class= <?php if (PAGE=='Home') { echo "'active'"; } else  { echo ""; } ?>>
                Home
                </a>
            </li>
            <li>
                <a href="Pages/products.php" class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                Our Product
                </a>
            </li>
            <li>
                <a href="Pages/about.php" class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?> >
                About Us
                </a>
            </li>
            <li>
                <a href="Pages/contact.php" class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?> >
                Contact
                </a>
            </li>
        </ul>
    </div>
    <div class="language">
        <select Name="" Size="">  
            <option><span>ENG</span> <img src="" alt=""></option>  
            <option><span>FR</span> <img src="" alt=""></option>  
            <option><span>DE</span> <img src="" alt=""></option>  
        </select> 
    </div>


    <div class="nav_mobile">
        <div class="nav_mobile_humberger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        
        <div class="nav_mobile_items" style=<?php  
            if (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
            else { echo "'background-color: #283E6D;'"; }?> >
            <ul>
                <li class= <?php if (PAGE=='Home') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="Pages/index.php">
                    <h3>Home</h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="Pages/products.php">
                    <h3>Our Product</h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="Pages/about.php">
                    <h3>About Us</h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="Pages/contact.php">
                    <h3>Contact</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <section class="hero">
        <div class="slider">
            <div class="text">
                <span class='big_title'>Strategy, Structure, Vision</span>
                <p>
                    Three Things That Set Guenenna Commerce 
                    <br/>
                    De Tunisie (GCT) Apart.
                </p>     
            </div>
            <div class="buttons">
                <a href="./contact.php#contact-form"><button class="main_button">Contact Us</button></a>
                <a href="./about.php"><button class="sec_button">Know more</button></a>
            </div>
        </div>
    </section>

</header>


<section class="Home_Section_1">
    <div class="left">
        <h1>Who Are We?</h1>
        <p>
            Guenenna Commerce De Tunisie is a customer-centric trading company that deals with factories, 
            farmers, and individuals to trade quality products at very competitive prices.
        </p>
        <p>
            Established in the year 1995, we began our journey of exporting high-quality goods with 
            automobiles and small boats.
        </p>
        <a href="./about.php#origins"><button class="main_button">Learn More</button></a>
    </div>
    <div class="right">
        <img src="Images/2.jpg" alt="">
    </div>
</section>

<section class="Home_Section_2">
    <h1>What We Do ?</h1>
    <div class="testimonials">
        <div class="testimonial">
            <span class="title">
                <img src="Images/icon_1.png" alt="">
                Our Export Business
            </span>
            <p>
                Almost three decades on, we have expanded our export business to accommodate automobile 
                parts like engines and cars, boats, and textiles.<br>
                Today, our business has grown to cater to exports of housing and kitchen materials, 
                painting materials, beauty products, textiles, and curtains.
            </p>
        </div>
        <div class="testimonial">
            <span class="title">
                <img src="Images/icon_2.png" alt="">
                Our Homegrown Olive Oil
            </span>
            <p>
                Our most recent venture is in the food industry with our homegrown, 100% biological extra 
                virgin olive oil. <br>
                We have our own farms of olive oil where we produce the best quality olive oil.
            </p>
        </div>
        <div class="testimonial">
            <span class="title">
                <img src="Images/icon_3.png" alt="">
                Our Plans To The Futur
            </span>
            <p>
                Our past inspires us to propel us towards an even better future where GCT and its traders 
                across the world can redefine what quality products and services mean today.<br>
                We aim to become a global trading organization through sheer dedication, our ever-expanding 
                network, and high-quality products and services.
            </p>
        </div>
    </div>
</section>
<section class="Home_Section_1 reverse">
    <div class="right">
        <img src="Images/3.jpg" alt="">
    </div>
    <div class="left">
        <h1>Why Us?</h1>
        <p>
            We follow the three E’s of management for our ever-increasing network of clientele – 
            Efficiency, Economy, and Effectiveness.
        </p>
        <p>
            We understand our trading partner’s need for efficiency and financial constraints. 
            We know that we need to provide superb quality that impacts consumer experience and improves 
            the brand image of our trading partners.
        </p>
        <a href="./about.php#why-us"><button class="main_button">Know More</button></a>
    </div>
</section>
<section class="Product_Section">
    <div class="title">
        <img src="Images/slogan.png" alt="">
        <h2>Our Product</h2>
    </div>
    
    <div class="product">
        <img src="Images/slider_2.png" alt="">
        <div class="content">
            <div class="text">
                <span class='big_title'>100% Biological Extra Virgin 
                    <br/>Olive Oil
                </span>
                <p>
                    It Is Extracted From Our Own Farms Of Olive Trees,
                    <br/>So We Always Pick The Best Produce.
                </p>     
            </div>
            <div class="buttons">
                <button class="main_button">IMPORT NOW</button>
                <a href="./products.php#our-oliver"><button class="sec_button">LEARN MORE</button></a>
            </div>
        </div>
    </div>
</section>

<!-- ** FOOTER ** -->
<link rel="stylesheet" href="Sass/Footer.css" type="text/css">

<footer style=<?php  
    if (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
    else { echo "'background-color: #283E6D;'"; }
?> >
        <div class="columns">

            <div class="logo">
                <img src="Images/logo2.svg" alt="" id="logo">

                <div class="social">
                   <a href="http://www.facebook.com" target="_blank"><img src="Images/facebook-logo-64.png" alt=""></a> 
                    <a href="http://www.instagram.com" target="_blank"><img src="Images/instagram-logo-64.png" alt=""></a>
                </div>
            </div>

            <div class="line"></div>
            
            <div class="info">
                <h3>Contact</h3>
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
                <h3>Information</h3>
                <a href="Pages/products.php#trade-with-us"><p>Trade With Us</p></a>
                <a href="Pages/about.php#our-presence"><p>Why Us</p></a>
                <a href="Pages/about.php#origins"><p>Origins</p></a>
                <a href="Pages/contact.php#contact-form"><p>Help & FAQ</p></a>
            </div>

        </div>
        <div class="credit">
            ©2020 All Rights Reserved To GCT. This website is made by <span><a href="mailto:bmraed7@gmail.com">BMRaed</a></span>
        </div>
    </footer>

    
    </body>
</html>