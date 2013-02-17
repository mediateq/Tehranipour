		
<footer class="foot">	
	<div class="mom">
		<div class="slide">
			<div class="next"></div>
			<div class="previous"></div>
				<div class="slidebar">
					<div class="train" id="train">
						<?php
						$path = './images/small';
						$images = scandir($path);
						foreach($images as $img){
							$img_arr = explode('.', $img);
							$img_type = strtolower( end($img_arr) );
							if ($img_type=='jpg') {
								echo "<img src='$path/$img'>";
							}
						}
					?>
					</div>
				</div>
		</div>
	</div>	
	<div class="text">
				<p>{ EBRAHIM TEHRANIPOUR } © 2012&nbsp; |&nbsp; ALL RIGHTS RESERVED</p>
	</div>
</footer>	
</div>
</body>
</html>