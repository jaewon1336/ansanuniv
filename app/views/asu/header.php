<?php
 include "session.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/header.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/index.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/bookboard.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/department.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/list2.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/list.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/map.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/member.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/memberboard.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/product.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/inner.css">
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" defer></script> -->
    <!-- kakao -->
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=APIKEY&libraries=services,clusterer,drawing"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=1e17b489e6b84bb16ddbcce6a8f2ea05"></script>
    <!-- index -->
    <script src="<?=ASSETS?>js/map.js" defer></script>
    <script src="<?=ASSETS?>js/index.js" defer></script>
    <script src="<?=ASSETS?>js/upload.js" defer></script>
    <!-- font-awesome -->
    <script src="https://kit.fontawesome.com/771b4faa81.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="header">
        <div class="top-container">

            <div class="top-sub">
                <ul class="left">
                    <li><a href="#">판매팁</a></li>
                    <li><a href="#">구매팁</a></li>
                    <li><a href="<?=ROOT?>map">가까운 서점 찾기</a></li>
                    <li><a href="<?=ROOT?>board">게시판</a></li>
                </ul>
                <ul class="right">
                    <?php
                    if (!$email){
                    ?>
                    
                        <li><a href="<?=ROOT?>upload">책판매하기</a></li>
                        <li><a href="<?=ROOT?>login">로그인</a></li>
                        <li><a href="<?=ROOT?>signup">회원가입</a></li>
                    <?php
                    } else {
                        $logged = $name."님(".$email.")";
                    ?>
                    
                        <li><a href="<?=ROOT?>upload">책판매하기</a></li>
                        <li><a href="<?=ROOT?>logout">로그아웃</a></li>
                        
                        <li><a href=""><?=$logged?></a></li>
                        <div class="dropdown">
                              <button onclick="myFunction()" class="dropbtn">내정보</button>
                              <div id="myDropdown" class="dropdown-content">
                                <a href="<?=ROOT?>profile">프로필 편집</a>
                                <a href="#about">쪽지</a>
                                <a href="#contact">스크랩</a>
                              </div>
                        </div>                    
                    <?php
                    }
                    ?>




                </ul>
            </div>
        </div>

        <div class="top-main">
            <div class="top-main-layout">
                <div class="logo" onclick="location.href='<?=ROOT?>home'">
                    <img src="<?=ASSETS?>imgs/logo.png" alt="">
                </div>
                <div class="search-layout">
                    <input type="text" placeholder="검색어를 입력하세요">
                    <img src="<?=ASSETS?>imgs/search-blue.png" alt="" class="search-btn">
                </div>
                <div class="auto-slider-layout" style="position:relative">

                    <div class="mySlides fade">
                        <img src="<?=ASSETS?>imgs/logo.png" alt="">
                        
                    </div>
                    <div class="mySlides fade">
                        <img src="<?=ASSETS?>imgs/logo.png" alt="">
                        
                    </div>
                    <div class="mySlides fade">
                        <img src="<?=ASSETS?>imgs/logo.png" alt="">
                        
                    </div>

                </div>
            </div>
        </div>
     
        <div class="top-menu">
            <ul class="navbar">
                <li><a href="#">(ㄱ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=간호학과">간호학과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=건축디자인과">건축디자인과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=경영과">경영과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=경찰정보과">경찰정보과</a></li>
                    </ul>
                </li>


                <li><a href="#">(ㄷ/ㄹ/ㅁ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=디지털정보통신과">디지털정보통신과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=멀티미디어디자인과">멀티미디어디자인과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=물리치료학과">물리치료학과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=레저스포츠케어과">레저스포츠케어과</a></li>
                    </ul>
                </li>

                <li><a href="#">(ㅂ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=방사선학과">방사선학과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=보건의료정보학과">보건의료정보학과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=보육과">보육과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=뷰티아트과">뷰티아트과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=비서사무행정과">비서사무행정과</a></li>
                    </ul>
                </li>

                <li><a href="#">(ㅅ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=사회복지과">사회복지과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=세무회계과">세무회계과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=시각미디어디자인과">시각미디어디자인과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=식품영양학과">식품영양학과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=스마트콘텐츠과">스마트콘텐츠과</a></li>
                    </ul>
                </li>

                <li><a href="#">(ㅇ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=IT융합비즈니스과">IT융합비즈니스과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=인공지능소프트웨어과">인공지능소프트웨어과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=유아교육과">유아교육과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=의료미용과">의료미용과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=의료정보과">의료정보과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=임상병리과">임상병리과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=에이블자립학과">에이블자립학과</a></li>
                    </ul>
                </li>

                <li><a href="#">(ㅋ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=컴퓨터정보과">컴퓨터정보과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=컴퓨터공학과">컴퓨터공학과</a></li>
                    </ul>
                </li>

                <li><a href="#">(ㅎ)학과</a>
                    <ul class="drop-down-menu">
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=항공관광영어과">항공관광영어과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=항공비서사무과">항공비서사무과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=호텔관광과">호텔관광과</a></li>
                        <li><a href="<?=ROOT?>department?cate1=ㄱ&cate2=호텔조리과">호텔조리과</a></li>
                    </ul>
                </li>

                <li><a href="#">기타도서</a>
                    <ul class="drop-down-menu">

                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!--header-->
