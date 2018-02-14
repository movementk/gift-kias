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
            <li>기부하기</li>
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
                                기부하기
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
                            <section class="simple-contract"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부시작</h4>
                                </div>
                                <div class="section-content">
                                    <p>이름, 연락처, e-mail, 기부 금액을 입력하시면 담당자에게 메일이 전송됩니다.</p>
                                    <form action="#">
                                        <div class="table-wrap">
                                            <table class="table type-2">
                                                <tbody>
                                                    <tr>
                                                        <th class="essential">
                                                            <label class="u-name">이름</label>
                                                        </th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-name" class="form-control" placeholder="이름입력">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="essential">
                                                            <label class="u-phone">연락처</label>
                                                        </th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="u-phone" class="form-control" placeholder="연락처">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="essential">
                                                            <label class="u-phone">이메일</label>
                                                        </th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="email" id="u-mail" class="form-control" placeholder="e-mail">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="essential">
                                                            <label class="gift-pay">기부금액</label>
                                                        </th>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" id="gift-pay" class="form-control" placeholder="숫자만 입력하세요">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="btn-area">
                                            <p>
                                                <button type="submit" class="btn btn-sm btn-blue">메일 전송</button>
                                            </p>
                                        </div>                               
                                    </form>
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