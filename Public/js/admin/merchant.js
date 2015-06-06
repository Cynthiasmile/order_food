(function() {
  $(function() {
    $(".show_merchant").click(function() {
      var id;
      id = $(this).parent().attr("data-id");
      $(".inputId").val(id);
      return $.post("/Admin/Merchant/show", {
        id: id
      }, function(data) {
        var MerchantInfo;
        console.log(data);
        MerchantInfo = data.info;
        $("#inputName").val(MerchantInfo.name);
        $("#inputTel").val(MerchantInfo.tel);
        $("#inputWorktime").val(MerchantInfo.worktime);
        $("#inputAddress").val(MerchantInfo.address);
        return $("#inputInfo").val(MerchantInfo.info);
      });
    });
    $(document).on("click", ".food_del", function() {
      return $(this).parent().parent().remove();
    });
    $(".food_del1").click(function() {
      $("#foodname1").val('');
      $("#foodnum1").val('');
      return $("#foodprice1").val('');
    });
    //return $(".add_food").click(function() {
    //  var html, i, n;
    //  i = $('.food').size();
    //  n = i + 1;
    //  html = "<div class='form-group food' style=''> <label class='col-sm-2 control-label'>食品(" + n + "):</label> <div class='col-sm-3'> <select class='form-control' id='select' name='food_select[]')> <volist name='allfoods' id='onefood'> <option value='{{$onefood.id}}'>{{$onefood.name}}</option> </volist> </select> </div> <label class='col-sm-1 control-label'>数量:</label> <div class='col-sm-2'> <input type='text' id='foodnum" + n + "' class='form-control' name='foodnum[]'  value=''> </div> <label class='col-sm-1 control-label'>单价:</label> <div class='col-sm-2'> <input type='text' id='foodprice" + n + "' class='form-control' name='foodprice[]' value=''> </div> <div class='col-sm-1'> <input type='button'  value='删 除' class='food_del btn btn-danger' /> </div> </div>";
    //  $(".food:last").after(html);
    //  $(this).blur();
    //  return false;
    //});
  });

}).call(this);
