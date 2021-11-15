<!DOCTYPE html>
<html lang="vn-VI" dir="ltr" class="dark windows fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?=$title;?></title>

    <!-- Seo Google -->

    <meta name="description" content="<?=$site_title;?>" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name=’revisit-after’ content=’1 days’ />
    <meta http-equiv="content-language" content="vi" />
    <meta name="keywords" content="<?=$site_title;?>" />
    <meta name="author" content="Nguyễn Huy Phát" />
    <link rel="shortcut icon" type="image/png" href="<?=$site_domain;?>/assets/images/facebook.png" />
    <meta itemprop="image" content="<?=$site_domain;?>/assets/images/banner.jpg">

    <!-- Seo Facebook -->
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:url" content="<?=$site_domain;?>/index.php" />
    <meta property="og:title" content="Đăng nhập tài khoản" />
    <meta property="og:description" content="<?=$site_title;?>" />
    <meta property="og:image" content="<?=$site_domain;?>/assets/images/banner.jpg" />

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <meta name="theme-color" content="#ffffff">
    <script src="<?=$site_domain;?>/assets/js/config.js"></script>
    <script src="<?=$site_domain;?>/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="<?=$site_domain;?>/vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="<?=$site_domain;?>/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="<?=$site_domain;?>/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?=$site_domain;?>/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="<?=$site_domain;?>/assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link href="<?=$site_domain;?>/assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=$site_domain;?>/assets/css/responsive.bootstrap4.css" rel="stylesheet">
    <script type="text/javascript">
    const WEBSITE_URL = '<?=$site_domain;?>/',
        prefix = 'modun/';
    </script>
    <style>
    .page_speed_12041170 {
        font-size: 16px;
    }

    .page_speed_1289815590 {
        max-width: 20rem
    }

    .page_speed_1070702565 {
        background-image: url(https://automxh.vn/assets/img/illustrations/corner-1.png);
    }

    .page_speed_168560237 {
        background-image: url(https://automxh.vn/assets/img/illustrations/corner-2.png);
    }

    .page_speed_705406130 {
        background-image: url(https://automxh.vn/assets/img/illustrations/corner-3.png);
    }

    .page_speed_219467203 {
        max-width: 50px;
        max-height: 52px;
    }
    </style>
    <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
    </script>
    <script>
    grecaptcha.ready(function() {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('6Lc5LYgbAAAAAJ2iIIaN2abYKciLQW6P9CZrv33h', {
                action: 'validate_captcha'
            })
            .then(function(token) {
                // add token value to form
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SV8NY0NNJT"></script>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SV8NY0NNJT');
    </script>
</head>

<body>
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
            </script>