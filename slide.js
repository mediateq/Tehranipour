$(document).ready(function(){
	var next = $('div.next');
	var previous = $('div.previous');
	var img = $('img.train > img');

	next.onclick(function(){
		getElementById('train').animate({left:'200px'},500)
		
	});
	/*btn.mouseout(function(){
		li.animate({marginTop:'-50px'},500)
	});
	var opa = function(){
		for(i =0;i<4;i++){
			img.eq(i).animate({opacity:'0'},500)
		};
	};
	img.eq(0).css({opacity:'1'})

	showpic = function(n){
		opa();
		img.eq(n).animate({opacity:'1'},1000);
	}
	
	for(var i=0;i<4;i++){
		(function(j){
			li.eq(j).click(function(){
				showpic(j)
			})
		})(i);
	}
});*/