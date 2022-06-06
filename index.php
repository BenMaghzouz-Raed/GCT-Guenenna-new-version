<?php  
define('PAGE', "Home");
?>

<!-- ** HEAD ** -->
<?php
// SET LANGUAGE INTO SESSION
session_start();
if (!isset($_SESSION["lang"])) { $_SESSION["lang"] = "en"; }
if (isset($_POST["select-lang"])) { $_SESSION["lang"] = $_POST["select-lang"]; }
 
// LOAD LANGUAGE FILE
require_once "./Includes/lang-" . $_SESSION["lang"] . ".php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Images/favicon.ico" type="image/x-icon">
    <title>GUENENNA Commerce Tunisie (GCT) | 
        <?php if(PAGE == 'Our Product'){echo $_Our_Product[1];} else{echo PAGE;} ?> 
    </title>
    <meta name="description" content="GCT Guenenna Commerce De Tunisie is an import/export trading company, providing quality products and a Tunisian biological Extra Virgin olive oil">
    <meta name="keywords" content="GCT, GUENENNA, IMPORT, EXPORT, COMMERCE TUNISIE, OLIVE OIL">
    <meta name="author" content="GUENENNA Commerce Tunisie">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="Sass/style.css" type="text/css">

</head>

<body lang="<?=$_SESSION["lang"]?>">

<header class="header">

    <!-- ** NAV ** -->
    <link rel="stylesheet" href="Sass/Nav.css" type="text/css">

<nav class="nav" style=<?php  
    if(PAGE == 'Home') { echo "'background-color: transparent;'" ;}
    elseif (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
    else { echo "'background-color: #283E6D;'"; }
?> >

    <a href="./Pages/index.php" class="logo">
        <img src="Images/logo.svg" alt="">
    </a>
    <div class="nav_items">
        <ul>
            <li>
                <a href="Pages/index.php" class= <?php if (PAGE=='Home') { echo "'active'"; } else  { echo ""; } ?>>
                <?=$_Nav_Footer[0]?>
                </a>
            </li>
            <li>
                <a href="Pages/products.php" class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                <?=$_Nav_Footer[1]?>
                </a>
            </li>
            <li>
                <a href="Pages/about.php" class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?> >
                <?=$_Nav_Footer[2]?>
                </a>
            </li>
            <li>
                <a href="Pages/contact.php" class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?> >
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
                    <a href="./Pages/index.php">
                    <h3><?=$_Nav_Footer[0]?></h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Our Product') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="./Pages/products.php">
                    <h3><?=$_Nav_Footer[1]?></h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='About Us') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="./Pages/about.php">
                    <h3><?=$_Nav_Footer[2]?></h3>
                    </a>
                </li>
                <li class= <?php if (PAGE=='Contact') { echo "'active'"; } else  { echo ""; } ?>>
                    <a href="./Pages/contact.php">
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


    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">
            <div class="slide slide-0 active">
                <div class="slide__bg">
                </div>
                <div class="slide__text text">
                    <span class="slide__text-heading big_title"><?=$_Home[0]?></span>
                    <p class="slide__text-desc">
                        <?=$_Home[1]?>
                        <br/>
                        <?=$_Home[2]?>
                    </p> 
                    <div class="buttons slide__text-link">
                        <a href="./Pages/contact.php#contact-form"><button class="main_button"><?=$_Home[3]?></button></a>
                        <a href="./Pages/about.php"><button class="sec_button"><?=$_Home[4]?></button></a>
                    </div>
                </div>
            </div>
            <div class="slide slide-1">
            <div class="slide__bg">
            </div>
            <div class="slide__content text">
                <div class="slide__text">
                    <span class="slide__text-heading big_title">
                        <?=$_Home[24]?>
                        <?=$_Home[25]?>
                    </span>
                    <p class="slide__text-desc">
                        <?=$_Home[26]?>
                        <br/>
                        <?=$_Home[27]?>
                    </p> 
                    <div class="buttons slide-1-buttons">
                        <button class="main_button" id='btnOpenForm'><?=$_Home[28]?></button>
                        <a href="./Pages/products.php#our-oliver"><button class="sec_button"><?=$_Home[29]?></button></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
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
        <a href="./Pages/about.php#origins"><button class="main_button"><?=$_Home[8]?></button></a>
    </div>
    <div class="right" data-aos="fade-left">
        <img src="Images/2.jpg" alt="">
    </div>
</section>

<section class="Home_Section_2">
    <h1><?=$_Home[9]?></h1>
    <div class="testimonials">
        <div class="testimonial" data-aos="zoom-out-right">
            <span class="title">
                <img src="Images/icon_1.png" alt="">
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
                <img src="Images/icon_2.png" alt="">
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
                <img src="Images/icon_3.png" alt="">
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
        <img src="Images/3.jpg" alt="">
    </div>
    <div class="left" data-aos="fade-left">
        <h1><?=$_Home[19]?></h1>
        <p>
            <?=$_Home[20]?>
        </p>
        <p>
            <?=$_Home[21]?>
        </p>
        <a href="./Pages/about.php#why-us"><button class="main_button"><?=$_Home[22]?></button></a>
    </div>
</section>
<section class="Product_Section">
    <div class="title">
        <img src="Images/slogan.png" alt="">
        <h2><?=$_Home[23]?></h2>
    </div>
    
    <div class="product">
        <img src="Images/slider_2.png" alt="">
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
                <button class="main_button" id='btnOpenForm1'><?=$_Home[28]?></button>
                <a href="./Pages/products.php#our-oliver"><button class="sec_button"><?=$_Home[29]?></button></a>
            </div>
        </div>
    </div>
</section>

