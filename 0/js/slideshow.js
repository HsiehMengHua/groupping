$(document).ready(function(){
  
    var fadeSpeed = 1000;

    $(".slide.active").fadeIn();
    $(".dots .active").css("color","white");
  
    setInterval(function(){
      if($(".slide.active").next('li').length === 0){
        $(".slide.active").fadeOut(fadeSpeed).removeClass("active");
        $(".slide").first().fadeIn(fadeSpeed).addClass("active");
        $(".dots .active").css("color","lightgray").removeClass("active");
        $(".dot").first().css("color","white").addClass("active");
      }else{
        $(".slide.active").fadeOut(fadeSpeed).removeClass("active").next().fadeIn(fadeSpeed).addClass("active");
        $(".dots .active").css("color","lightgray").removeClass("active").next().css("color","white").addClass("active");
      }
    },5000);
    
    $(".dot").click(function(){
      $(".dot.active").css("color","lightgray").removeClass("active");
      $(this).css("color","white").addClass("active");
    });
});