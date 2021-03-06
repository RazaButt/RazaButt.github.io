<?php
$field_name = $_POST['sender_name'];
$field_email = $_POST['sender_email'];
$field_message = $_POST['sender_message'];
$field_subject = $_POST['sender_subject'];

$mail_to = 'razabutt1983@gmail.com';
$subject = 'Message from a site visitor '.$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Raza Butt - Contact</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="icon" href="site_logo.png" sizes="80x80" type="image/png">

  <link rel="stylesheet" href="css/normalize.css">

  <link rel="stylesheet" href="css/main.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <!-- custom styles -->
  <link rel="stylesheet" href="css/styles.css">
  
   <!-- google font -->  
  <link href='http://fonts.googleapis.com/css?family=Roboto:900,100,300,400' rel='stylesheet' type='text/css'>

  <!-- modernizr and respond -->
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->

            <header roler="banner">
              <nav class="navbar navbar-default main-navigation">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="index.html"><img src="img/site_logo.png" class="img-responsive"></a>
                    <span class="logo-text" title="Raza Butt" alt="Raza Butt">Raza Butt</span>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="index.html">About <span class="sr-only">(current)</span></a></li>
                      <li><a class="active" href="portfolio.html">Portfolio</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->

                </div><!--/.container-fluid -->
              </nav>
            </header>

            <article>
              <section>
                <div class="article-intro">
                  <div class="container">
                    <h1>Contact Raza Butt</h1>
                    <h4>Send Raza a message</h4>
                  </div>
                </div>
              </section>

              <section>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 col-md-3 pull-right author-profile-content">
                      <aside>
                        <div class="row clearfix">
                          <div class="col-xs-12 col-sm-4 col-md-12 profile-pic pull-left">
                            <img src="img/profile-pic.jpg" class="img-responsive img-center img-thumbnail" title="Raza">
                          </div>
                          <div class="col-xs-12 col-sm-8 col-md-12 pull-right">
                            <div class="contact-content">
                              <dl>
                                <dt>Email:</dt>
                                <dd>razabutt1983@gmail.com</dd>      
                              </dl>
                              <dl>
                                <dt>Web:</dt>
                                <dd>razabutt.co.uk</dd>
                              </dl>
                            </div>
                          </div> 
                        </div>
                      </aside>
                    </div>
                    <div class="col-sm-12 col-md-8 pull-left contact-form">
                      <div class="alert alert-danger contact-form-warn" role="alert"></div>
                      <div class="alert alert-success message-sent" role="alert">
                        <h1>MESSAGE SENT</h1>
                        <?php
                        if ($mail_status) { ?>
                        <p>Thank you for sending your message.</p>
                        <?php
                      }
                      else {
                        ?>
                        <p>Message not sent.</p>
                        <?php
                      }
                      ?>
                    </div>
                    <div class="contact-form-content">
                        <h2>Your Details</h2> 
                        <form id="send-message" class="form-horizontal" role="form" action="contact.php" method="post">
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="sender_name">Your Name:</label>
                            <div class="col-sm-9 col-md-9 col-xs-12">
                              <input type="Text" class="form-control" id="sender_name" placeholder="Enter your name" name="sender_name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="sender_email">Email:</label>
                            <div class="col-sm-9 col-md-9 col-xs-12">
                              <input type="email" class="form-control" id="sender_email" placeholder="Enter your email address" name="sender_email" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="sender_subject">Subject:</label>
                            <div class="col-sm-9 col-md-9  col-xs-12">
                              <input type="text" class="form-control" id="sender_subject" placeholder="Enter subject" name="sender_subject" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="sender_message" class="control-label col-sm-3">Message:</label>
                            <div class="col-sm-9 col-md-9 col-xs-12">
                              <textarea class="form-control" rows="5" id="sender_message" name="sender_message" placeholder="Enter your message" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 col-md-10">
                              <button type="submit" class="btn btn-default pull-right">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
              </section>
            </article>

            <footer class="footer">
              <div class="container">
                <div class="col-sm-4 profile-content clearfix">
                  <img src="img/profile-pic-small.jpg" class="img-responsive profile-pic-footer" title="Raza">
                  <p>A naturally approachable, results driven and focused Front End Developer with comprehensive experience of a variety of technologies, as well as, proven software development methodologies.</p>
                </div>
                <div class="col-sm-4 sm-content">

                  <ol class="social">
                      <li>
                        <a class="sm-link" href="http://uk.linkedin.com/in/razabutt"><img src="img/company/LinkedIn_logo_small.png" title="linkedIn" alt="LinkedIn"></a>
                        <span class="sm-text">Connect with Raza on <a href="http://uk.linkedin.com/in/razabutt">LinkedIn</a></span>
                      </li>
                      <li>
                        <a class="sm-link" href="https://twitter.com/Razab1983"><img src="img/company/Twitter_logo_small.png" alt="Twitter" title="Twitter"></a>
                        <span class="sm-text">Follow Raza on <a href="https://twitter.com/Razab1983">twitter</a></span>
                      </li>
                    </ol>
                </div>
                <div class="col-sm-4 nav-content">
                  <nav>
                    <dl class="footer-nav">
                      <dt><a href="index.html">About</a></dt>
                      <dd>Find out about Raza's skills and interests</dd>
                      <dt><a href="portfolio.html">Portfolio</a></dt>
                      <dd>View Raza's work and work experience</dd>
                      <dt><a href="contact.html">Contact</a></dt>
                      <dd>Send Raza a message</dd>
                    </dl>
                  </nav>
                </div>
              </div>
            </footer>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
            <script src="js/plugins.js"></script>
            <script src="js/forms.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

          </body>
          </html>
