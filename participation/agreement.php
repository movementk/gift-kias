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
                            <section class="agreement"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">온라인 약정</h4>
                                </div>
                                <div class="section-content">
                                    <article class="terms">
                                        <div class="article-header">
                                            <h4 class="sub-title">개인정보 처리방침</h4>
                                            <div class="content">
                                                개인정보 처리방침 노출 영역
                                            </div>
                                        </div>
                                        <div class="article-content">
                                            <form action="#">
                                                <ul>
                                                    <li>
                                                        <h5>제2조 나항의 기부금영수증 발급 목적에<br class="visible-xs"> 동의하십니까?</h5>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="radio">동의함
                                                            </label>
                                                            <label>
                                                                <input type="radio">동의하지 않음
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <h5>제2조 나항의 예우를 위한 목적에<br class="visible-xs">동의하십니까?</h5>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="radio">동의함
                                                            </label>
                                                            <label>
                                                                <input type="radio">동의하지 않음
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <h5>제4조의 우편물을 받기 위한 위탁에<br class="visible-xs"> 동의하십니까?</h5>
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="radio">동의함
                                                            </label>
                                                            <label>
                                                                <input type="radio">동의하지 않음
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="check">
                                                    <h5>개인정보의 수집 및 이용목적에<br class="visible-xs"> 동의하십니까?</h5>
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="radio">동의함
                                                        </label>
                                                        <label>
                                                            <input type="radio">동의하지 않음
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                                        <button type="submit" class="btn btn-sm btn-blue">다음단계</button>
                                                    </p>
                                                </div>              
                                            </form>
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