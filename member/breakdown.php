<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body class="sub member"> <!-- 폴더별 클래스 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aisde.php'); ?>
    <!-- Content Start -->
    <!-- 페이지 헤더 -->
    <div class="page-header">
        <h2 class="page-title">MY PAGE</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">
                    <i class="icon-home"><span class="sr-only">메인으로</span></i>
                </a>
            </li>
            <li>마이페이지</li>
            <li>기부금내역조회</li>
        </ol>
    </div>
    <main id="content">
        <div class="container-fluid">
            <div class="page-wrap">
                <div class="row">
                    <div class="col-xs-12 col-lg-3">
                        <nav class="lnb-nav">
                            <h3 class="lnb-title visible-lg">
                                마이 페이지
                                <small>MY PAGE</small>
                            </h3>
                            <ul>
                                <li class="active"><a href="#">기부금 내역조회</a></li>
                                <li><a href="#">기부자 정보수정</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content">
                            <section class="breakdown"> <!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부금 내역조회</h4>
                                </div>
                                <div class="section-content">
                                    <article class="identification">
                                        <div class="article-header">
                                            <figure>
                                                <img src="/assets/images/member/icon_breakdown.jpg" alt="">
                                            </figure>
                                            <h5>내역 조회</h5>
                                            <p>이름과 후원코드 번호를 이용하여 기부하신 내역을 조회 할 수 있습니다.</p>
                                            <p class="attention">무기명으로 기부하신 내역은 조회 할 수 없습니다</p>
                                        </div>
                                        <div class="article-content">
                                            <form action="#">
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control" placeholder="이름">
                                                    <label for="u-name" class="sr-only">이름</label>
                                                    <input type="text" id="u-code" class="form-control" placeholder="후원코드">
                                                    <label for="u-code" class="sr-only">후원코드</label>
                                                </div>
                                                <div class="btn-area">
                                                    <p>
                                                        <button type="submit" class="btn btn-lg btn-blue">확인</button>
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