<!-- Trade With Us PopUp -->
<div class="form-popup-bg">
  <div class="form-container">
    <img src="Images/cancel-96.png" id='btnCloseForm' class="close-button">
    <h1><?=$_Popup_Trade[0]?></h1>
    <span><?=$_Popup_Trade[1]?></span>
    <form action="Includes/trade.func.php" method="post" id='trade-form'>
      <div class="form-group">
        <div class="group-error">
          <label for="company-name"><?=$_Popup_Trade[2]?>*</label>
          <p class="errormsg" id='error-name'></p>
        </div>
        <input type="text"  id="company-name" class="form-control" name="company-name"/>
      </div>
      <div class="form-group">
        <label for="country"><?=$_Popup_Trade[3]?></label>
        <select id="country" name="country">
          <option value="Afganistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antigua & Barbuda">Antigua & Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bonaire">Bonaire</option>
          <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Brazil">Brazil</option>
          <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
          <option value="Brunei">Brunei</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Canary Islands">Canary Islands</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Central African Republic">Central African Republic</option>
          <option value="Chad">Chad</option>
          <option value="Channel Islands">Channel Islands</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Cocos Island">Cocos Island</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo">Congo</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote DIvoire">Cote DIvoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Curaco">Curacao</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="East Timor">East Timor</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Falkland Islands">Falkland Islands</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="French Southern Ter">French Southern Ter</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Great Britain">Great Britain</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guinea">Guinea</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="Indonesia">Indonesia</option>
          <option value="India">India</option>
          <option value="Iran">Iran</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Isle of Man">Isle of Man</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Korea North">Korea North</option>
          <option value="Korea Sout">Korea South</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Laos">Laos</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libya">Libya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macau">Macau</option>
          <option value="Macedonia">Macedonia</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Malawi">Malawi</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Mexico">Mexico</option>
          <option value="Midway Islands">Midway Islands</option>
          <option value="Moldova">Moldova</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Nambia">Nambia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherland Antilles">Netherland Antilles</option>
          <option value="Netherlands">Netherlands (Holland, Europe)</option>
          <option value="Nevis">Nevis</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau Island">Palau Island</option>
          <option value="Palestine">Palestine</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Phillipines">Philippines</option>
          <option value="Pitcairn Island">Pitcairn Island</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Republic of Montenegro">Republic of Montenegro</option>
          <option value="Republic of Serbia">Republic of Serbia</option>
          <option value="Reunion">Reunion</option>
          <option value="Romania">Romania</option>
          <option value="Russia">Russia</option>
          <option value="Rwanda">Rwanda</option>
          <option value="St Barthelemy">St Barthelemy</option>
          <option value="St Eustatius">St Eustatius</option>
          <option value="St Helena">St Helena</option>
          <option value="St Kitts-Nevis">St Kitts-Nevis</option>
          <option value="St Lucia">St Lucia</option>
          <option value="St Maarten">St Maarten</option>
          <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
          <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
          <option value="Saipan">Saipan</option>
          <option value="Samoa">Samoa</option>
          <option value="Samoa American">Samoa American</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome & Principe">Sao Tome & Principe</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syria">Syria</option>
          <option value="Tahiti">Tahiti</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad & Tobago">Trinidad & Tobago</option>
          <option value="Tunisia" selected >Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks & Caicos Is">Turks & Caicos Is</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Erimates">United Arab Emirates</option>
          <option value="United States of America">United States of America</option>
          <option value="Uraguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Vatican City State">Vatican City State</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnam">Vietnam</option>
          <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
          <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
          <option value="Wake Island">Wake Island</option>
          <option value="Wallis & Futana Is">Wallis & Futana Is</option>
          <option value="Yemen">Yemen</option>
          <option value="Zaire">Zaire</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
      </div>
      <div class="form-group">
        <div class="group-error">
          <label for="email"><?=$_Popup_Trade[4]?>*</label>
          <p class="errormsg" id='error-mail'></p>
        </div>
        <input class="form-control" id="email" type="text" name="email"/>
      </div>
      <div class="form-group">
        <label for="note"><?=$_Popup_Trade[5]?></label>
        <textarea name="note" id="note" cols="30" rows="30"></textarea>
      </div>
      <button class="send_button"><?=$_Popup_Trade[6]?></button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="JavaScript/home-slider.js"></script>

<!-- ** FOOTER ** -->
<link rel="stylesheet" href="Sass/Footer.css" type="text/css">

<footer style=<?php  
    if (PAGE == 'Our Product') { echo "'background-color: #C47E10;'";}
    else { echo "'background-color: #283E6D;'"; }
?> >
        <div class="columns">

            <div class="logo">
                <a href="./"><img src="Images/logo2.svg" alt="" id="logo"></a>

                <div class="social">
                   <a href="http://www.facebook.com" target="_blank"><img src="Images/facebook-logo-64.png" alt=""></a> 
                    <a href="http://www.instagram.com" target="_blank"><img src="Images/instagram-logo-64.png" alt=""></a>
                </div>
            </div>

            <div class="line" id='logo-line'></div>
            
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
                <a href="Pages/products.php#trade-with-us"><p><?=$_Nav_Footer[5]?></p></a>
                <a href="Pages/about.php#our-presence"><p><?=$_Nav_Footer[6]?></p></a>
                <a href="Pages/about.php#origins"><p><?=$_Nav_Footer[7]?></p></a>
                <a href="Pages/contact.php#contact-form"><p><?=$_Nav_Footer[8]?></p></a>
            </div>

        </div>
        <div class="credit">
        <?php echo date("Y"); ?> <?=$_Nav_Footer[9]?><span><a href="mailto:raed.maghzouz@gmail.com">BMRaed</a></span>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script src="JavaScript/main.js" defer></script>
    
    </body>
</html>
