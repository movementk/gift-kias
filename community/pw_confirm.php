<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body class="sub community"> <!-- 폴더별 클래스 -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/nav-aisde.php'); ?>
    <!-- Content Start -->
    <!-- 페이지 헤더 -->
    <div class="page-header">
        <h2 class="page-title">COMMUNITY</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">
                    <i class="icon-home"><span class="sr-only">메인으로</span></i>
                </a>
            </li>
            <li>커뮤니티</li>
            <li>Q&amp;A</li>
        </ol>
    </div>
    <main id="content">
        <div class="container-fluid">
            <div class="page-wrap">
                <div class="row">
                    <div class="col-xs-12 col-lg-3">
                        <nav class="lnb-nav">
                            <h3 class="lnb-title visible-lg">
                                커뮤니티
                                <small>COMMUNITY</small>
                            </h3>
                            <ul>
                                <li><a href="/community/notice_list.php">공지사항</a></li>
                                <li class="active"><a href="/community/qna_list.php">Q&amp;A</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content">
                            <section class="pw-confirm"> <!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">Q&amp;A</h4>
                                </div>
                                <div class="section-content">
                                    <article class="pw-form">
                                        <div class="article-header">
                                            <figure>
                                                <img src="/assets/images/community/img_lock.jpg" alt="">
                                                <figcaption>
                                                    <h5>비밀번호 확인</h5>
                                                    <p>
                                                        개인정보를 보호하기 위해 비밀번호를 한번 더 확인합니다.<br class="hidden-xs"> 타인에게 비밀번호가 노출되지 않도록 항상 주의하세요.
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="article-content">
                                            <form action="#">
                                                <div class="form-group">
                                                    <input type="password" id="u-pw" class="form-control">
                                                    <label for="u-pw" class="sr-only">비밀번호 확</label>
                                                </div>
                                                <div class="btn-area">
                                                    <p>
                                                        <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                                        <button type="submit" class="btn btn-sm btn-blue">확인</button>
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