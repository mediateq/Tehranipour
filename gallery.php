<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="gallery" id="loader">
			<ul>
				<li>
					<a href="./images/gallery/1.jpg" rel="prettyphoto[gallery1]" title="کوهسنجی">
						<img src="./images/gallery/1.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p>کوهسنجی</p>
				</li>
				<li>
					<a href="./images/gallery/2.jpg" rel='prettyphoto[gallery1]' title="مجمع بروما">
						<img src="./images/gallery/2.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p>مجمع بروما</p>
				</li>
				<li>
					<a href="./images/gallery/3.jpg" rel='prettyphoto[gallery1]' title="اخلمد">
						<img src="./images/gallery/3.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p>اخلمد</p>
				</li>
				<li>
					<a href="./images/gallery/4.jpg" rel='prettyphoto[gallery1]' title="ضریح الامام رضا(ع)">
						<img src="./images/gallery/4.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p>ضریح الامام رضا(ع)</p>
				</li>
				<li>
					<a href="./images/gallery/5.jpg" rel='prettyphoto[gallery1]' title="حديقة ملت">
						<img src="./images/gallery/5.jpg" alt="" >
						<div class="effe"></div>
					</a>
					<p>حديقة ملت</p>
				</li>
				<li>
					<a href="./images/gallery/6.jpg" rel='prettyphoto[gallery1]' title="طرقبه و شاندیز">
						<img src="./images/gallery/6.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p>طرقبه و شاندیز</p>
				</li>
				<li>
					<a href="./images/gallery/7.jpg" rel='prettyphoto[gallery1]' title="مسبح سرزمین آفتاب">
						<img src="./images/gallery/7.jpg" alt="">
						<div class="effe"></div>
					</a>
					<p>مسبح سرزمین آفتاب</p>
				</li>
			</ul>
			<div class="badboy"></div>
		</div>
	</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	autoplay_slideshow: true,
    });
  });
</script>
	
<?php include('./inc/footer.php') ?>