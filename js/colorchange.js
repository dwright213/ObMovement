$(document).ready(function(){

    var milli = (new Date).getTime();
    var millis = Math.round((milli / 1000) % 360);
    var hsla = 'hsla(' + millis + ',100%,50%,1)';
    var hsla2 = '7px 7px 0px hsla(' + millis + ',100%,50%,.60)';
    var hsla3 = '10px 10px 0px hsla(' + millis + ',100%,50%,.60)';
    $('.main-navigation').css('background-color', hsla);
    $('.site-title').css('color', hsla);

//shadows
    $('.contentcontainer').css('box-shadow', hsla2);
    $('.contentcontainerfull').css('box-shadow', hsla3);

 //link hover
//$(function() {
//$('a').hover(function() {
//    $(this).css('color', hsla);
//  },
//  function() {
 //   $(this).css('color','white');
//  });
//  });

});



