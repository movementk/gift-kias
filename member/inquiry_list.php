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
                            <section class="inquiry-list"> <!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부금 내역조회</h4>
                                </div>
                                <div class="section-content">
                                    <div class="table-wrap default-borad">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>번호</th>
                                                    <th>제목</th>
                                                    <th>작성일</th>
                                                    <th>조회수</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="num"><span>123</span></td>
                                                    <td class="subject">
                                                        <a href="/member/inquiry_view.php">공지사항 제목 노출 영역입니다.</a>
                                                    </td>
                                                    <td class="date"><span>2018-01-01</span></td>
                                                    <td class="hit"><span>123</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="btn-area">
                                        <p>
                                            <a href="/member/inquiry_write.php" class="btn btn-sm btn-blue" role="button">글쓰기</a>
                                        </p>
                                    </div>
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
                                            <li><a href="#">01</a></li>
                                            <li class="active"><a href="#">02</a></li>
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
                                    <div class="search-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>선택</option>
                                                </select>
                                                <input type="text" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-search">검색</button>
                                        </form>
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