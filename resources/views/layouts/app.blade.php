<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bongo Tours</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="js/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/color.css">

</head>


<body>
    <div class="layout hpg1">

    @include('incs.header')



       @yield('contents')


    </div>
   




<script data-cfasync="false" src="https://grandetest.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flatpickr.js"></script>
<script src="js/custom-select.js"></script>
<script src="js/html5lightbox.js"></script>
<script src="js/lib/slick/slick.js"></script>
<script src="js/handleCounter.js"></script>

<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<script src="revolution/js/revolution.extension.actions.min.js"></script>
<script src="revolution/js/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/revolution.extension.migration.min.js"></script>
<script src="revolution/js/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/revolution.extension.video.min.js"></script>
<script src="revolution/js/revolution.initialize.js"></script>
<script src="revolution/js/revolution.initialize10.js"></script>


<script src="js/script.js"></script>

</body>
</html>
