var pic = [ "images/puppy1.jpeg", "images/puppy2.jpeg", "images/puppy3.jpeg", "images/puppy4.jpeg", "images/puppy5.jpeg" ]; var slide = new Array();
var index = 0; // current slide index

function loadImage(url) {
	if (document.images) {
        rslt = new Image();
        rslt.src = url;
        return rslt;
	}
}

if ( document.images ) {
	for (var n=0; n < pic.length; n++) {
		slide[n] = loadImage(pic[n]);
	}
}

function prevSlide() {
	if(--index < 0) {
		index = pic.length-1;
	}
	changeSlide();
}

function nextSlide() {
	if( ++index >= pic.length) {
		index = 0
	}
	changeSlide();
}

function changeSlide() {
	document.getElementById('myimg').src = slide[index].src;
}

function keyGo(e) {
	if ( e.keyCode == 38 ) {
		 nextSlide();
    } else if ( e.keyCode == 40 ) {
         prevSlide();
    }
}