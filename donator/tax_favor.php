<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/donator.css" rel="stylesheet">
</head>
<body class="sub donator"> <!-- 폴더별 클래스 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aisde.php'); ?>
    <!-- Content Start -->
    <!-- 페이지 헤더 -->
    <div class="page-header">
        <h2 class="page-title">CONTRIBUTOR</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">
                    <i class="icon-home"><span class="sr-only">메인으로</span></i>
                </a>
            </li>
            <li>기부자</li>
            <li>세제 혜택</li>
        </ol>
    </div>
    <main id="content">
        <div class="container-fluid">
            <div class="page-wrap">
                <div class="row">
                    <div class="col-xs-12 col-lg-3">
                        <nav class="lnb-nav">
                            <h3 class="lnb-title visible-lg">
                                기부자
                                <small>contributor</small>
                            </h3>
                            <ul>
                                <li><a href="/donator/donator_list.php">기부자 명단</a></li>
                                <li><a href="/donator/donator_respect.php">기부자 예우</a></li>
                                <li class="active"><a href="/donator/tax_favor.php">세제 혜택</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="tax-favor"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">세제 혜택</h4>
                                </div>
                                <div class="section-content">
                                    <article class="benefit-step">
                                        <div class="article-header">
                                            <h5 class="sub-title">세제혜택 절차</h5>
                                        </div>
                                        <div class="article-content">
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/donator/step01.png"  alt="">
                                                        <figcaption>
                                                            <strong>기부금 납부</strong>
                                                            <p>(기부자)</p>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/donator/step02.png"  alt="">
                                                        <figcaption>
                                                            <strong>기부금 영수증 발행</strong>
                                                            <p>(고등과학원)</p>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/donator/step03.png"  alt="">
                                                        <figcaption>
                                                            <strong>개인/법인</strong>
                                                            <dl>
                                                                <dt>개인</dt>
                                                                <dd>연말정산 또는 종합소득세<br class="hidden-lg">신고시 제출</dd>
                                                                <dt>법인</dt>
                                                                <dd>기부금 회계처리 후 법인세<br class="hidden-lg"> 신고시 제출</dd>
                                                            </dl> 
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    
                                    <article class="donors-list">
                                        <div class="article-header">
                                            <h5 class="sub-title">기부자별 세제혜택</h5>
                                        </div>
                                        <div class="article-content">
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt>개인 근로소득자</dt>
                                                        <dd>
                                                            소득세법에 의해 법정기부금으로 인정되어 기부금액의 15%(2,000만원 초과 기부 시 30%)를 세액공제
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>개인 사업자</dt>
                                                        <dd>
                                                            종합소득세 신고 시 사업소득금액 100% 한도 내에서 전액 소득 공제되며, 초과분은 5년내 이월공제
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>영리법인</dt>
                                                        <dd>
                                                            고유목적사업준비금 사용액으로 인정
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>비영리법인</dt>
                                                        <dd>
                                                            법인세 신고 시 사업소득금액 50%한도 내에서 전액 소득 공제되며, 초과분은  5년내 이월공제
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>상속재산</dt>
                                                        <dd>
                                                            재산을 가지고 있는 사람이 사망 전에 유증 또는 사인증여 방법에 의하여 출연한 재산과 상속인이 상속받은 재산을 출연하는 경우에는 상속세가 면제됩니다. (단, 상속개실일로부터 6개월 이내에 기부하는 경우에 한하며, 부동산의 경우 상속자에게 등기이전이 되지 않은 상태이어야 합니다.)
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
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