(function() {
  $(function() {
    return $(".nav .dropdown").click(function() {
      return $(this).addClass("active").siblings().removeClass("active");
    });
  });

}).call(this);
