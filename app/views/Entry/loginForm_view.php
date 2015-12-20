<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Giriş</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/css/bootstrap.min.css.map">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/fonts/glyphicons-halflings-regular.eot">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/fonts/glyphicons-halflings-regular.svg">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/fonts/glyphicons-halflings-regular.ttf">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/fonts/glyphicons-halflings-regular.woff">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/fonts/glyphicons-halflings-regular.woff2">
        <script src="<?php echo SITE_URL_LJQUERY; ?>/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/js/bootstrap.js">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/js/bootstrap.min.js">
        <link rel="stylesheet" href="<?php echo SITE_URL_LBOOTSTRAP; ?>/js/npm.js">

        <link href="<?php echo SITE_URL_LCSS; ?>/login.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo SITE_URL_LJS; ?>/app.js" type="text/javascript"></script>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

        <!--[if IE 7]>
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>

    <body>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row-fluid user-row">
                                <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" method="post" action="<?php echo SITE_URL; ?>/Login" class="form-signin">
                                <fieldset>
                                    <label class="panel-login">
                                        <div class="login_result"></div>
                                    </label>
                                    <input class="form-control" placeholder="Kullanıcı Mail" id="username" type="text" name="email">
                                    <input class="form-control" placeholder="Şifre" id="password" type="password" name="password">
                                    <br></br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Giriş Yap">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>