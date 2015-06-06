<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>点餐后台管理系统</title>

    <!-- Bootstrap -->
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/admin/common.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/Public/vendor/select2/select2.min.css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="/Public/js/html5shiv.min.js"></script>
      <script src="/Public/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Cynthia点餐</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown active">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">商户管理 <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="<?php echo U('Merchant/index');?>">商户列表</a></li>
	            <li><a href="#">订单管理</a></li>
	            <li class="divider"></li>
	            <li><a href="#">商户评价</a></li>
	            <li class="divider"></li>
	            <li><a href="#">新商户审核</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">用户管理 <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
          	  </ul>
        	</li>
        	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">系统设置 <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
          	  </ul>
        	</li>
        	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">服务中心 <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
          	  </ul>
        	</li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    
    <div class="row">
        <div class="col-md-2">
            <div class="well">
                <form>
                    <div class="form-group">
                        <label for="InputName">商户名称</label>
                        <input type="text" class="form-control" id="InputName" value="<?php echo ($merchant["name"]); ?>" placeholder="请填写商户名称" readonly>
                    </div>
                    <div class="form-group">
                        <label for="InputTel">商户电话</label>
                        <input type="text" class="form-control" id="InputTel" value="<?php echo ($merchant["tel"]); ?>" placeholder="请填写商户电话" readonly>
                    </div>
                    <div class="form-group">
                        <label for="InputWorktime">营业时间</label>
                        <input type="text" class="form-control" id="InputWorktime" value="<?php echo ($merchant["worktime"]); ?>" placeholder="请填写营业时间" readonly>
                    </div>
                    <div class="form-group">
                        <label for="InputAddress">商户地址</label>
                        <textarea rows="4" class="form-control" id="InputAddress" placeholder="请填写商户地址" readonly><?php echo ($merchant["address"]); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="InputInfo">商户信息</label>
                        <textarea rows="6" class="form-control" id="InputInfo" placeholder="请填写商户信息" readonly><?php echo ($merchant["info"]); ?></textarea>
                    </div>
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
                </form>
            </div>
        </div>
        <div class="col-md-10">
            <!--表格-->
            <div class="panel panel-default" id="mypanel">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <table>
                        <tr>
                            <td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;</td>
                            <td>编辑订单信息</td>
                        </tr>
                    </table>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="article_form" action="" method="post">
                        <div class="form-group">
                            <label for="inputOrderid" class="col-sm-2 control-label">订单号:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputOrderid" name="id" value="<?php echo ($Order["id"]); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBuyer" class="col-sm-2 control-label">买家:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputBuyer" name="buyername" value="<?php echo ($Order["buyer"]["name"]); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBuyertel" class="col-sm-2 control-label">买家电话:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputBuyertel" name="buyertel" value="<?php echo ($Order["buyer"]["tel"]); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBuyeraddress" class="col-sm-2 control-label">送餐地址:</label>
                            <div class="col-sm-10">
                                <textarea rows="3" class="form-control" id="inputBuyeraddress" name="buyeraddress"><?php echo ($Order["buyer"]["address"]); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">新增食品:</label>
                            <div class="col-sm-10">
                                <button  class="btn btn-primary add_food">增 加</button>
                            </div>
                        </div>
                        <?php if(($foodcount == 0)): ?><div class="form-group food" style="">
                                <label class="col-sm-2 control-label">食品(1):</label>
                                <div class="col-sm-3">
                                    <select class="form-control food_select" data-food="1" id="select1" name="food_select[]">
                                        <?php if(is_array($allfoods)): $i = 0; $__LIST__ = $allfoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$onefood): $mod = ($i % 2 );++$i;?><option value="<?php echo ($onefood["id"]); ?>"><?php echo ($onefood["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <label class="col-sm-1 control-label">数量:</label>
                                <div class="col-sm-1">
                                    <input type="number" min="1" max="100" id="foodnum1"class="form-control" name="foodnum[]"  value="1">
                                </div>
                                <label class="col-sm-1 control-label">单价:</label>
                                <div class="col-sm-1">
                                    <input type="text" id="foodprice1"class="form-control" name="foodprice[]" value="<?php echo ($allfoods[0]["price"]); ?>" readonly>
                                </div>
                                <label class="col-sm-1 control-label">小计:</label>
                                <div class="col-sm-1">
                                    <input type="text" id="foodsum1"class="form-control" name="foodsum[]" value="<?php echo ($allfoods[0]["price"]); ?>" readonly>
                                </div>
                                <div class="col-sm-1">
                                    <input type="button"  value="删 除" class="food_del1 btn btn-danger" />
                                </div>
                            </div>
                            <?php else: ?>
                            <?php if(is_array($Order["foods"])): $i = 0; $__LIST__ = $Order["foods"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food): $mod = ($i % 2 );++$i;?><div class="form-group food" style="">
                                    <label class="col-sm-2 control-label">食品(<?php echo ($food["kind_num"]); ?>):</label>
                                    <div class="col-sm-3">
                                        <select class="form-control food_select" data-food="1" id="select<?php echo ($food["kind_num"]); ?>" name="food_select[]" onchange=FoodChangePrice(this.value,"foodprice<?php echo ($food["kind_num"]); ?>")>
                                            <?php if(is_array($allfoods)): $i = 0; $__LIST__ = $allfoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$onefood): $mod = ($i % 2 );++$i; if(($onefood['name'] == $food['name'])): ?><option value="<?php echo ($onefood["id"]); ?>"  selected="selected" ><?php echo ($onefood["name"]); ?></option>
                                                    <?php else: ?>
                                                    <option value="<?php echo ($onefood["id"]); ?>"><?php echo ($onefood["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 control-label">数量:</label>
                                    <div class="col-sm-1">
                                        <input type="number" min="1" max="100" id="foodnum<?php echo ($food["kind_num"]); ?>"class="form-control" name="foodnum[]"  value="<?php echo ($food["num"]); ?>">
                                    </div>
                                    <label class="col-sm-1 control-label">单价:</label>
                                    <div class="col-sm-1">
                                        <input type="text" id="foodprice<?php echo ($food["kind_num"]); ?>"class="form-control" name="foodprice[]" value="<?php echo ($food["price"]); ?>" readonly>
                                    </div>
                                    <label class="col-sm-1 control-label">小计:</label>
                                    <div class="col-sm-1">
                                        <input type="text" id="foodsum<?php echo ($food["kind_num"]); ?>"class="form-control" name="foodsum[]" value="<?php echo (number_format($food[price]*$food[num],2)); ?>" readonly>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="button"  value="删 除" class="food_del btn btn-danger" />
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <div class="form-group">
                            <label for="inputMoney" class="col-sm-2 control-label">金额</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputMoney" value="<?php echo ($Order["total"]); ?>" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputKind" class="col-sm-2 control-label">状态</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="" id="inputKind">
                                    <?php if($Order["kind"] == 0): ?><option value="0" selected="">已下单</option><?php else: ?><option value="0">已下单</option><?php endif; ?>
                                    <?php if($Order["kind"] == 1): ?><option value="1" selected="">配送中</option><?php else: ?><option value="1">配送中</option><?php endif; ?>
                                    <?php if($Order["kind"] == 2): ?><option value="2" selected="">已完成</option><?php else: ?><option value="2">已完成</option><?php endif; ?>
                                    <?php if($Order["kind"] == 3): ?><option value="3" selected="">退单</option><?php else: ?><option value="3">退单</option><?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input  class="btn btn-info ui-wizard-content ui-formwizard-button submit" type="submit" value="修改">
                            <input id="back" class="btn btn-success ui-wizard-content ui-formwizard-button btnback" type="submit" value="返回">
                            <div id="status"><span class="label label-info"></span></div>
                        </div>
                    </form>
                </div>
            </div>
            <!--表格结束-->
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Public/js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/admin/common.js"></script>
    
    <script src="/Public/vendor/select2/select2.min.js"></script>
    <script src="/Public/js/admin/merchant.js"></script>
    <script>
        //加法
        function FloatAdd(arg1,arg2){
            var r1,r2,m;
            try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}
            try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}
            m=Math.pow(10,Math.max(r1,r2))
            return (arg1*m+arg2*m)/m
        }

        //select2插件
        $('select').select2();

        $(function(){
            $(".add_food").click(function() {
                var html, i, n;
                i = $('.food').size();
                n = i + 1;
                html = "<div class='form-group food' style=''> <label class='col-sm-2 control-label'>食品(" + n + "):</label> <div class='col-sm-3'> <select class='form-control food_select' data-food='1' id='select"+n+
                "' name='food_select[]')> <?php if(is_array($allfoods)): $i = 0; $__LIST__ = $allfoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$onefood): $mod = ($i % 2 );++$i;?><option value='<?php echo ($onefood["id"]); ?>'><?php echo ($onefood["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> </select> </div> <label class='col-sm-1 control-label'>数量:</label> <div class='col-sm-1'> <input type='number' min='1' max='100' id='foodnum" + n +
                "' class='form-control' name='foodnum[]'  value='1'> </div> <label class='col-sm-1 control-label'>单价:</label> <div class='col-sm-1'> <input type='text' id='foodprice" + n +
                "' class='form-control' name='foodprice[]' value='<?php echo ($allfoods[0]["price"]); ?>' readonly> </div> <label class='col-sm-1 control-label'>小计:</label> <div class='col-sm-1'> <input type='text' id='foodsum" + n + "' class='form-control' name='foodsum[]' value='<?php echo ($allfoods[0]["price"]); ?>' readonly> </div><div class='col-sm-1'> <input type='button'  value='删 除' class='food_del btn btn-danger' /> </div> </div>";
                $(".food:last").after(html);
                $(this).blur();
                //select2插件
                $('select').select2();
                return false;
            });

            $("select[data-food='1']").change(function(){

            })

        })



    </script>

  </body>
</html>