<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/logo_2_30x30.png" type="image/png">
        <title>Chhattisgarh pari foundation</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/logo_100x100.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">मुख्य पेज</a></li> 
                            <!-- <li class="nav-item"><a class="nav-link" href="ministries.html">शिक्षा</a></li> -->
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">योजनाएं</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/plan')}}">स्तर की आय योजना</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('/reward')}}">पुरस्कार </a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/gallery')}}">सेवाएं</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/gallery')}}">गैलरी</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/certificate')}}">प्रमाणपत्र</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact')}}">संपर्क करें</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/registration')}}" >पंजीकरण</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="sermons.html">लॉग इन करें</a></li> -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>