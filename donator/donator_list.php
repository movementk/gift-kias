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
            <li>기부자 명단</li>
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
                                <li class="active"><a href="/donator/donator_list.php">기부자 명단</a></li>
                                <li><a href="/donator/donator_respect.php">기부자 예우</a></li>
                                <li><a href="#">세제 혜택</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="donator-list"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부자 명단</h4>
                                </div>
                                <div class="section-content">
                                    <p>
                                        대한민국 기초과학의 미래, 당신의 힘으로 밝혀<br class="visible-xs">
                                        주십시오<br class="hidden-xs"> 고등과학원의 미래는 우리나라의<br class="visible-xs">
                                        과학기술의 미래이자 바로 당신의 미래입니다.
                                    </p>
                                    <div class="table-wrap default-borad">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="hidden-xs">번호</th>
                                                    <th>이름</th>
                                                    <th class="hidden-xs">기부일자</th>
                                                    <th>기부자 구분</th>
                                                    <th>기부자 용도</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>동문</td>
                                                    <td>일반 발전기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>재학생</td>
                                                    <td>지정 발전기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>학부모</td>
                                                    <td>특정 목적기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>교직원</td>
                                                    <td>일반 발전기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>일반인</td>
                                                    <td>지정 발전기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>동문</td>
                                                    <td>특정 목적기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>재학생</td>
                                                    <td>일반 발전기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>학부모</td>
                                                    <td>지정 발전기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>교직원</td>
                                                    <td>특정 목적기금</td>
                                                </tr>
                                                <tr>
                                                    <td class="num hidden-xs">123</td>
                                                    <td>홍길동</td>
                                                    <td class="date hidden-xs">2018-01-01</td>
                                                    <td>일반인</td>
                                                    <td>일반 발전기금</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation" class="paging">
                                            <ul class="pagination">
                                                <li class="first">
                                                    <a href="#" aria-label="Previous">
                                                        <i class="icon-angle-double-left">
                                                            <span class="sr-only">처음</span>
                                                        </i>
                                                    </a>
                                                </li>
                                                <li class="prev">
                                                    <a href="#" aria-label="Previous">
                                                        <i class="icon-angle-left">
                                                            <span class="sr-only">이전</span>
                                                        </i>
                                                    </a>
                                                </li>
                                                <li class="active"><a href="#">01</a></li>
                                                <li><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>
                                                <li class="hidden-xs"><a href="#">06</a></li>
                                                <li class="hidden-xs"><a href="#">07</a></li>
                                                <li class="hidden-xs"><a href="#">08</a></li>
                                                <li class="hidden-xs"><a href="#">09</a></li>
                                                <li class="hidden-xs"><a href="#">10</a></li>
                                                <li class="next">
                                                    <a href="#" aria-label="Next">
                                                        <i class="icon-angle-right">
                                                            <span class="sr-only">다음</span>
                                                        </i>
                                                    </a>
                                                </li>
                                                <li class="last">
                                                    <a href="#" aria-label="Next">
                                                        <i class="icon-angle-double-right">
                                                            <span class="sr-only">마지막</span>
                                                        </i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
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