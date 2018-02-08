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
            <li>온라인 약정</li>
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
                                <li><a href="/participation/donation_start.php">기부시작</a></li>
                                <li class="active"><a href="/participation/agreement.php">온라인 약정</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="success"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">온라인 약정</h4>
                                </div>
                                <div class="section-content">
                                    <div class="confirm-box">
                                        <figure>
                                            <img src="/assets/images/participation/img_success.png" class="img-responsive" alt="">
                                        </figure>
                                        <strong>후원해 주셔서 감사합니다.</strong>
                                        <p class="summary">
                                            <b>무브먼트케이</b> 님의 후원코드는<br>
                                            <i>KIAS180112-0000000000</i>입니다. <br>
                                            후원코드는 후원내역 조회 시 꼭 필요한 정보입니다.
                                        </p>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-white" role="button">메인으로</a>
                                            <button type="submit" class="btn btn-sm btn-blue">기부내역 조회</button>
                                        </p>
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