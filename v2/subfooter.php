		<!-- 하단 정보 -->
		<div class="footer">
			<div>
				<div class="f-logo">
					<h1><a href="../main.html"><img src="../img/whale.png" alt="">animals</a></h1>
				</div>
				
				<div class="f-copy">
					<p>copyright(c) animals. All rights reserved.</p>
				</div>		
			</div>
		</div> <!-- footer -->
		<!-- 컨텐츠 끝 -->

		<!-- 스크롤 js -->
		<script>
			AOS.init();
		</script>
		
		<!-- 배너 js -->
		<script>
			var swiper = new Swiper('.swiper-container', {
					spaceBetween: 30,
					loop: true,
					slidesPerView: 3,
					centeredSlides: true,
					autoplay: {
						delay: 2500,
						disableOnInteraction: false,
					},
					pagination: {
						el: '.swiper-pagination',
						clickable: true,
					},
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
				},
			});
		</script>

		<!-- 카운트업 js -->
		<script>
			$('.counter').counterUp({
				delay: 10,
				time: 1500
			});
		</script>

	</body>
</html>