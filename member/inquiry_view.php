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
                                <li class="active"><a href="/member/inquiry_list.php">기부금 내역조회</a></li>
                                <li><a href="#">기부자 정보수정</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content">
                            <section class="inquiry-view"> <!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부금 내역조회</h4>
                                </div>
                                <div class="section-content">
                                    <article class="board-view">
                                        <div class="view-header">
                                            <h5 class="board-title">Q&amp;A 제목이 노출되는 영역입니다 Q&amp;A 제목이 노출되는 영역입니다.</h5>
                                            <div class="borad-info">
                                                <ul>
                                                    <li>작성자</li>
                                                    <li>
                                                        <dl>
                                                            <dt>DATE</dt>
                                                            <dd>2018-01-01</dd>
                                                        </dl>
                                                    </li>
                                                    <li>
                                                        <dl>
                                                            <dt>HIT</dt>
                                                            <dd>123</dd>
                                                        </dl>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="view-body">
                                            질문 내용이 노출되는 영역입니다. 질문 내용이 노출되는 영역입니다. 질문 내용이 노출되는 영역입니다. 
                                        </div>
                                        <dl class="attach">
                                            <dt>첨부파일</dt>
                                            <dd>
                                                <a href="#">첨부파일1.jpg</a>
                                                <a href="#">첨부파일1.jpg</a>
                                            </dd>
                                        </dl>
                                        <div class="reply">
                                            <h6>관리자답변</h6>
                                            <p>
                                                관리자답변이 노출되는 영역입니다.
                                                관리자답변이 노출되는 영역입니다.
                                            </p>
                                        </div>
                                        <div class="btn-responsive">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white" role="button">수정하기</a>
                                                <a href="#" class="btn btn-sm btn-white" role="button">삭제하기</a>
                                            </p>
                                            <p>
                                                <a href="/member/inquiry_list.php" class="btn btn-lg btn-blue" role="button">목록으로</a>
                                            </p>
                                        </div>
                                        <ul class="page-link">
                                            <li class="prev-link">
                                                <dl>
                                                    <dt>이전글</dt>
                                                    <dd>
                                                        <a href="#">이전글 제목이 노출되는 영역입니다.</a>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li class="next-link">
                                                <dl>
                                                    <dt>다음글</dt>
                                                    <dd>
                                                        <a href="#">다음글 제목이 노출되는 영역입니다.</a>
                                                    </dd>
                                                </dl>
                                            </li>
                                        </ul>
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