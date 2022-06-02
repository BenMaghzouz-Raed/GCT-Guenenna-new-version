<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icons/logo.png">
    <title>GCT GUENENNA</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="Sass/style.css" type="text/css">

</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="" class="logo">
                <img src="Images/logo.svg" alt="">
            </a>
            <div class="nav_items">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Products</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="language">
                <select Name="" Size="">  
                    <option><span>ENG</span> <img src="" alt=""></option>  
                    <option><span>FR</span> <img src="" alt=""></option>  
                    <option><span>DE</span> <img src="" alt=""></option>  
                </select> 
            </div>
        </nav>

        <section class="hero">
            <div class="slider">
                <div class="text">
                    <span>Strategy, Structure, Vision</span>
                    <p>
                        Three Things That Set Guenenna Commerce 
                        <br/>De Tunisie (GCT) Apart.
                    </p>     
                </div>
                <div class="buttons">
                    <button class="main_button">Contact Us</button>
                    <button class="sec_button">Know more</button>
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
            <button class="main_button">
                Learn More
            </button>
        </div>

        <div class="right">
            <img src="./Images/2.jpg" alt="">
        </div>
    </section>
    
    <section class="Home_Section_2">
        <h1>What We Do ?</h1>
        <div class="testimonials">
            <div class="testimonial">
                <span class="title">
                    <img src="./Images/icon_1.png" alt="">
                    Our Export Business
                </span>
                <p>
                    Almost three decades on, we have expanded our export business to accommodate automobile 
                    parts like engines and cars, boats, and textiles.
                    Today, our business has grown to cater to exports of housing and kitchen materials, 
                    painting materials, beauty products, textiles, and curtains.
                </p>
            </div>

            <div class="testimonial">
                <span class="title">
                    <img src="./Images/icon_2.png" alt="">
                    our homegrown olive oil
                </span>
                <p>
                    Our most recent venture is in the food industry with our homegrown, 100% biological extra 
                    virgin olive oil. <br>
                    We have our own farms of olive oil where we produce the best quality olive oil.
                </p>
            </div>

            <div class="testimonial">
                <span class="title">
                    <img src="./Images/icon_3.png" alt="">
                    Our Plans To The Futur
                </span>
                <p>
                    Our past inspires us to propel us towards an even better future where GCT and its traders 
                    across the world can redefine what quality products and services mean today. 
                    We aim to become a global trading organization through sheer dedication, our ever-expanding 
                    network, and high-quality products and services.
                </p>
            </div>

        </div>

    </section>

    <section class="Home_Section_1 reverse">
        <div class="right">
            <img src="./Images/3.jpg" alt="">
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
            <button class="main_button">
                Know More
            </button>
        </div>
    </section>

    <section class="Product_Section">
        <div class="title">
            <img src="./Images/slogan.png" alt="">
            <h2>Our Product</h2>
        </div>
        
        <div class="product">
            <img src="./Images/slider_2.png" alt="">
            <div class="content">
                <div class="text">
                    <span>100% Biological Extra Virgin 
                        <br/>Olive Oil
                    </span>
                    <p>
                        It Is Extracted From Our Own Farms Of Olive Trees,
                        <br/>So We Always Pick The Best Produce.
                    </p>     
                </div>
                <div class="buttons">
                    <button class="main_button">IMPORT NOW</button>
                    <button class="sec_button">LEARN MORE</button>
                </div>
            </div>
        </div>

    </section>

    
    <!-- ** FOOTER ** -->
    <?php include './Pages/footer.php'; ?>

</body>
</html>