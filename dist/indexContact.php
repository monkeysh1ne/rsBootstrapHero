<?php

if ($_POST['submit']) {

    if (!$_POST['name']) {
        $error = "<br/>- Please enter your name";
    }
    if (!$_POST['email']) {
        $error .= "<br/>- Please enter your email";
    }
    if (!$_POST['message']) {
        $error .= "<br/>- Please enter your message";
    }
    if (!$_POST['check']) {
        $error .= "<br/>- Please confirm you are human ;) ";
    }

    if ($error) {
        $result = '<div class="alert alert-danger" role="alert"><strong>Woops, there is an error.</strong>  Please correct the following: '.$error.'</div>';
    } else {
        mail("enquiries@rustyspoonweb.com","Contact message",
            "Name: ".$_POST['name'].
            "      Email: ".$_POST['email'].
            "   Message: ".$_POST['message']);

            $result = '<div class="alert alert-success" role="alert">Thank you, we\'ll be in touch shortly.</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RustySpoon Web Design</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body>
    <!--header starts-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#">RustySpoon Web Design</a></div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--header ends-->
    <!--main content starts-->
    <div class="container">
        <div class="jumbotron text-center">
            <h1>RustySpoon Web Design</h1>
            <p>Communicate / Understand / Design</p><a class="btn btn-success btn-lg" href="#">Contact Me</a></div>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Contact Form</h1>
                    <?php echo $result; ?><!--display success/error messages for form-->
                    <p>Send a message via the form below</p>
                    <form method="post" action="" role="form">

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name'];?>">
                        </div>

                       <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email'];?>">
                        </div>

                       <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message..."><?php echo $_POST['message'];?></textarea>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="check"> I am human
                            </label>
                        </div>

                        <div align="center">
                            <input type="submit" name="submit" class="btn btn-default" value="Send messsage"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!--main content ends-->
    <!--footer starts -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                <p class="navbar-text">©2016 RustySpoon Web Design</p>
            </div>
            <div class="navbar-text pull-right"><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter fa-2x"></i></a><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></div>
        </div>
    </div>
    <!--bg img lge play area-->
    <div class="backStretch"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>