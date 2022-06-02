<link rel="stylesheet" href="../Sass/Nav.css" type="text/css">

<nav class="nav" style=<?php  
    if(PAGE == 'Home') { echo "'background-color: transparent;'" ;}
    elseif (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
    else { echo "'background-color: #283E6D;'"; }
?> >

    <a href="./" class="logo">
        <img src="../Images/logo.svg" alt="">
    </a>
    <div class="nav_items">
        <ul>
            <li>
                <a href="../Pages/index.php" class= <?php if (PAGE=='Home') { echo "'active'"; } else  { echo ""; } ?>>
                Home
                </a>
            </li>
            <li>
                <a href="../Pages/products.php" class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                Our Product
                </a>
            </li>
            <li>
                <a href="../Pages/about.php" class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?> >
                About Us
                </a>
            </li>
            <li>
                <a href="../Pages/contact.php" class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?> >
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
                    <a href="../Pages/index.php">
                    <h3>Home</h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="../Pages/products.php">
                    <h3>Our Product</h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="../Pages/about.php">
                    <h3>About Us</h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="../Pages/contact.php">
                    <h3>Contact</h3>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
