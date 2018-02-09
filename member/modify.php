<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/member.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
            <li>기부자 정보수정</li>
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
                            <section class="write-form modify"> <!-- 페이지명 클래스 -->
                                <div class="section-header">
                                    <h4 class="section-title">기부자 정보수정</h4>
                                </div>
                                <div class="section-content">
                                    <form action="#">
                                        <div class="write-item">
                                            <article class="personal">
                                                <div class="article-header">
                                                    <h5 class="sub-title">기부자 인적사항</h5>
                                                    <label><input type="checkbox"> 무기명처리 (무기명 처리를 클릭하시면 기부자 인적사항을 입력하지 않으셔도 됩니다. 단, 기부금영수증 발급이 불가합니다.)</label>
                                                </div>
                                                <div class="article-content">
                                                    <div class="table-wrap">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th><label for="u-name">이름(단체명)</label></th>
                                                                    <td class="u-name">
                                                                        <div class="form-group">
                                                                            <input type="text" id="u-name" class="form-control">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>고유번호</th>
                                                                    <td class="serial-number">
                                                                        <label><input type="radio"> 주민번호</label>
                                                                        <label><input type="radio"> 사업자 번호</label>
                                                                        <div class="form-group">
                                                                            <input type="text" id="u-num1" class="form-control"> -
                                                                            <input type="text" id="u-num1" class="form-control">
                                                                            <label for="u-num1" class="sr-only">주민번호 및 사업자번</label>
                                                                            <label for="u-num2" class="sr-only">주민번호 및 사업자번호</label>
                                                                        </div>
                                                                        <p class="attention">
                                                                            귀하의 개인정보는 기부금 납부내역 세무신고 시에 활용하고 다른 목적으로는 사용하지 않습니다.
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>기부자 구분</th>
                                                                    <td>
                                                                        <label><input type="radio"> 내부</label>
                                                                        <label><input type="radio"> 외부</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="addr"><label for="u-addr">우편주소</label></th>
                                                                    <td class="addr">
                                                                        <label><input type="radio"> 자택</label>
                                                                        <label><input type="radio"> 직장</label>
                                                                        <div class="form-group">
                                                                            <p class="visible-xs">우편번호</p>
                                                                            <input type="text" id="u-addr" class="form-control">
                                                                            <a href="#" class="btn btn-xs btn-gray" role="button">우편번호 찾기</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="v-top">연락처</th>
                                                                    <td class="contact">
                                                                        <div class="form-group">
                                                                            <label for="u-phone01">휴대폰</label>
                                                                            <input type="text" id="u-phone01" class="form-control"> - 
                                                                            <label for="u-phone02" class="sr-only">휴대</label>
                                                                            <input type="text" id="u-phone02" class="form-control"> - 
                                                                            <label for="u-phone03" class="sr-only">휴대</label>
                                                                            <input type="text" id="u-phone03" class="form-control">
                                                                        </div>
                                                                        <div class="choice">
                                                                            <label><input type="radio"> 자택</label>
                                                                            <label><input type="radio"> 직장</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" id="u-contact01" class="form-control"> - 
                                                                            <label for="u-contact01" class="sr-only">연락처</label>
                                                                            <input type="text" id="u-contact02" class="form-control"> - 
                                                                            <label for="u-contact02" class="sr-only">연락처</label>
                                                                            <input type="text" id="u-contact03" class="form-control">
                                                                            <label for="u-contact03" class="sr-only">연락처</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><label for="u-mail">이메일</label></th>
                                                                    <td class="email">
                                                                        <div class="form-group">
                                                                            <input type="email" id="u-mail" class="form-control">
                                                                            @ <input type="text" id="domain" class="form-control">
                                                                            <label for="domain" class="sr-only">도메인</label>
                                                                            <select class="form-control">
                                                                                <option>이메일 선택</option>
                                                                                <option>네이버</option>
                                                                                <option>다음</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p class="note">귀하의 개인정보는 기부금 납부내역 세무신고 이외 다른 목적으로는 사용하지 않습니다.</p>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="agreement-content">
                                                <div class="article-header">
                                                    <h5 class="sub-title">약정내용</h5>
                                                    <p class="attention">
                                                        유증, 부동산등 기타 현물자산 기부를 희망하실 경우 담당자가 방문 상담해 드립니다.(Tel. <a href="tel:029583714">02-958-3714</a>)
                                                    </p>
                                                </div>
                                                <div class="article-content">
                                                    <div class="table-wrap">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>기금형태</th>
                                                                    <td class="shape">
                                                                        <label><input type="radio"> 현금</label>
                                                                        <label><input type="radio"> 주식</label>
                                                                        <label><input type="radio"> 유가증권</label>
                                                                        <label><input type="radio"> 현물</label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><label for="gift-pay">기부금액</label></th>
                                                                    <td class="gift-pay">
                                                                        <div class="form-group">
                                                                            <input type="text" id="gift-pay" class="form-control">
                                                                            <p>원 (총 기부금액)</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>기금사용용도</th>
                                                                    <td class="usage">
                                                                        <ul>
                                                                            <li>
                                                                                <label>
                                                                                    <input type="radio"> 일반 발전기금
                                                                                    <span>
                                                                                        (KIAS 우선사업에 사용하도록 용도를 KIAS에 위임)
                                                                                    </span>
                                                                                </label>
                                                                            </li>
                                                                            <li>
                                                                                <label>
                                                                                    <input type="radio"> 지정발전기금
                                                                                    <span>
                                                                                        (지정사업 기금의 10%는 일반사업기금으로 사용됩니다. 단, 장학 및 건축기금은 제외)
                                                                                    </span>
                                                                                </label>
                                                                                <ul>
                                                                                    <li>
                                                                                        <label><input type="radio"> 학술연구</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label><input type="radio"> 우수연구진 처우개선</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label><input type="radio"> 연구</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label><input type="radio"> 시설</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label><input type="radio"> 도서</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label><input type="radio"> 석좌교수</label>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>
                                                                                            <input type="radio"> 기타
                                                                                            (<input type="text" class="form-control">)
                                                                                        </label>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><label for="designation">기금명칭</label></th>
                                                                    <td class="designation">
                                                                        <div class="form-group">
                                                                            <input type="text" id="designation" class="form-control">
                                                                            <p>(단, 일천만원 이상인 경우에 한 함)</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>사용방법</th>
                                                                    <td class="way">
                                                                        <p>기부금 원금을 보존하여 발생하는 이자로 지원하는 것을 원하십니까?</p>
                                                                        <label><input type="checkbox"> 예(원금보존)</label>
                                                                        <label><input type="checkbox"> 아니오(원금사용)</label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="terms-payment">
                                                <div class="article-header">
                                                    <h5 class="sub-title">납부 방법</h5>
                                                    <p class="attention"> 입금계좌 : 우리은행 / 254-040273-01-001 / 고등과학원</p>
                                                </div>
                                                <div class="article-content">
                                                    <div class="table-wrap">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>일시납부</th>
                                                                    <td class="immediately-pay">
                                                                        <ul>
                                                                            <li>
                                                                                <label><input type="radio"> 무통장 입금</label>
                                                                                <div class="form-group">
                                                                                    <label for="datepicker-1">입금일</label>
                                                                                    <input type="text" id="datepicker-1" class="form-control">
                                                                                    <a href="#datepicker-1">
                                                                                        <i class="icon-calendar">
                                                                                            <span class="sr-only">달력보기</span>
                                                                                        </i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="depositor">입금자명</label>
                                                                                    <input type="text" id="depositor" class="form-control">
                                                                                </div>
                                                                            </li>
                                                                            <li><label><input type="radio"> 온라인 계좌이체</label></li>
                                                                            <li>
                                                                                <label><input type="radio"> 방문납부</label>
                                                                                <div class="form-group">
                                                                                    <label for="datepicker-1">방문예정일</label>
                                                                                    <input type="text" id="datepicker-2" class="form-control">
                                                                                    <a href="#datepicker-2">
                                                                                        <i class="icon-calendar">
                                                                                            <span class="sr-only">달력보기</span>
                                                                                        </i>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>분할납부</th>
                                                                    <td class="installment">
                                                                        <div class="form-group">
                                                                            <div>
                                                                                <dl>
                                                                                    <dt><label for="monthly">금액</label></dt>
                                                                                    <dd>매월 <input type="text" id="monthly" class="form-control"> 원</dd>
                                                                                </dl>
                                                                            </div>
                                                                            <div>
                                                                                <dl>
                                                                                    <dt><label for="monthly">분할횟수</label></dt>
                                                                                    <dd><input type="text" id="monthly" class="form-control"></dd>
                                                                                </dl>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group pay-start">
                                                                            <label for="pay-start">납부시작일</label>
                                                                            <div>
                                                                                <input type="text" id="datepicker-3" class="form-control">
                                                                                <a href="#datepicker-3">
                                                                                    <i class="icon-calendar">
                                                                                        <span class="sr-only">달력보기</span>
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group seletor">
                                                                            <label>
                                                                                <input type="radio"> 자동이체
                                                                                <span>(기부자가 직접 인터넷뱅킹 또는 은행에 내방하여 신청)</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"> 급여공제
                                                                                <span>(교직원에 한함)</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </article>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/assets/js/common.js"></script>
    <script>
        $.datepicker.setDefaults({
            dateFormat: 'yy-mm-dd',
            prevText: '이전 달',
            nextText: '다음 달',
            monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            dayNames: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            showMonthAfterYear: true,
            yearSuffix: '년'
        });
        $( function() {
            $("#datepicker-1, #datepicker-2, #datepicker-3").datepicker();
        });
    </script>
</body>
</html>