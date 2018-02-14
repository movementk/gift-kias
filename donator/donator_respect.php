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
            <li>기부자 예우</li>
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
                                <li class="active"><a href="/donator/donator_respect.php">기부자 예우</a></li>
                                <li><a href="/donator/tax_favor.php">세제 혜택</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="donator-respect"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부자 예우</h4>
                                </div>
                                <div class="section-content">
                                    <article>
                                        <div class="article-header">
                                            <p>
                                                당신의 큰 사랑에 고등과학원이 모든 정성으로 보답하겠습니다.<br class="hidden-xs">
                                                고등과학원이 세계최고수준의 기관으로 발전하는데 동참해 주신 분들의 뜻을 기리고자 합니다.    
                                            </p>
                                            <p>
                                                고등과학원은 기초과학 발전에 뜻을 함께 하신
                                                 분들을 KIAS Friends로 모시고,<br>
                                                그 소중한 마음을 세계수준의 연구성과 창출과
                                                 다음과 같은 정성으로 보답하고자 합니다.  
                                            </p>
                                        </div>
                                        <div class="article-content">
                                            <h5 class="sub-title">기부자 예우</h5>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>구분</th>
                                                            <th>예우내용</th>
                                                            <th>1억원 이상</th>
                                                            <th>5천만원 이상</th>
                                                            <th>1천만원 이상</th>
                                                            <th>5백만원 이상</th>
                                                            <th>1백만원 이상</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">기본예우</td>
                                                            <td colspan="5">기부금 영수증, 감사장, 정기간행물, 연하장</td>
                                                        </tr>
                                                        <tr class="bold-bg">
                                                           <td rowspan="2">네이밍</td>
                                                            <td>홈페이지 기부자 성명 게재</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                        </tr>
                                                        <tr class="bold-bg">
                                                            <td>시설물/기부명칭 부여</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2">간행물 및<br>기념품</td>
                                                            <td>간행물 발송</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                        </tr>
                                                        <tr>
                                                            <td>명절 기념품</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bold-bg">
                                                            <td rowspan="3">주요행사</td>
                                                            <td>약정식 행사</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bold-bg">
                                                            <td>원내 주요행사 초청</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="bold-bg">
                                                            <td>연1회 원장초청 오찬 초대</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td>●</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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