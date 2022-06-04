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
                <?=$_Nav_Footer[0]?>
                </a>
            </li>
            <li>
                <a href="../Pages/products.php" class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                <?=$_Nav_Footer[1]?>
                </a>
            </li>
            <li>
                <a href="../Pages/about.php" class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?> >
                <?=$_Nav_Footer[2]?>
                </a>
            </li>
            <li>
                <a href="../Pages/contact.php" class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?> >
                <?=$_Nav_Footer[3]?>
                </a>
            </li>
        </ul>
    </div>
    <div class="language">
        <form method="post">
            <select Name="select-lang" onchange='this.form.submit();'>  
                <option name="lang" <?php if($_SESSION["lang"] == "en") echo 'selected'?> value="en"><span>ENG</span> <img src="" alt=""></option>  
                <option name="lang" <?php if($_SESSION["lang"] == "fr") echo 'selected'?> value="fr"><span>FR</span> <img src="" alt=""></option>  
                <option name="lang" <?php if($_SESSION["lang"] == "de") echo 'selected'?> value="de"><span>DE</span> <img src="" alt=""></option>  
            </select> 
        </form>
    </div>


    <div class="nav_mobile">
        <div class="nav_mobile_burger_toggle">
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
                    <h3><?=$_Nav_Footer[0]?></h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="../Pages/products.php">
                    <h3><?=$_Nav_Footer[1]?></h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="../Pages/about.php">
                    <h3><?=$_Nav_Footer[2]?></h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="../Pages/contact.php">
                    <h3><?=$_Nav_Footer[3]?></h3>
                    </a>
                </li>
            </ul>

            <div class="languages">
                <form method="post">
                    <button name="select-lang" value='en' type='submit' class= <?php if ($_SESSION["lang"] == "en")  {echo 'selected';}?> >ENG</span>
                    <button name="select-lang" value='fr' type='submit' class= <?php if ($_SESSION["lang"] == "fr")  {echo 'selected';}?> >FR</span>
                    <button name="select-lang" value='de' type='submit' class= <?php if ($_SESSION["lang"] == "de") {echo'selected';} ?> >DE</span>
                </form>
            </div>
        </div>
        
    </div>
</nav>
