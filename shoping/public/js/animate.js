$(document).ready(function(){
    

    var div=$("h1 .glyphicon");
    div.animate({background:'#ccc',opacity:'0.4'},"slow",function () {
  	div.animate({background:'#333',opacity:'1'},"slow");
  	div.animate({background:'#ccc',opacity:'0.4'},"slow");
  	div.animate({background:'#333',opacity:'1'},"slow");
  	});


});