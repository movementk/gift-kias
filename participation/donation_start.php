<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/participation.css" rel="stylesheet">
</head>
<body class="sub participation"> <!-- 폴더별 클래스 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aisde.php'); ?>
    <!-- Content Start -->
    <!-- 페이지 헤더 -->
    <div class="page-header">
        <h2 class="page-title">DONATION</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">
                    <i class="icon-home"><span class="sr-only">메인으로</span></i>
                </a>
            </li>
            <li>참여하기</li>
            <li>기부시작</li>
        </ol>
    </div>
    <main id="content">
        <div class="container-fluid">
            <div class="page-wrap">
                <div class="row">
                    <div class="col-xs-12 col-lg-3">
                        <nav class="lnb-nav">
                            <h3 class="lnb-title visible-lg">
                                참여하기
                                <small>DONATION</small>
                            </h3>
                            <ul>
                                <li><a href="/participation/donation_way.php">기부방법</a></li>
                                <li class="active"><a href="/participation/donation_start.php">기부시작</a></li>
                                <li><a href="/participation/agreement.php">온라인약정</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="donation-start"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부시작</h4>
                                </div>
                                <div class="section-content">
                                    <article>
                                        <div class="article-header">
                                            <h5>
                                                고등과학원 기부를 간단하게<br class="visible-xs">
                                                <b>참여하는 방법</b>을 소개해드립니다    
                                            </h5>
                                        </div>
                                        <div class="article-content">
                                            <ol class="row">
                                                <li class="col-xs-12 col-sm-4">
                                                    <figure>
                                                        <img src="/assets/images/participation/img_step01.jpg" class="img-responsive" alt="">
                                                        <figcaption>
                                                            <h6>
                                                                <span>1</span>
                                                                간편약정
                                                            </h6>
                                                            <p>간단한 정보 등록 후 담당자의 연락으로 추후 약정 및 기부금 납입</p>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="col-xs-12 col-sm-4">
                                                    <figure>
                                                        <img src="/assets/images/participation/img_step02.jpg" class="img-responsive" alt="">
                                                        <figcaption>
                                                            <h6>
                                                                <span>2</span>
                                                                온라인약정
                                                            </h6>
                                                            <p>홈페이지에서 약정서 등록 후 기부금 납입</p>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li class="col-xs-12 col-sm-4">
                                                    <figure>
                                                        <img src="/assets/images/participation/img_step03.jpg" class="img-responsive" alt="">
                                                        <figcaption>
                                                            <h6>
                                                                <span>3</span>
                                                                약정서 다운로드 
                                                            </h6>
                                                            <p>우편, e-mail, 팩스 또는 방문 제출 후 기부금 납입</p>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ol>   
                                        </div>
                                    </article>                           
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