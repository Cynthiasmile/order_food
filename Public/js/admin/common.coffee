$ ->
  $(".nav .dropdown").click ->
    $(this).addClass("active").siblings().removeClass("active")