<!DOCTYPE html>
<!--
Name: Responsive Admin Dashboard with Twitter Bootstrap 3.1.1
Version: 2.0
Author: V.A.A
Website: vk.com/id11111111
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: Free
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Blah Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet" type="text/css" />
    {{ HTML::style( 'assets/plugins/font-awesome/css/font-awesome.min.css' ) }}
    {{ HTML::style( 'assets/plugins/bootstrap/css/bootstrap.min.css' ) }}
    {{ HTML::style( 'assets/plugins/uniform/css/uniform.default.css' ) }}
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{ HTML::style('assets/plugins/select2/select2.css') }}
    {{ HTML::style('assets/plugins/select2/select2-metronic.css') }}
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    {{ HTML::style('assets/css/style-metronic.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/style-responsive.css') }}
    {{ HTML::style('assets/css/plugins.css') }}
    {{ HTML::style('assets/css/themes/default.css', array( 'id'=>'style_color' ) ) }}
    {{ HTML::style('assets/css/pages/login.css') }}
    {{ HTML::style('assets/css/custom.css') }}
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="#some-page">
        Blah
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="post-sign-in" method="post">
        <h3 class="form-title">
            Login to your account
        </h3>
        <div class="has-error">
            @if( Session::has('message') )
                <div class="alert alert-danger display-show">
                    <button class="close" data-close="alert">
                    </button>
                    <span>{{ Session::get('message') }}</span>
                </div>
            @endif
        </div>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert">
            </button>
            <span>Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">
                Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username"
                       name="username" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">
                Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                       placeholder="Password" name="password" />
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn green pull-right">
                Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        {{ Form::token() }}
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2014 &copy; Admin Dashboard.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{{ HTML::script('') }}
{{ HTML::script('') }}
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<![endif]-->
{{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
{{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
{{ HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/plugins/jquery.blockui.min.js') }}
{{ HTML::script('assets/plugins/jquery.cokie.min.js') }}
{{ HTML::script('assets/plugins/uniform/jquery.uniform.min.js') }}
{{ HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ HTML::script('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}
{{ HTML::script('assets/plugins/select2/select2.min.js') }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ HTML::script('assets/scripts/core/app.js') }}
{{ HTML::script('assets/scripts/custom/login.js') }}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        App.init();
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>