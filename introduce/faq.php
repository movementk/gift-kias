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
            <li>FAQ</li>
        </ol>
    </div>
    <main id="content">
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
                                <li><a href="/introduce/greeting.php">인사말</a></li>
                                <li><a href="/introduce/usage.php">기금용도</a></li>
                                <li class="active"><a href="/introduce/faq.php">FAQ</a></li>
                                <li><a href="/introduce/directions.php">찾아오시는길</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-lg-9">
                        <div class="sub-content"><!-- sub content -->
                            <section class="faq"><!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">FAQ</h4>
                                </div>
                                <div class="section-content">
                                    <p>
                                        자주 물어보는 질문을 한 눈에 확인하실 수 있습니다.<br>
                                        다른 문의사항이 있을 경우 <a href="tel:029583780">02-958-3780</a>으로<br class="visible-xs">
                                        연락주시면 자세히 안내해 드리겠습니다.   
                                    </p>
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
                                                    기부금의 용도를 지정할수 있습니까?
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
                                                    기부를 하려면 어떻게 해야합니까?
                                                </a>
                                            </div>
                                            <div id="faq-list-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqThree">
                                                <div class="panel-body">
                                                    기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="faqFour">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-4" aria-expanded="false" aria-controls="faq-list-4">
                                                    금액이 적어도 기부를 할 수 있습니까?
                                                </a>
                                            </div>
                                            <div id="faq-list-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqFour">
                                                <div class="panel-body">
                                                    기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="faqFive">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-5" aria-expanded="false" aria-controls="faq-list-5">
                                                    기부금의 용도를 지정할 수 있습니까?
                                                </a>
                                            </div>
                                            <div id="faq-list-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqFive">
                                                <div class="panel-body">
                                                    기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="faqSix">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-6" aria-expanded="false" aria-controls="faq-list-6">
                                                    기부를 하려면 어떻게 해야합니까?
                                                </a>
                                            </div>
                                            <div id="faq-list-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSix">
                                                <div class="panel-body">
                                                    기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="faqSeven">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-7" aria-expanded="false" aria-controls="faq-list-7">
                                                    금액이 적어도 기부를 할 수 있습니까?
                                                </a>
                                            </div>
                                            <div id="faq-list-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSeven">
                                                <div class="panel-body">
                                                    기부금이 필요합니까에 관한 답변이 노출 되는 영역입니다. 기부금이 필요합니까에 관한 답변이 노출되는 영역입니다. 
                                                </div>
                                            </div>
                                        </div>
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