<!DOCTYPE html>
<html class="loading light-layout" lang="en" data-layout="light-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="E-FARMER admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, E-FARMER admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page | E-FARMER</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets') }}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Login v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="brand-logo">
                                    <h2 class="brand-text text-primary ms-1">E-FARMER</h2>
                                </a>

                                <h4 class="card-title mb-1">Selamat datang di E-FARMER! 👋</h4>

                                @yield('content')


                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets') }}/js/core/app-menu.js"></script>
    <script src="{{ asset('app-assets') }}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <x-alert />
</body>
<!-- END: Body-->

</html>
