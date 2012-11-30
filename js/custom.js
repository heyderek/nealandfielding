$(document).ready(function(){
  //Animate Logo
  $('.logo').css('top','-20em').animate({ top: '-5em'}, 750, function(){});
  //FadeIn Content
  $('.featured-content .wrapper').hide().fadeIn(2000);
});