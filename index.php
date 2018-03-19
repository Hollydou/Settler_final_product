<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108087273-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-108087273-1');
    </script>
    <title>Sign In | Extras</title>
    <!--Template is from Madmin.swlabs.co. (2017). mAdmin | Angular. [online] Available at: http://madmin.swlabs.co/ [Accessed 9 Sep. 2017].-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--Loading bootstrap css-->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/themes/style1/pink-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/themes/style1/pink-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body id="signin-page">
    <div class="page-form">
        <form action="php/login.php" method="post" class="form">
            <div class="header-content">
                <h1>Log In</h1>
            </div>
            <div class="body-content">
                <div class="form-group">
                    <div class="input-icon right"><i class="fa fa-envelope"></i>
                        <input type="text" placeholder="Email address" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon right"><i class="fa fa-key"></i>
                        <input type="password" placeholder="Password" name="password" class="form-control">
                    </div>
                </div>
                <!--<div class="form-group pull-left">
                    <div class="checkbox-list ">
                        <label class="checkbox-custom checkbox-inline" data-initialize="checkbox"><input type="checkbox"> Keep me signed in</label>
                    </div>
                </div>-->
                <div class="form-group pull-right">
                    <input type="submit" value="Login" class="btn btn-success">
                        <i class="fa fa-chevron-circle-right"></i>
                    </input>
                </div>
                <div class="clearfix"></div>
                <div class="forget-password">
                    <h4>Forgot your Password?</h4>
                    <p>no worries, click <a href='#' class='btn-forgot-pwd'>here</a> to reset your password.</p>
                </div>
                <hr>
                <p>Don't have an account? <a id="btn-register" href="signup.php">Sign up Now</a>
                </p>
            </div>
        </form>
    </div>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!--loading bootstrap js-->
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="vendors/iCheck/icheck.min.js"></script>
    <script src="vendors/iCheck/custom.min.js"></script>
    <script>
        //BEGIN CHECKBOX & RADIO
        $('input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_minimal-grey',
            //increaseArea: '20%' // optional
        });
        $('input[type="radio"]').iCheck({
            radioClass: 'iradio_minimal-grey',
            //increaseArea: '20%' // optional
        });
        //END CHECKBOX & RADIO
    </script>


</body>

</html>