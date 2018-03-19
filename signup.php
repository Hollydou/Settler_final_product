<html lang="en">

<head>
    <title>Sign Up | Extras</title>
    <!--Template is from Madmin.swlabs.co. (2017). mAdmin | Angular. [online] Available at: http://madmin.swlabs.co/ [Accessed 9 Sep. 2017].-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--Loading bootstrap css-->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
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

<body id="signup-page">
<div class="page-form">
    <form id="signup-form" action="php/signup.php" class="form" method="post">
        <div class="header-content">
            <h1>Sign Up</h1>
        </div>
        <div class="body-content">
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Email address" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i>
                    <input id="password" type="password" placeholder="Password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i>
                    <input type="password" placeholder="Confirm Password" name="passwordConfirm" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4" for="role"><strong>I am a </strong></label>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control role" id="role" name = "role">
                            <option>User</option>
                            <option>Offeror</option>

                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group mbn"><a href="index.php" class="btn btn-warning"><i class="fa fa-chevron-circle-left"></i>&nbsp;
                Back</a>
                <button type="submit" class="btn btn-info pull-right">Submit &nbsp;
                    <i class="fa fa-chevron-circle-right"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/extra-signup.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script>
    //BEGIN CHECKBOX & RADIO
    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_minimal-grey',
        increaseArea: '20%' // optional
    });
    $('input[type="radio"]').iCheck({
        radioClass: 'iradio_minimal-grey',
        increaseArea: '20%' // optional
    });
    //END CHECKBOX & RADIO
</script>
<script type="text/javascript">
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-12', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>