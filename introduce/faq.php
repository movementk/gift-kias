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
                                    <article>
                                        <div class="article-header">
                                            <p>
                                                자주 물어보는 질문을 한 눈에 확인하실 수 있습니다.<br>
                                                다른 문의사항이 있을 경우 <a href="tel:029583780">02-958-3780</a>으로<br class="visible-xs">
                                                연락주시면 자세히 안내해 드리겠습니다.   
                                            </p>
                                        </div>
                                        <div class="article-content">
                                            <div class="panel-group faq-list" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faqTwo">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-2" aria-expanded="false" aria-controls="faq-list-2">
                                                            기부금의 용도를 지정할수 있습니까?
                                                        </a>
                                                    </div>
                                                    <div id="faq-list-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqTwo">
                                                        <div class="panel-body">
                                                            일반발전기금 및 지정발전기금 중에서 지정하실 수 있습니다.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faqThree">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-3" aria-expanded="false" aria-controls="faq-list-3">
                                                            기부를 하려면 어떻게 해야 합니까?
                                                        </a>
                                                    </div>
                                                    <div id="faq-list-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqThree">
                                                        <div class="panel-body">
                                                            전화나 이메일, 게시판에 문의를 주시거나 온라인으로 직접 약정 후 기부가 가능합니다.
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
                                                            10,000원 이상의 금액부터 기부가 가능합니다.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faqFive">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-5" aria-expanded="false" aria-controls="faq-list-5">
                                                            기부금 납부시 약정서를 작성해야만 합니까?
                                                        </a>
                                                    </div>
                                                    <div id="faq-list-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqFive">
                                                        <div class="panel-body">
                                                            약정서 작성 후 기부금 납입을 하셔야 기부금영수증을 받으실 수 있습니다.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faqSix">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-6" aria-expanded="false" aria-controls="faq-list-6">
                                                            기부자에 대한 혜택이 있습니까?
                                                        </a>
                                                    </div>
                                                    <div id="faq-list-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSix">
                                                        <div class="panel-body">
                                                            누적 기부금액에 따라 다양한 혜택이 있습니다. 홈페이지 상단의 [기부자-기부자예우]에서 확인하실 수 있습니다.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faqSeven">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-7" aria-expanded="false" aria-controls="faq-list-7">
                                                            기부금 영수증은 받을 수 있습니까?
                                                        </a>
                                                    </div>
                                                    <div id="faq-list-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSeven">
                                                        <div class="panel-body">
                                                            무기명 기부를 제외하고는 담당자의 기부금 납입 확인 후 홈페이지 상단의 [마이페이지-기부내역조회-영수증 출력]에서 출력하실 수 있으며, 홈페이지 출력이 어려우신 경우에는 전화 문의 주시면 우편, e-mail, 팩스 등 원하시는 방법으로 보내드립니다.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="faqSeven">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq-list-8" aria-expanded="false" aria-controls="faq-list-8">
                                                            개인정보 변경 시 어떻게 해야 합니까?
                                                        </a>
                                                    </div>
                                                    <div id="faq-list-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqSeven">
                                                        <div class="panel-body">
                                                            홈페이지 상단의 [마이페이지-개인정보변경] 에서 변경 가능하시며, 주소 및 연락처와 같은 정보의 변경이 있으실 경우 수정을 해주셔야만 기부자예우의 혜택을 받으실 수 있습니다.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
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