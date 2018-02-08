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
                            <section class="qna-write write-common"> <!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">Q&amp;A</h4>
                                </div>
                                <div class="section-content">
                                    <form action="#">
                                        <div class="table-wrap">
                                            <table class="table type-2">
                                                <tbody>
                                                    <tr>
                                                        <th class="v-top"><label for="u-title">제목</label></th>
                                                        <td class="subject">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>분류</option>
                                                                </select>
                                                                <input type="text" id="u-title" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="v-top"><label for="u-content">내용</label></th>
                                                        <td>
                                                            <div class="form-group">
                                                                <textarea id="u-content" class="form-control"></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>파일첨부</th>
                                                        <td class="attach">
                                                            <div class="form-group">
                                                                <input type="file" id="u-attach" class="form-control">
                                                                <label for="u-attach">파일찾기</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                                <button type="submit" class="btn btn-sm btn-blue">다음단계</button>
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