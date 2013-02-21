window.onload = function(){

	var slide = document.getElementsByClassName('slide').item(0);
	var slidebar = slide.getElementsByClassName('slidebar').item(0);
	var train = slidebar.getElementsByClassName('train').item(0);
	var img = train.getElementsByTagName('img');
	
	var pre = slide.getElementsByClassName('previous').item(0); 
	var next = slide.getElementsByClassName('next').item(0); 
	var currentslide = 0;
	
	slider = function(n){
		if(n>(img.length-1)) n=0;
		if(n<0) n = (img.length-1);
		train.style.left = (-150*n)+'px';
		currentslide = n;
	};
	
	nextslide = function(){
		slider(currentslide+1);
	}
	
	preslide = function(){
		slider(currentslide-1);
	}
	
	/*var intervalName = false;     b nazaram in ghesmat bikhode.
	(startSliding = function(){
		if(intervalName) return; 
		intervalName = setInterval(nextslide,3000);
	})();*/
	
	stopSliding = function(){
		if(!intervalName) return;
		clearInterval(intervalName);
		intervalName = false;
	}
	
	next.onclick = nextslide;
	pre.onclick = preslide;	
	
}