$ ->
  $(".show_merchant").click ->
    id=$(this).parent().attr("data-id")
    $(".inputId").val id

    $.post "/Admin/Merchant/show",
      id:id,
      (data) ->
        console.log(data)
        MerchantInfo=data.info
        $("#inputName").val MerchantInfo.name
        $("#inputTel").val MerchantInfo.tel
        $("#inputWorktime").val MerchantInfo.worktime
        $("#inputAddress").val MerchantInfo.address
        $("#inputInfo").val MerchantInfo.info

  $(document).on "click",".food_del",->
    $(this).parent().parent().remove();

  $(".food_del1").click ->
    $("#foodname1").val('')
    $("#foodnum1").val('')
    $("#foodprice1").val('')

#  $(".add_food").click ->
#    i=$('.food').size()
#    n = i+1
#    html = "<div class='form-group food' style=''>
#        <label class='col-sm-2 control-label'>食品(#{n}):</label>
#        <div class='col-sm-3'>
#        <select class='form-control' id='select' name='food_select[]')>
#        <volist name='allfoods' id='onefood'>
#        <option value='{{$onefood.id}}'>{{$onefood.name}}</option>
#        </volist>
#        </select>
#        </div>
#        <label class='col-sm-1 control-label'>数量:</label>
#        <div class='col-sm-2'>
#        <input type='number' min='1' max='100' id='foodnum#{n}' class='form-control' name='foodnum[]'  value=''>
#        </div>
#        <label class='col-sm-1 control-label'>单价:</label>
#        <div class='col-sm-2'>
#        <input type='text' id='foodprice#{n}' class='form-control' name='foodprice[]' value=''>
#        </div>
#        <div class='col-sm-1'>
#        <input type='button'  value='删 除' class='food_del btn btn-danger' />
#        </div>
#        </div>"
#    $(".food:last").after(html)
#    $(this).blur()
#    false

