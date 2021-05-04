<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <!-- 반응형(기기 해상도별) -->
  <meta name="viewport" content="width=divice-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=yes">

  <title>HUSTAR_3rd</title>

  <script src="../js/jquery-1.12.4.min.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/swiper/swiper.min.js"></script>

  <link rel="stylesheet" href="../js/swiper/swiper.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- 모바일 -->
  <link rel="stylesheet" media="screen and (max-width: 480px)" href="../css/480.css"> <!-- 해상도 480 이하는 480.css 적용-->
  <!-- 태블릿 세로 -->
  <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 720px)" href="../css/720.css"> <!-- 해상도 481 이상 720 이하는 720.css 적용-->
  <!-- 태블릿 가로 -->
  <link rel="stylesheet" media="screen and (min-width: 721px) and (max-width: 1024px)" href="../css/1024.css">
  <!-- PC -->
  <link rel="stylesheet" media="screen and (min-width: 1025px)" href="../css/pc.css"> <!-- 해상도 1025 이상은 pc.css 적용-->
 </head>

<body>
 <!-- 상단 헤더 -->
 	<div class="header">
		<div>
			<div class="logo">
				<h1><a href="../index.html"><img src="../img/logo_w.png" /></a></h1>
			</div>
			<div class="top-btn">
				<ul>
					<li><a href="../member/login.html">로그인</a></li>
					<li><a href="../member/join.html">회원가입</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- 메뉴 -->
	<div class="menu">
		<div>
			<ul>
				<li>
					<a href="#none">회사소개</a>
					<ul class="submenu">
						<li><a href="../about/intro.html">회사소개</a></li>
						<li><a href="../about/location.html">오시는길</a></li>
					</ul>
				</li>
				<li>
					<a href="#none">게시판</a>
					<ul class="submenu">
						<li><a href="../bbs/notice_list.html">공지사항</a></li>
						<li><a href="../bbs/free_list.html">자유게시판</a></li>
						<li><a href="../bbs/gallery_list.html">갤러리</a></li>
					</ul>
				</li>
				<li><a href="../booking/list.html">장소예약</a></li>
				<li><a href="../member/mypage.html">마이페이지</a></li>
			</ul>
		</div>
	</div>
	
	<?php if($page_name != "login" && $page_name != "join") { ?>
	<!-- 모바일 메뉴 -->
	<div class="m-menu">
		<div>
			<a href="#none">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</div>
	
	<script>
		$('.m-menu a').click(function() {
			$(this).toggleClass('active'); /* m-menu의 a 를 클릭했을때 a에게 클래스를 넣어줌 */
			$('html').toggleClass('active'); /* m-menu의 a 를 클릭했을때 html에게 클래스를 넣어줌 */
		})	
	</script>
	<?php } else { ?>
	
	<?php } ?>