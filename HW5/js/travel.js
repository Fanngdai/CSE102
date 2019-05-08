var random_images_array = [
  '../images/travel1.jpg',
  '../images/travel2.jpg',
  '../images/travel3.jpg',
  '../images/travel4.jpg',
  '../images/travel5.jpg',
  '../images/travel6.jpg',
  '../images/travel7.jpg',
  '../images/travel8.jpg',
  '../images/travel9.jpg',
  '../images/travel10.jpg',
  '../images/travel11.jpg',
  '../images/travel12.jpg',
  '../images/travel13.jpg',
  '../images/travel14.jpg',
  '../images/travel15.jpg',
  '../images/travel16.jpg',
  '../images/travel17.jpg',
  '../images/travel18.jpg',
  '../images/travel19.jpg',
  '../images/travel20.jpg'
];
			
function getRandomImage(imgAr, path) {
    path = path || 'images/';
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img id="headerImg" src="' + path + img + '" alt = "">';
    document.write(imgStr); document.close();
}
