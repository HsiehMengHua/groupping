$(document).ready(function(){
  // .dropdown slide in
  $(".dropdown").hover(function(){
    $(".menu").slideDown("fast","swing");
  });

  $(".dropdown").mouseleave(function(){
    $(".menu").slideUp("fast","swing");
  });
});
