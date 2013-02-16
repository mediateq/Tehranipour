<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="contact" id="loader">
			<div class="leftcontact">
				<h1>Contact Me</h1>
				<form action="mail.php" method="post" target="ifrm">
					<input type="text" placeholder="Name :" class="name">
					<input type="text" placeholder="Email :" class="email">
					<textarea placeholder="Messege :" class="messege"></textarea>
					<input type="submit" value="send messege" class="but"/>
				</form>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="rightcontact">
				<h1>Follow Me</h1>
				<p>You can Send Me measda asd,asdakasd asd asdmasdkasdm asdmasdmasd asmdamsda sdmada sdas dasmdamsdas dasdmas da sdmasd as damsda sdamsd asdamsa sdamsdamsdmasda amsdamsd asd  sdaa sdasda sdasdadasd asdasd asdasdasda,asd asdasdasddf</p>
				<ul>
					<li><img src="images/face.png" alt=""></li>
					<li><img src="images/twitter.png" alt=""></li>
					<li><img src="images/flickr.png" alt=""></li>
					<li><img src="images/youtube.png" alt=""></li>
				</ul>
			</div>
		</div>
	</section>
	
<?php include('./inc/footer.php') ?>