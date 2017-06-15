<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="_token" content="{!! csrf_token() !!}"/> -->
    <title>{{ isset($portfolio_owner) ? $portfolio_owner : 'ASDTechLtd.' }} | @yield('title')</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="/css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="/css/icon-style.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="/css/animate.css">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="/css/responsive.css" rel="stylesheet">

    @yield('header-styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    <script type="text/javascript">
    // $.ajaxSetup({
    //    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    // });
    </script>
    @yield('header-scripts')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    @include('includes.banner')
    @yield('container')

    <footer>
        <div class="container">
            @include('includes.company-portfolio-referral', [
                'is_forced_aligned_center' => true,
            ])
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center   wow fadeInUp animated">
                        <div class="social">
                            <h2>Follow us on Here</h2>
                            <ul class="icon_list">
                                <li><a href="https://www.facebook.com/asdtechltd/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/100298099163495311118"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/khandaker-tajuddin-5b183126"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://github.com/paybillsbd"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright_text   wow fadeInUp animated">
                            <p>&copy; Crystal Portfolio 2017. All Right Reserved By 
                                <a href="http://portfolio.asdtechltd.com" target="_blank">ASD Tech Team</a></p>
                            <p>Built for personal/ company portfolio for creative people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        
    @yield('modals')
    <!-- =========================
         SCRIPTS 
    ============================== -->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/script.js"></script>
    @yield('footer-scripts')

</body>

</html>