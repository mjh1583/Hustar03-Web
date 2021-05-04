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

		<title>animals</title>
		
		<!-- 기본 스타일 css -->
		<link rel="stylesheet" href="../css/style.css">

		<!-- jQuery -->
		<script src="../js/jquery-1.12.4.min.js"></script>
		<script src="../js/jquery-ui.min.js"></script>
		
		<!-- 스와이퍼 -->
		<script src="../js/swiper.min.js"></script>
		<link rel="stylesheet" href="../js/swiper.min.css">
		
		<!-- 스크롤 애니메이션 -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<!-- fullpage -->
		<script src="../js/fullpage.min.js"></script>
		<link rel="stylesheet" href="../js/fullpage.min.css">

		<!-- 스크롤시 fixed -->
		<script src="../js/autofix.js"></script>
	
		<!-- 카운트업 -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="../js/jquery.counterup.min.js"></script>

		<script src="../js/video.js"></script>
		<!--2. 비디오를 웹브라우저에 노출하기 위한 플러그인입니다. 비디오 재생 플레이어의 일종이라 생각하시면 됩니다.-->
		<script src="../js/bigvideo.js"></script>
		<!--3. 비디오나 이미지를 풀사이즈로 넣는 플러그인입니다. -->
		<script src="../js/imagesloaded.pkgd.min.js"></script>
		<!-- 4. 비디오가 아닌 이미지로 풀사이즈일 경우 bigvideo.js에서 이 파일을 호출하게 됩니다. -->
		
		<!-- 아이콘 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- 모바일 -->
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="../css/480.css"> <!-- 해상도 480 이하는 480.css 적용 -->
		<!-- 태블릿 세로 -->
		<link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 720px)" href="../css/720.css"> <!-- 해상도 481 이상 720 이하는 720.css 적용 -->
		<!-- 태블릿 가로 -->
		<link rel="stylesheet" media="screen and (min-width: 721px) and (max-width: 1024px)" href="../css/1024.css">
		<!-- PC -->
		<link rel="stylesheet" media="screen and (min-width: 1025px)" href="../css/pc.css"> <!-- 해상도 1025 이상은 pc.css 적용 -->

		<!-- 파비콘 -->
		<link rel="icon" href="../img/whale.png">
	</head>
	<body>
		<!-- 컨텐츠 시작 -->

		<!-- 로고, 메뉴 -->
		<div class="header">
			<div class="header-box">
				<h1><a href="../index.html"><img src="../img/whale.png" alt="">animals</a></h1>

				<div class="tnb"> <!-- top navigate bar -->
					<ul>
						<li><a href="../member/login.html">로그인</a></li>
						<li><a href="../member/join.html">회원가입</a></li>
						<!-- <li><a href="#none">로그아웃</a></li>
						<li><a href="#none">정보수정</a></li> -->
					</ul>
				</div> <!-- top navigate bar -->

				<div class="gnb"> <!-- general navigate bar -->
					<ul>
						<li><a href="../index.html">홈</a></li>
						<li><a href="../about/intro.html">소개</a></li>
						<li><a href="../bbs/notice_list.html">공유하기</a></li>
						<li><a href="../booking/list.html">예약하기</a></li>
						<li><a href="../member/mypage.html">예약확인</a></li>
					</ul>	
				</div> <!-- general navigate bar -->

			</div> <!-- header-box -->
		</div> <!-- header -->

		<!-- autofix js -->
		<script>
			$(document).ready( function() {
				$(".header").autofix_anything()
			});
		</script>		