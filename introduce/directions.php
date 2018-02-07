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
            <li>찾아오시는 길</li>
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
                                <li><a href="/introduce/usage.php">기금용도</a></li>
                                <li><a href="/introduce/faq.php">FAQ</a></li>
                                <li class="active"><a href="/introduce/directions.php">찾아오시는길</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="directions"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">찾아오시는 길</h4>
                                </div>
                                <div class="section-content">
                                    <div class="maps">
                                        <img src="/assets/images/introduce/img_map.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="table-wrap">
                                        <table class="table type-2">
                                            <tbody>
                                                <tr>
                                                    <th>주소</th>
                                                    <td>
                                                        서울시 동대문구 회기로 85<br class="visible-xs">
                                                        고등과학원 제1호관 1432호
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>연락처</th>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                T. <a href="tel:029583780">02-958-3780</a>
                                                            </li>
                                                            <li>F. 02-958–3770</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>대중교통</th>
                                                    <td>
                                                        <dl>
                                                            <dt>버스 이용 시</dt>
                                                            <dd>
                                                                <span>간선</span>
                                                                <i>201</i>번,<i>273</i>번
                                                            </dd>
                                                            <dt>지하철 이용 시</dt>
                                                            <dd>
                                                                <ul class="subway">
                                                                    <li class="line-1">
                                                                        <span>1</span>
                                                                        <i>호선 청량리역</i> 2번 출구에서<br class="visible-xs"> 201번 버스이용
                                                                    </li>
                                                                    <li class="line-1">
                                                                        <span>1</span>
                                                                        <i>호선 회기역</i> 1번 출구에서 273번 버스,<br class="visible-xs"> 2번 출구에서 201번 버스이용 
                                                                    </li>
                                                                    <li class="line-6">
                                                                        <span>6</span>
                                                                        <i >호선 고려대역</i> 2번 출구에서<br class="visible-xs"> 273번 버스이용 
                                                                    </li>    
                                                                </ul>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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