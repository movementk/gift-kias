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
                                <li class="active"><a href="/participation/donation_way.php">기부방법</a></li>
                                <li><a href="/participation/donation_start.php">기부시작</a></li>
                                <li><a href="/participation/agreement.php">온라인약정</a></li>
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
                                                현금(1만원 이상), 주식, 유가증권, 현물(부동산, 연구
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
                                                온라인 및 우편, E-mail, Fax, 직접 방문 중 가장 편한 방법으로 신청하실 수 있습니다.
                                            </p>
                                            <ul class="agreement-list">
                                                <li>
                                                    <div>
                                                        <figure>
                                                            <img src="/assets/images/introduce/img_agreement01.png" alt="">
                                                        </figure>
                                                    </div>
                                                    <h6>온라인 약정</h6>
                                                    <p>
                                                        인터넷에서 약정하시는 것으로<br>
                                                        온라인 결제를 이용하실 경우<br>
                                                        약정에서 납부까지 바로 하실 수<br>
                                                        있습니다.
                                                    </p>
                                                </li>
                                                <li>
                                                    <div>
                                                        <figure>
                                                            <img src="/assets/images/introduce/img_agreement02.png" alt="">
                                                        </figure>
                                                    </div>
                                                    <h6>우편 · E-mail · Fax 약정</h6>
                                                    <p>
                                                        약정서를 다운로드 하신 후 <br>
                                                        작성하시어 우편· E-mail· Fax로 <br>
                                                        송부하신 후 편리한 방법으로 <br>
                                                        납입 하시면 됩니다.
                                                    </p>
                                                </li>
                                                <li>
                                                    <div>
                                                        <figure>
                                                            <img src="/assets/images/introduce/img_agreement03.png" alt="">
                                                        </figure>
                                                    </div>
                                                    <h6>직접방문</h6>
                                                    <p>
                                                        약정서를 다운로드 하신 후 <br>
                                                        작성하시어 방문 제출을 해 주시거나, <br>
                                                        먼저 방문하신 후 담당자를 <br>
                                                        통해 약정서를 받으셔서 작성 후 <br>
                                                        납입 하실 수 있습니다.
                                                    </p>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h5 class="sub-title">납입방법</h5>
                                            <ul class="method-list">
                                                <li>
                                                    <dl>
                                                        <dt>무통장입금</dt>
                                                        <dd>
                                                            우리은행 254-040273-01-001 <br class="visible-xs">
                                                            (예금주: 한국과학기술원 부설 고등과학원)
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>자동이체</dt>
                                                        <dd>
                                                            기부자가 직접 인터넷 뱅킹 또는 은행에 내방하여 신청합니다.
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>CMS 자동이체</dt>
                                                        <dd>
                                                            기부자가 직접 은행에 신청하지 않아도 자동이체 가능합니다.
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>신용카드</dt>
                                                        <dd>
                                                            기부자의 카드 결제일에 청구됩니다.
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>방문납부</dt>
                                                        <dd>
                                                            고등과학원을 직접 방문하시거나, 담당자가 직접 방문해드립니다.
                                                        </dd>
                                                    </dl>
                                                </li>                                            
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