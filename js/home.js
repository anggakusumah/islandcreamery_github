var total_image;
var i;
var t;
var image;

function initialization() {
	i=1;	
	total_image =  document.getElementById("total_image").innerHTML;
	t= setTimeout("fading()",3000);
	image = 'url("'+document.getElementById("filename_1").innerHTML+'")';
}

function fading() {
	clearTimeout(t);
	
	$("#background-back").animate({"opacity":"1"},3000);
	$("#background-front").animate({"opacity":"0"},3000,function() {
		//alert(image);
		$("#background-front").css({"background-image":image});
		//document.getElementById("background-link").src = document.getElementById("link_"+i).innerHTML;
		$("#background-front").css({"opacity":"1"});
		$("#background-back").css({"opacity":"0"});
		
		
		if (i<(total_image-1)) {
			i++; 
		}
		else {
			i=0; 
		}
		image = 'url("'+document.getElementById("filename_"+i).innerHTML+'")';
		$("#background-back").css({"background-image":image});
		
		
		t= setTimeout("fading()",3000);
	}); 
}

function next(){
	clearTimeout(t);
	
		if (i<(total_image-1)) {
			i++; 
		}
		else {
			i=0; 
		}
		image = 'url("'+document.getElementById("filename_"+i).innerHTML+'")';
		$("#background-front").css({"background-image":image});
		//document.getElementById("background-link").src = document.getElementById("link_"+i).innerHTML;
		$("#background-front").css({"opacity":"1"});
		$("#background-back").css({"opacity":"0"});
		
		if (i<(total_image-1)) {
			i++; 
		}
		else {
			i=0; 
		}
		
		image = 'url("'+document.getElementById("filename_"+i).innerHTML+'")';
		$("#background-back").css({"background-image":image});
		
		t= setTimeout("fading()",3000);
}

function prev(){
	clearTimeout(t);
	
		if (i>1) {
			i=i-2; 
		}
		else if (i==1){
			i=total_image-1;
		}
		else {
			i=total_image-2; 
		}
		image = 'url("'+document.getElementById("filename_"+i).innerHTML+'")';
		$("#background-front").css({"background-image":image});
		//document.getElementById("background-link").src = document.getElementById("link_"+i).innerHTML;
		$("#background-front").css({"opacity":"1"});
		$("#background-back").css({"opacity":"0"});
		
		if (i<(total_image-1)) {
			i++; 
		}
		else {
			i=0; 
		}
		
		image = 'url("'+document.getElementById("filename_"+i).innerHTML+'")';
		$("#background-back").css({"background-image":image});
		
		t= setTimeout("fading()",3000);
}