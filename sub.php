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
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            기부금이 필요합니까?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            기부금의 용도를 지정할 수 있습니까?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            금액이 적어도 기부를 할 수 있습니까?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                        </div>
                                    </div>
                                </div>
                            </div>
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