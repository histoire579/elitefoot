<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login | Apaxy - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link href="{{ asset('dash/assets/images/favicon.ico') }}" rel="shortcut icon">

        <!-- Bootstrap Css -->
        <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Icons Css -->
        <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet">
        <!-- App Css-->
        <link href="{{ asset('dash/assets/css/app.min.css') }}" rel="stylesheet">

    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.html" class="logo"><img src="{{ asset('dash/assets/images/logo-light.png') }}" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">Responsive Bootstrap 4 Admin Dashboard</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                  @yield('content')
                    
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/metismenu/metisMenu.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/simplebar/simplebar.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/node-waves/waves.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/js/app.js') }}" defer></script>

    </body>
</html>
