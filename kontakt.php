<?php
include 'config.php';

if (isset($_POST['btn'])) {
  
  $msg = "";
/*include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/

    $meno = $_POST['meno'];
    $email = $_POST['email'];
    $predmet = $_POST['value'];
    $msg= '<div class="jumbotron">'. $_POST['meno'] . '<br>' . $_POST['email'] .'<br>' . $_POST['sprava'].'</div>';

    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress('kamila.shopdesign@gmail.com ');
      $mail->setFrom($email);
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interiérovému dizajnu sa venujem od roku 2001. Pocas dlhorocnej praxe som si vytvorila vazby<br> na overenych profesionalov v oblasti stolarstva, stavebnictva atd., vdaka ktorym Vam zabezpecim kompletnu realizaciu interieru na kluc.">
<meta name="robots" content="index, follow">
<meta name="keywords" content="interier,dizajn,byty,domy,kancelarske priestory">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="logo.jpg" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<title>Kontakt</title>
<style type="text/css">
iframe {
	width: 100%;
	height: 500px;
}
</style>
</head>
<body>
<br><br><br><br><br><br>
<nav id="menu" class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="logo.png" alt="loginko" style="width: 200px;" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="index.php">Domov</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="omne.php">O mne</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="sluzby.php">Služby</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="cennik.php">Cenník</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="kontakt.php">Kontakt</a>
      </li>
       <li class="nav-item">
        <a class="nav-link"  href="https://www.facebook.com/www.shopdesign.cz" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/dizajn_interier/?hl=sk&fbclid=IwAR3TlFeDVHbM9HWp6rjPVSolaPthBWPK5s3tNI6t55TEv1yW-zEzItM-pZw" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>  
</nav>

<div class="wow fadeInLeft animated" data-delay="0.1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class=cuheading>Kontaktuje ma</h2>
            </div>
        </div>
    </div>
</div>
<form id="contact_form" method="post" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div class="row" id="form_row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Meno</label>
                            <input type="text" class="form-control" id="name" placeholder="Vaše meno" name="meno" required />
                        </div>
                        <div class="form-group">
                            <label>
                                E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="Váš E-mail" autocomplete='email' name="email" required id="mailos" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Predmet</label>
                            <select id="subject" class="form-control" name="value" required="required">
                                <option value="" selected="">Vyberte si z možností</option>
                                <option value="Všeobecný zákaznícky servis">Zákaznický servis</option>
                                <option value="Návrhy">Návrhy</option>
                                <option value="Informacie">Informácie</option>
                                <option value="Konzultácie">Konzultácie</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Správa</label>
                            <textarea name="sprava" id="message" class="form-control" rows="9" cols="25" required
                                      placeholder="Vaša Správa"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Odoslať" id="btnContactUs" name="btn">
                    </div>
                </div>
        </div>
        <div class="col-md-4" id="address">
<span class="glyphicon glyphicon-globe"></span>
            <address>
                <strong>Shopdesign s.r.o.<br>
                </strong><br>
                Kamila Adámková<br>
                Hradné údolie 17, 811 01 Bratislava, SR<br>
                Email:
                <a href="mailto:#">kamila.shopdesign@gmail.com</a><br>
                <abbr title="Phone">
                    Tel.:</abbr>
                +421 948 145 144<br>
                Web : <a href="https://dizajninterier.sk/index.php" target="_blank">www.dizajninterier.sk</a><br>
                IČO: 50 286 854
            </address>
        </div>
    </div>
</div>

</form><br><br><br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d754.784109436089!2d17.09368414747668!3d48.14345458517387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c895fe14857b1%3A0x6b67f7dfeb7185a0!2sHradn%C3%A9+%C3%BAdolie+2002%2F17%2C+811+01+Bratislava%2C+Slovakia!5e0!3m2!1sen!2sie!4v1557589880276!5m2!1sen!2sie" frameborder="0" style="border:0" allowfullscreen></iframe>
<!-- Footer -->
<footer class="page-footer font-small bg-light lighten-3 pt-4">
    <div class="footer-copyright text-center py-3 text-primary">© 2019 Copyright: Shopdesign s.r.o.<br>
      Code/Design:<a href="https://globalgraphicdesign.eu" target="_blank" class="text-primary">&nbsp;Global Graphic & Design</a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>
</html>