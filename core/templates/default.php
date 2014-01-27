<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="/assets/favicon.png">

        <title>miniCMS v3</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/flatlab/frontend/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/flatlab/frontend/css/theme.css" rel="stylesheet">
        <link href="/assets/flatlab/frontend/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="/assets/flatlab/frontend/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="/assets/flatlab/frontend/css/flexslider.css"/>
        <link href="/assets/flatlab/frontend/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link href="/assets/flatlab/frontend/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

        <link rel="stylesheet" href="/assets/flatlab/frontend/assets/revolution_slider/css/rs-style.css" media="screen">
        <link rel="stylesheet" href="/assets/flatlab/frontend/assets/revolution_slider/rs-plugin/css/settings.css" media="screen">

        <!-- Custom styles for this template -->
        <link href="/assets/flatlab/frontend/css/style.css" rel="stylesheet">
        <link href="/assets/flatlab/frontend/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="/assets/flatlab/frontend/js/html5shiv.js"></script>
          <script src="/assets/flatlab/frontend/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--header start-->
        <header class="header-frontend">
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="fa fa-bar"></span>
                            <span class="fa fa-bar"></span>
                            <span class="fa fa-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span> miniCMSv3</span></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Нүүр хуудас</a></li>
                            <li><a href="services.html"></a></li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Үйлчилгээ<b class=" fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Вэб хөгжүүлэлт</a></li>
                                    <li><a href="#">Вэб хостинг</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Buttons</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">miniCMS &trade;<b class=" fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Танилцуулга</a></li>
                                    <li><a href="#">Боломжууд</a></li>
                                    <li><a href="#">Технологи</a></li>
                                    <li><a href="#">Давуу тал</a></li>
                                    <li><a href="#">Гарын авлага</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Бүтээл</a></li>
                            <li><a href="#">Тусламж</a></li>
                            <li><a href="#">Мэдээ</a></li>
                            <li class="dropdown language">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" src="/assets/flatlab/frontend/img/flags/mn.png">
                                    <span class="username">Монгол</span>
                                    <b class=" fa fa-angle-down"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><img alt="" src="/assets/flatlab/frontend/img/flags/gb.png"> Англи</a></li>
                                    <li><a href="#"><img alt="" src="/assets/flatlab/frontend/img/flags/ru.png"> Орос</a></li>
                                    <li><a href="#"><img alt="" src="/assets/flatlab/frontend/img/flags/es.png"> Испани</a></li>
                                    <li><a href="#"><img alt="" src="/assets/flatlab/frontend/img/flags/ae.png"> Араб</a></li>
                                </ul>
                            </li>
                            <li><input type="text" placeholder=" Хайлт хийх.." class="form-control search"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        <!-- revolution slider start -->
        <div class="fullwidthbanner-container main-slider">
            <div class="fullwidthabnner">
                <ul id="revolutionul" style="display:none;">
                    

                    <!-- 1st slide  -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="/assets/flatlab/frontend/img/banner/banner_bg.jpg" alt="">
                        <div class="caption lft slide_title"
                             data-x="10"
                             data-y="125"
                             data-speed="400"
                             data-start="1500"
                             data-easing="easeOutExpo">
                            mBm TECHNOLOGY LLC
                        </div>
                        <div class="caption lft slide_subtitle dark-text"
                             data-x="10"
                             data-y="180"
                             data-speed="400"
                             data-start="2000"
                             data-easing="easeOutExpo">
                             Шуурхай, найдвартай, баталгаатай үйлчилгээ
                        </div>
                        <div class="caption lft slide_desc dark-text"
                             data-x="10"
                             data-y="240"
                             data-speed="400"
                             data-start="2500"
                             data-easing="easeOutExpo">
                            - Вэб сайт, гар утас, дэлгэцийн программ хангамж хөгжүүлэлт <br>
                            - Вэб байрлуулах талбар олгох, домэйн нэр олгох үйлчилгээ<br>
                            - Сургалт явуулах, зөвлөгөө өгөх үйлчилгэээ
                        </div>
                        <a class="caption lft slide_btn btn red slide_item_left" href="#" target="_blank"
                           data-x="10"
                           data-y="360"
                           data-speed="400"
                           data-start="3000"
                           data-easing="easeOutExpo">
                            Дэлгэрэнгүй
                        </a>
                        <div class="caption lft start"
                             data-x="640"
                             data-y="55"
                             data-speed="400"
                             data-start="2000"
                             data-easing="easeOutBack"  >
                            <img src="/assets/flatlab/frontend/img/banner/man1.png" alt="man">
                        </div>
                        <div class="caption lft slide_item_right"
                             data-x="330"
                             data-y="20"
                             data-speed="500"
                             data-start="5000"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/test_man.png" id="rev-hint2" alt="txt img">
                        </div>

                    </li>
                    
                    <!-- 2nd slide -->
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                        <div class="caption lfl slide_item_left"
                             data-x="10"
                             data-y="70"
                             data-speed="400"
                             data-start="1500"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/ban2.png" alt="Image 1">
                        </div>
                        <div class="caption lfr slide_title"
                             data-x="670"
                             data-y="120"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutExpo">
                            miniCMS v3 &trade;
                        </div>

                        <div class="caption lfr slide_subtitle dark-text"
                             data-x="670"
                             data-y="190"
                             data-speed="400"
                             data-start="2000"
                             data-easing="easeOutExpo">
                            Илүү хялбар, илүү хурдан
                        </div>
                        <div class="caption lfr slide_desc"
                             data-x="670"
                             data-y="260"
                             data-speed="400"
                             data-start="2500"
                             data-easing="easeOutExpo">
                            miniCMS буюу Вэбийн мэдээлэл боловсруулагч систем нь 2005 онд бүтээгдсэн <br>
                            бөгөөд, шинэ хувилбар болох v3-аа 2014 онд гаргаад байна. Шинэ хувилбар <br>
                            ажиллагааны хувьд энгийн, хялбар, ойлгомжтой болсон.
                        </div>
                        <a class="caption lfr btn yellow slide_btn" href="#"
                           data-x="670"
                           data-y="400"
                           data-speed="400"
                           data-start="3500"
                           data-easing="easeOutExpo">
                            Дэлгэрэнгүй
                        </a>

                    </li>

                    <!-- 3rd slide  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="">
                        <img src="/assets/flatlab/frontend/img/banner/white-bg.jpg" alt="">
                        <div class="caption lfl slide_item_right"
                             data-x="10"
                             data-y="105"
                             data-speed="1200"
                             data-start="1500"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/imac.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="25"
                             data-y="345"
                             data-speed="1200"
                             data-start="2000"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/tab.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="200"
                             data-y="330"
                             data-speed="1200"
                             data-start="2500"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/mobile.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="250"
                             data-y="230"
                             data-speed="1200"
                             data-start="3000"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/laptop.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="165"
                             data-y="30"
                             data-speed="500"
                             data-start="5000"
                             data-easing="easeOutBack">
                            <img src="/assets/flatlab/frontend/img/banner/text_imac.png" id="rev-hint1" alt="Image 1">
                        </div>

                        <div class="caption lfr slide_title slide_item_left"
                             data-x="670"
                             data-y="145"
                             data-speed="400"
                             data-start="3500"
                             data-easing="easeOutExpo">
                            Цогц үйлилгээ
                        </div>
                        <div class="caption lfr slide_subtitle slide_item_left dark-text"
                             data-x="670"
                             data-y="200"
                             data-speed="400"
                             data-start="4000"
                             data-easing="easeOutExpo">
                            Веб, мобайл, десктоп
                        </div>
                        <div class="caption lfr slide_desc slide_item_left dark-text"
                             data-x="670"
                             data-y="280"
                             data-speed="400"
                             data-start="4500"
                             data-easing="easeOutExpo">
                            Бүх төрлийн веб сайт <br>
                            Андройд болон iOs ухаалаг утасны аппликешн,<br>
                            Windows, Mac дэлгэцийн программууд.
                        </div>


                    </li>

                </ul>
                <div class="tp-bannertimer tp-top"></div>
            </div>
        </div>
        <!-- revolution slider end -->

        <!--container start-->
        <div class="container">
            <div class="row">
                <!--feature start-->
                <div class="text-center feature-head">
                    <h1>welcome to flatlab</h1>
                    <p>Professional html Template Perfect for Admin Dashboard</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <section>
                        <div class="f-box">
                            <i class=" fa fa-desktop"></i>
                            <h2>responsive design</h2>
                        </div>
                        <p class="f-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.</p>
                    </section>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <section>
                        <div class="f-box active">
                            <i class=" fa fa-code"></i>
                            <h2>friendly code</h2>
                        </div>
                        <p class="f-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.</p>
                    </section>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <section>
                        <div class="f-box">
                            <i class="fa fa-gears"></i>
                            <h2>fully customizable</h2>
                        </div>
                        <p class="f-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.</p>
                    </section>
                </div>
                <!--feature end-->
            </div>
            <div class="row">
                <!--quote start-->
                <div class="quote">
                    <div class="col-lg-9 col-sm-9">
                        <div class="quote-info">
                            <h1>developer friendly code</h1>
                            <p>Bundled with awesome features, UI resource unlimited colors, advanced theme options & much more!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <a href="#" class="btn btn-info purchase-btn">Purchase now</a>
                    </div>
                </div>
                <!--quote end-->
            </div>
        </div>


        <!--property start-->
        <div class="property gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-center">
                        <img src="/assets/flatlab/frontend/img/property-img.png" alt="">
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <h1>flat & modern trend design</h1>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.</p>
                        <a href="javascript:;" class="btn btn-purchase">Purchase now</a>
                    </div>
                </div>
            </div>
        </div>
        <!--property end-->

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <!--tab start-->
                    <section class="panel tab">
                        <header class="panel-heading tab-bg-dark-navy-blue">
                            <ul class="nav nav-tabs nav-justified ">
                                <li class="active">
                                    <a data-toggle="tab" href="#news">
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#events">
                                        Events
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#notice-board">
                                        Notice board
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content tasi-tab">
                                <div id="news" class="tab-pane active">
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <img src="/assets/flatlab/frontend/img/product1.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class=" p-head">News Tittle goes here</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <img src="/assets/flatlab/frontend/img/product2.png" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class=" p-head">News Tittle goes here 2</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. simsut dorlor</p>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <img src="/assets/flatlab/frontend/img/product1.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class=" p-head">News Tittle goes here 3</a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. sumon ahmed</p>
                                        </div>
                                    </article>
                                </div>
                                <div id="events" class="tab-pane">
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <!--image goes here-->
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="cmt-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            <p> <i class="fa fa-clock-o"></i> 1 hours ago</p>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <!--image goes here-->
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="cmt-head">Nulla vel metus scelerisque ante sollicitudin commodo</a>
                                            <p> <i class="fa fa-clock-o"></i> 23 mins ago</p>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <a class="pull-left thumb p-thumb">
                                            <!--image goes here-->
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="cmt-head">Donec lacinia congue felis in faucibus. </a>
                                            <p> <i class="fa fa-clock-o"></i> 15 mins ago</p>
                                        </div>
                                    </article>
                                </div>
                                <div id="notice-board" class="tab-pane ">
                                    <p>Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.</p>
                                    <p>Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--tab end-->
                </div>
                <div class="col-lg-6">
                    <!--testimonial start-->
                    <div class="about-testimonial boxed-style about-flexslider ">
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides about-flex-slides">
                                    <li>
                                        <div class="about-testimonial-image ">
                                            <img alt="" src="/assets/flatlab/frontend/img/testimonial-img-1.jpg">
                                        </div>
                                        <a class="about-testimonial-author" href="#">Ericson Reagan</a>
                                        <span class="about-testimonial-company">ABC Realestate LLC</span>
                                        <div class="about-testimonial-content">
                                            <p class="about-testimonial-quote">
                                                Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-testimonial-image ">
                                            <img alt="" src="/assets/flatlab/frontend/img/avatar2.jpg">
                                        </div>
                                        <a class="about-testimonial-author" href="#">Jonathan Smith</a>
                                        <span class="about-testimonial-company">DEF LLC</span>
                                        <div class="about-testimonial-content">
                                            <p class="about-testimonial-quote">
                                                Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--testimonial end-->
                </div>
            </div>

            <!--recent work start-->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="r-work">Recent Work</h2>
                    <ul class="bxslider">
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img1.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img1.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img2.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img2.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img3.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img3.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img4.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img4.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img5.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img5.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img6.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img6.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img7.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img7.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="element item view view-tenth" data-zlname="reverse-effect">
                                <img src="/assets/flatlab/frontend/img/works/img1.jpg" alt="" />
                                <div class="mask">
                                    <a data-zl-popup="link" href="javascript:;">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a data-zl-popup="link2" class="fancybox" rel="group" href="/assets/flatlab/frontend/img/works/img1.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--recent work end-->

        </div>

        <!--parallax start-->
        <section class="parallax1">
            <div class="container">
                <div class="row">
                    <h1>“And here i am using my own lungs like a sucker. How is education supposed to make <br>
                        me feel smarter?”</h1>
                </div>
            </div>
        </section>
        <!--parallax end-->

        <div class="container">
            <!--clients start-->
            <div class="clients">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <ul class="list-unstyled">
                                <li><a href="#"><img src="/assets/flatlab/frontend/img/clients/logo1.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/flatlab/frontend/img/clients/logo2.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/flatlab/frontend/img/clients/logo3.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/flatlab/frontend/img/clients/logo4.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/flatlab/frontend/img/clients/logo5.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--clients end-->
        </div>

        <!--container end-->

        <!--footer start-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <h1>contact info</h1>
                        <address>
                            <p>Address: No.28-63877 street</p>
                            <p>lorem ipsum city, Country</p>

                            <p>Phone : (123) 456-7890</p>
                            <p>Fax : (123) 456-7890</p>
                            <p>Email : <a href="javascript:;">contact@batmunkh.com</a></p>
                        </address>
                    </div>
                    <div class="col-lg-5 col-sm-5">
                        <h1>latest tweet</h1>
                        <div class="tweet-box">
                            <i class="fa fa-twitter"></i>
                            <em>Please follow <a href="javascript:;">@batmunkhcom</a> for all future updates of us! <a href="javascript:;">twitter.com/batmunkhcom</a></em>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                        <h1>stay connected</h1>
                        <ul class="social-link-footer list-unstyled">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/assets/flatlab/frontend/js/jquery.js"></script>
        <script src="/assets/flatlab/frontend/js/jquery-1.8.3.min.js"></script>
        <script src="/assets/flatlab/frontend/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/flatlab/frontend/js/hover-dropdown.js"></script>
        <script defer src="/assets/flatlab/frontend/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="/assets/flatlab/frontend/assets/bxslider/jquery.bxslider.js"></script>

        <script type="text/javascript" src="/assets/flatlab/frontend/js/jquery.parallax-1.1.3.js"></script>

        <script src="/assets/flatlab/frontend/js/jquery.easing.min.js"></script>
        <script src="/assets/flatlab/frontend/js/link-hover.js"></script>

        <script src="/assets/flatlab/frontend/assets/fancybox/source/jquery.fancybox.pack.js"></script>

        <script type="text/javascript" src="/assets/flatlab/frontend/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="/assets/flatlab/frontend/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!--common script for all pages-->
        <script src="/assets/flatlab/frontend/js/common-scripts.js"></script>

        <script src="/assets/flatlab/frontend/js/revulation-slide.js"></script>


        <script>

            RevSlide.initRevolutionSlider();

            $(window).load(function() {
                $('[data-zlname = reverse-effect]').mateHover({
                    position: 'y-reverse',
                    overlayStyle: 'rolling',
                    overlayBg: '#fff',
                    overlayOpacity: 0.7,
                    overlayEasing: 'easeOutCirc',
                    rollingPosition: 'top',
                    popupEasing: 'easeOutBack',
                    popup2Easing: 'easeOutBack'
                });
            });

            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

            //    fancybox
            jQuery(".fancybox").fancybox();



        </script>

    </body>
</html>
