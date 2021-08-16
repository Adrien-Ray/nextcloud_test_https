$('h2').mouseover(function(){
    $('span','h2').animate({
      'width': $(this).width(),
       'left': $(this).position().left}
    ,'fast')
  })