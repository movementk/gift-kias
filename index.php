<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aisde.php'); ?>
    <!-- Content Start -->
    <main id="content">
        <div class="jumbotron">
            <ul>
                <li style="background-image: url(/assets/images/main/img_jumbo_slider01.jpg);">
                    <h2>
                        <small>대한민국 기초과학의 미래</small>
                        미래를 위한 선물 KIAS
                    </h2>
                    <hr>
                    <p>
                        Korea institute for Advanced Study<br>
                        Cradle of Great Scientific minds<br class="visible-xs">
                        in the 21st Century
                    </p>
                </li>
                <li style="background-image: url(/assets/images/main/img_jumbo_slider01.jpg);">
                    <h2>
                        <small>대한민국 기초과학의 미래</small>
                        미래를 위한 선물 KIAS
                    </h2>
                    <hr>
                    <p>
                        Korea institute for Advanced Study<br>
                        Cradle of Great Scientific minds<br class="visible-xs">
                        in the 21st Century
                    </p>
                </li>
            </ul>
        </div>
        <article class="gift-participation">
            <div class="container">
                <ul class="row">
                    <li class="col-xs-12 col-md-4">
                        <div class="details method">
                            <div class="vertical-box">
                                <p class="icon-img">
                                    <img src="/assets/images/main/icon_img01.png" alt="">
                                </p>
                                <h3>
                                    기부 참여방법
                                    <small>기부 참여 방법을 소개해 드립니다.</small>
                                </h3>
                                <a href="#" class="btn-link">자세히보기</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-xs-12 col-md-4">
                        <div class="details participation">
                            <div class="vertical-box">
                                <p class="icon-img">
                                    <img src="/assets/images/main/icon_img02.png" alt="">
                                </p>
                                <h3>
                                    기부 참여하기
                                    <small>기부 참여를 환영합니다.</small>
                                </h3>
                                <a href="#" class="btn-link">자세히보기</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-xs-12 col-md-4">
                        <div class="details online">
                            <div class="vertical-box">
                                <p class="icon-img">
                                    <img src="/assets/images/main/icon_img03.png" alt="">
                                </p>
                                <h3>
                                    온라인 약정
                                    <small>온라인 약정 방법을 소개해 드립니다.</small>
                                </h3>
                                <a href="#" class="btn-link">자세히보기</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
        <article class="introduce">
            <div class="container">
                <small>대한민국 기초과학의 미래</small>
                <h3><strong>당신의 힘</strong>으로<br class="visible-xs"> 밝혀 주세요<i>!</i></h3>
                <p>The future of KIAS is the future of Korea's<br class="visible-xs"> science and technology and your future.</p>
            </div>
        </article>
        <section class="notice">
            <div class="container">
                <div class="section-header">
                    <h3>NOTICE</h3>
                </div>
                <div class="section-content">
                    <ul class="row">
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#">
                                <figure>
                                    <figcaption>
                                        <b>01</b>
                                        <p>고등과학원 개원 20주년</p>
                                        <small class="date">2016. 09. 27</small>
                                    </figcaption>
                                    <img src="/assets/images/main/img_notice01.jpg" class="img-responsive" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#">
                                <figure>
                                    <figcaption>
                                        <b>02</b>
                                        <p>제7회 고등과학원 e-day e-time</p>
                                        <small class="date">2016. 09. 27</small>
                                    </figcaption>
                                    <img src="/assets/images/main/img_notice02.jpg" class="img-responsive" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#">
                                <figure>
                                    <figcaption>
                                        <b>03</b>
                                        <p>석학들과의 만남  정근모 박사</p>
                                        <small class="date">2016. 09. 27</small>
                                    </figcaption>
                                    <img src="/assets/images/main/img_notice03.jpg" class="img-responsive" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#">
                                <figure>
                                    <figcaption>
                                        <b>04</b>
                                        <p>문주현 회장과 함께하는 대중강연</p>
                                        <small class="date">2016. 09. 27</small>
                                    </figcaption>
                                    <img src="/assets/images/main/img_notice04.jpg" class="img-responsive" alt="">
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!-- Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="/assets/js/common.js"></script>
    <script>
        $(function($){
            $(document).ready(function(){
                $('.jumbotron > ul').bxSlider({
//                    nextText: '<i class="icon-right-open-big"><span class="sr-only">다음 슬라이드</span></i>',
//                    prevText: '<i class="icon-left-open-big"><span class="sr-only">이전 슬라이드</span></i>'
                    pager: false,
                    controls: false
                });
            });
        }(jQuery));
    </script>
</body>
</html>