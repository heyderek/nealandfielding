$(document).ready(function(){
  //Animate Logo
  $('.logo').css('top','-20em').animate({ top: '-8em'}, 750, function(){});
  //FadeIn Content
  $('.featured-content .wrapper').hide().fadeIn(2000);

  //Grab the navigation, and create an options menu for mobile dropdown.
  $(function() {
    //Append the select element to the navigation
    $("<select />").appendTo("nav");
    $("<option />", {
       "selected": "selected",
       "value"   : "",
       "text"    : "Go to..."
    }).appendTo("nav select");
    //Find the links within the nav, and convert them to options
    $(".masthead nav a").each(function() {
     var navLink = $(this);
    //Grab the values and attribute them to the proper option element
    $("<option />", {
         "value" : navLink.attr("href"),
         "text" : navLink.text()
     }).appendTo("nav select");
    });
    $("nav select").change(function() {
      window.location = $(this).find("option:selected").val();
    });
  });
});