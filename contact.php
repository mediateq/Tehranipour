﻿<?php include('./inc/header.php') ?>

	<section class="Ajaxloader">
		<div class="contact" id="loader">
			<div class="leftcontact">
				<h1>Contact Me</h1>
				<form action="mail.php" method="post" target="ifrm">
					<input type="text" placeholder="Name :" class="name">
					<input type="text" placeholder="Email :" class="email">
					<textarea placeholder="Messege :" class="messege"></textarea>
					<input type="submit" value="Send Messege" class="but"/>
				</form>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="rightcontact">
				<h1>Follow Me</h1>
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