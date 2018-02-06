<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body class="sub "> <!-- 폴더별 클래스 -->
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
            <li>기금용도</li>
        </ol>
    </div>
    <main id="content" class=""><!-- 페이지명 클래스 -->
        <div class="container-fluid">
            <div class="page-warp">
                <div class="row">
                    <div class="col-xs-12 col-lg-3">
                        <nav class="lnb-nav">
                            <h3 class="lnb-title visible-lg">
                                기금소개
                                <small>Aobut KIAS</small>
                            </h3>
                            <ul>
                                <li><a href="#">인사말</a></li>
                                <li class="active"><a href="#">기금용도</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">찾아오시는길</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section>
                                <div class="section-header">
                                    <h4 class="section-title">기금용도</h4>
                                </div>
                            </section>
                            
                            <br><br>
                            
                            <!-- 서브 타이틀 -->
                            <h5 class="sub-title">기부형태</h5>
                            
                            <br><br>
                                                        
                            <!-- 검색영역 -->
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
                            
                            <br><br>
                            
                            <!-- faq-list -->
                            <div class="panel-group faq-list" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="faqOne">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-1" aria-expanded="true" aria-controls="faq-list-1">
                                            기부금이 필요합니까?
                                        </a>
                                    </div>
                                    <div id="faq-list-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faqOne">
                                        <div class="panel-body">
                                            기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="faqTwo">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-2" aria-expanded="false" aria-controls="faq-list-2">
                                            기부금의 용도를 지정할 수 있습니까?
                                        </a>
                                    </div>
                                    <div id="faq-list-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqTwo">
                                        <div class="panel-body">
                                            기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="faqThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-3" aria-expanded="false" aria-controls="faq-list-3">
                                            금액이 적어도 기부를 할 수 있습니까?
                                        </a>
                                    </div>
                                    <div id="faq-list-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqThree">
                                        <div class="panel-body">
                                            기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <br><br>
                            
                            <!-- table-type -->
                            <div class="table-warp default-borad">
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
                                            <td class="num">1</td>
                                            <td class="subject">
                                                <a href="#">공지사항 제목 노출 영역입니다.공지사항 제목 노출 영역입니다.공지사항 제목 노출 영역입니다.공지사항 제목 노출 영역입니다.</a>
                                            </td>
                                            <td class="date">2</td>
                                            <td class="hit">3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <br><br>
                            
                            <!-- responsive table 반응형 스크롤 -->
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
                                            <td rowspan="3">네이밍</td>
                                            <td>과학의 지평 성명 게제(간행물)</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                        </tr>
                                        <tr class="bold-bg">
                                            <td>과학의 지평 성명 게제(간행물)</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                        </tr>
                                        <tr class="bold-bg">
                                            <td>과학의 지평 성명 게제(간행물)</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
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
                                            <td>간행물 발송</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                            <td>●</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <br><br>
                            
                            <!-- 버튼 리스트 -->
                            <div class="btn-responsive">
                                <p>
                                    <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                    <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                </p>
                                <p>
                                    <a href="#" class="btn btn-lg btn-blue" role="button">다음단계</a>
                                </p>
                            </div>
                            <br><br>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-white" role="button">취소하기</a>
                                    <a href="#" class="btn btn-sm btn-blue" role="button">다음단계</a>
                                </p>
                            </div>
                            
                            <br><br>
                            
                            <!-- 게시판 뷰 -->
                            <div class="board-view">
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
                            </div>
                            
                            <br><br>
                            
                            <!-- 답변 -->
                            <div class="reply">
                                <h6>관리자답변</h6>
                                <p>
                                    관리자답변이 노출되는 영역입니다.
                                    관리자답변이 노출되는 영역입니다.
                                </p>
                            </div>
                            
                            <br><br>
                            
                            <!-- page-link -->
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