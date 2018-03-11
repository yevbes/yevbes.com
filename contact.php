<?php require_once('includes/config.php'); ?>
<?php require "includes/db.php" ?>
<?php require "includes/config.php" ?>

<?php
$isChecked = true;

if (isset($_POST['do_submit'])) {
    $secret = $config['google_config']['secret_key'];
    $url = $config['google_config']['url_verify'];

    $response = file_get_contents($url . "?secret=" . $secret . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

    $data = json_decode($response);

    if (isset($data->success) AND $data->success == true) {
        $isChecked = true;
        $to = "yevbes@yevbes.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first_name'];
        $subject = $_POST['subject'];
        $subject2 = "Copy of your form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        unset($_POST);
    } else {
        $isChecked = false;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Yevgeniy Bespal">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact | <?php echo $config['site_title']; ?></title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Main Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9] -->

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="noselect">
<!-- HEAD -->
<?php include('parts/header.php') ?>

<!-- BODY -->
<div class="img-background-contact">
    <div class="container-fluid contact-body-design">
        <div class="container">
            <div class="row">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="well">
                    <fieldset>
                        <form-group>
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="color: #650004; font-size: 26px; background-color: rgba(255,100,30,0.5)">
                                            <?php
                                            if (!$isChecked) {
                                                echo '✖ Recaptcha validation fail: please check the captcha!';
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-8">
                                            <svg height="80" width="400">
                                                <text y="58">Contact Form</text>
                                            </svg>

                                        </div>
                                        <div class="col-md-4">
                                            <object type="image/svg+xml" data="./img/pluma.svg">
                                                Your browser does not support SVG
                                            </object>
                                            <div class="row">
                                                <div class="line-design"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <p class="text-design">
                                            Para cualquier tipo de consulta usted puede recurrir a este formulario.</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="col-one-design">
                                        <div class="row">
                                            <!-- Input Text -->
                                            <div class="form-group">
                                                <label class="control-label nodisplay">Name</label>
                                                <div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"
                                                                                           aria-hidden="true"></i></span>
                                                        <input name="first_name" placeholder="Name" class="form-control"
                                                               type="text" value="<?php echo @$_POST['first_name']; ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Input Text -->
                                            <div class="form-group">
                                                <label class="control-label nodisplay">Subject</label>
                                                <div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-thumb-tack"
                                                                                           aria-hidden="true"></i></span>
                                                        <input name="subject" placeholder="Subject" class="form-control"
                                                               type="text" value="<?php echo @$_POST['subject']; ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Input Text -->
                                            <div class="form-group">
                                                <label class="control-label nodisplay">Email</label>
                                                <div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                                        <input name="email" placeholder="Email" class="form-control"
                                                               type="email" value="<?php echo @$_POST['email']; ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Input Text -->
                                            <div class="form-group">
                                                <div class="g-recaptcha"
                                                     data-sitekey=<?php echo $config['google_config']['site_key']; ?>></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 message-input">
                                    <!-- Input Textarea  -->
                                    <div class="form-group">
                                        <label class="control-label nodisplay">Message</label>
                                        <div>
                                            <div class="form-input">
                                                <textarea class="form-control message" name="message"
                                                          placeholder="Enter text here..."
                                                          required><?php echo @$_POST['message']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 btns-design">
                                    <div class="col-md-6 btn-form">
                                        <div class="col-three-design ">
                                            <div class="row">
                                                <!-- Submit Button -->
                                                <div class="form-group">
                                                    <div>
                                                        <div class="form-input">
                                                            <button type="reset">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 btn-form">
                                        <div class="col-three-design">
                                            <div class="row">
                                                <!-- Submit Button -->
                                                <div class="form-group">
                                                    <div>
                                                        <div class="form-input">
                                                            <button type="submit" name="do_submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form-group>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- FOOTER -->
<?php include('parts/footer.php') ?>
<?php include('parts/footer-copyright.php') ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/motor.js" type="text/javascript"></script>
<script src="js/jquery.tagcanvas.min.js" type="text/javascript"></script>
<!--<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>-->
<!--<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>-->
</body>
</html>