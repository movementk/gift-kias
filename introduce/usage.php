<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
</head>
<body class="sub introduce"> <!-- 폴더별 클래스 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aisde.php'); ?>
    <!-- Content Start -->
    <!-- 페이지 헤더 -->
    <div class="page-header">
        <h2 class="page-title">ABOUT KIAS</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">
                    <i class="icon-home"><span class="sr-only">메인으로</span></i>
                </a>
            </li>
            <li>기금소개</li>
            <li>기금용도</li>
        </ol>
    </div>
    <main id="content">
        <div class="container-fluid">
            <div class="page-wrap">
                <div class="row">
                    <div class="col-xs-12 col-lg-3">
                        <nav class="lnb-nav">
                            <h3 class="lnb-title visible-lg">
                                기금소개
                                <small>Aobut KIAS</small>
                            </h3>
                            <ul>
                                <li><a href="/introduce/greeting.php">인사말</a></li>
                                <li class="active"><a href="/introduce/usage.php">기금용도</a></li>
                                <li><a href="/introduce/faq.php">FAQ</a></li>
                                <li><a href="/introduce/directions.php">찾아오시는길</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="usage"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기금용도</h4>
                                </div>
                                <div class="section-content">
                                    <div class="summary">
                                        <h5>
                                             <i>대한민국 기초과학의 미래, 당신의 힘으로 밝혀 주십시오.</i><br>
                                             미래를 위한 선물, 고등과학원
                                        </h5>
                                        <p>
                                            기초과학은 창의성을 바탕으로 발전합니다.<br>
                                            창조는 자유로운 사고에서 나오며, 창의성은 다양한 
                                            재원을 바탕으로 제공된 이상적인 연구환경과 최대한의 
                                            자유를 보장할 때 가능한 일입니다. 우리나라 기초과학의
                                            위상을 높이고 고등과학원이 국제적인 연구기관으로
                                            자리매김하기 위해서는 여러분의 지속적인 후원과 큰
                                            힘이 될 것입니다. 
                                        </p>
                                        <p class="emphasis">
                                            <span>고등과학원의 미래는 우리나라의</span><br class="visible-xs"><span>과학기술의 미래이자</span><br><span> 바로 당신의 미래입니다</span>
                                        </p>
                                        <p>
                                            기초과학은 첨단기술의 기본이 됩니다.<br>
                                            당장은 아니지만, 미래 우리 후손들의 먹거리를 <br class="visible-xs">
                                            키워주는 일<br class="hidden-xs"> 고등과학원이 준비하고 있습니다. <br>
                                            여러분의 적극적인 참여를 기다립니다. 
                                        </p>
                                    </div>
                                    <div class="fund-list">
                                        <ul class="row">
                                            <li class="col-xs-12 col-sm-6">
                                                <figure>
                                                    <img src="/assets/images/introduce/img_fund_list1.jpg" class="img-responsive" alt="">
                                                    <figcaption>
                                                        <dl>
                                                            <dt>일반발전기금</dt>
                                                            <dd>KIAS의 우선사업에 활용하도록<br> 용도를 위임한 기금입니다.</dd>
                                                        </dl>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li class="col-xs-12 col-sm-6">
                                                <figure>
                                                    <img src="/assets/images/introduce/img_fund_list2.jpg" class="img-responsive" alt="">
                                                    <figcaption>
                                                        <dl>
                                                            <dt>지정발전기금</dt>
                                                            <dd>
                                                            기부자의 지정용도에 따라 운영합니다.<br>
                                                            학술연구, 우수연구진 처우개선, 연구, 시설, 도서, 석좌교수, 기타
                                                            </dd>
                                                        </dl>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Content End -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/common.js"></script>
</body>
</html>