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
            <li>기부방법</li>
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
                                <li class="active"><a href="#">기부방법</a></li>
                                <li><a href="#">기부시작</a></li>
                                <li><a href="#">온라인약정</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="donation-way"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부방법</h4>
                                </div>
                                <div class="section-content">
                                    <ul>
                                        <li>
                                            <h5 class="sub-title">기부형태</h5>
                                            <p>
                                                현금(1만원 이상), 주식, 유가증권, 현물(부동산, 연구<br class="visible-xs">
                                                기자재, 도서) 등 다양한 형태로 기부하실 수 있습니다.
                                            </p>
                                        </li>
                                        <li>
                                            <h5 class="sub-title">기부절차</h5>
                                            <p>
                                                약정 후 납입
                                            </p>
                                        </li>
                                        <li>
                                            <h5 class="sub-title">약정방법</h5>
                                            <p>
                                                온라인 및 우편, E-mail, Fax, 직접 방문 중 가장 편한 방법으로 신청하실 수 있습니다
                                            </p>
                                            <ul class="agreement-list">
                                                <li></li>
                                            </ul>
                                        </li>
                                    </ul>                                    
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