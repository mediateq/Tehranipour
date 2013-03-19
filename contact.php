<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="contact" id="loader">
			<div class="leftcontact">
				<form action="mail.php" method="post" target="ifrm">
					<input type="text" placeholder="نام :" class="name">
					<input type="text" placeholder="ایمیل :" class="email">
					<textarea placeholder="پیام :" class="messege"></textarea>
					<input type="submit" value="ارسال پیام" class="but"/>
				</form>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="rightcontact">
				<h1>ارتباط با من</h1>
				<p>شما عزیزان میتوانید با ارسال فرم رو به رو با من در ارتباط باشید<br />و نظرات و پیشنهادات خود را با بنده در میان بگذارید که البته در اسرع<br /> وقت پاسخ گو میباشم . <br /><br />
					همچنین از طریق شبکه های اجتماعی زیر میتواند با من و تنبورنوازان حنان<br /> در ارتباظ باشید و نوازها و فعالیتهای ما را دنبال کنید .
				</p>
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