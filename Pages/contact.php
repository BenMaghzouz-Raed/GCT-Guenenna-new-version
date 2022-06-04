<?php  
define('PAGE', "Contact");
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

$errors = [];
$errorMessage = '';

if (!empty($_POST['full-name'])) {
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    } else {
        $mail = new PHPMailer();

        // specify SMTP credentials
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['PHP_MAILER_USERNAME'];
        $mail->Password = $_ENV['PHP_MAILER_PASSWORD'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom($email, 'Mailtrap Website');
        $mail->addAddress($_ENV['PHP_MAILER_EMAIL'], 'Me');
        $mail->Subject = 'New message from your website';

        // Enable HTML if needed
        $mail->isHTML(true);

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br($message)];
        $body = join('<br />', $bodyParagraphs);
        $mail->Body = $body;

        if($mail->send()){
            header('Location: ../Pages/contact.php');
            die;
        } else {
            $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}
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
                <?=$_Contact[0]?>
            </span>
        </div>
    </section>

</header>

<section class="contact_section">
    <div class="contact">
        <h1 id='contact-title'><?=$_Contact[1]?></h1>
        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
        <form action="contact.php" method="post" id="contact-form">
            <label for="full-name"><?=$_Contact[2]?>*</label>
            <input type="text" id="full-name" name="full-name">

            <label for="email"><?=$_Contact[3]?>*</label>
            <input type="text" id="email" name="email">

            <label for="message"><?=$_Contact[4]?></label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>

            <button class="send_button" type="submit" value="SendMail"><?=$_Contact[5]?></button>
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
            <h3><?=$_Contact[6]?></h3>
            <p>
            48 Farhat Hachad 5190<br>
            Mahdia, Tunisia
            </p>
        </div>
    </div>
    <div class="info">
        <img src="../Images/phone-250.png" alt="">
        <div>
            <h3><?=$_Contact[7]?></h3>
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