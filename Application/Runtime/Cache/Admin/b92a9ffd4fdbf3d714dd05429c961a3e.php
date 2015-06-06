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
                <form action="<?php echo U('Merchant/update');?>" method="post">
                    <input type="hidden" name="id" value="<?php echo ($merchant["id"]); ?>">
                    <div class="form-group">
                        <label for="InputName">商户名称</label>
                        <input type="text" class="form-control" id="InputName" value="<?php echo ($merchant["name"]); ?>" name="name" placeholder="请填写商户名称">
                    </div>
                    <div class="form-group">
                        <label for="InputTel">商户电话</label>
                        <input type="text" class="form-control" id="InputTel" value="<?php echo ($merchant["tel"]); ?>" name="tel" placeholder="请填写商户电话">
                    </div>
                    <div class="form-group">
                        <label for="InputWorktime">营业时间</label>
                        <input type="text" class="form-control" id="InputWorktime" value="<?php echo ($merchant["worktime"]); ?>" name="worktime" placeholder="请填写营业时间">
                    </div>
                    <div class="form-group">
                        <label for="InputAddress">商户地址</label>
                        <textarea rows="4" class="form-control" id="InputAddress" name="address" placeholder="请填写商户地址"><?php echo ($merchant["address"]); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="InputInfo">商户信息</label>
                        <textarea rows="6" class="form-control" id="InputInfo" name="info" placeholder="请填写商户信息"><?php echo ($merchant["info"]); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">修改</button>
                </form>
            </div>
        </div>
        <div class="col-md-10">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>订单号</th>
                    <th>买家</th>
                    <th>食品名称</th>
                    <th>金额</th>
                    <th>下单/完成时间</th>
                    <th>订单状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tr>
                        <th scope="row"><?php echo ($order["id"]); ?></th>
                        <td><?php echo ($order["buyer"]["name"]); ?></td>
                        <td class="foodNameList">
                            <?php if(is_array($order["foods"])): $i = 0; $__LIST__ = $order["foods"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food): $mod = ($i % 2 );++$i;?><li><?php echo ($food["name"]); ?> * <?php echo ($food["num"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>
                        <td>￥<sapn><?php echo ($order["total"]); ?></sapn></td>
                        <td><?php echo ($order["order_time"]); ?>/<?php echo ($order["complete_time"]); ?></td>
                        <td>
                            <?php switch($order["kind"]): case "0": ?><span class="btn-danger">已下单</span><?php break;?>
                                <?php case "1": ?><span class="btn-info">配送中</span><?php break;?>
                                <?php case "2": ?><span class="btn-success">已完成</span><?php break;?>
                                <?php default: ?><span class="btn-warning">退单</span><?php endswitch;?>
                        </td>
                        <td data-id="<?php echo ($order["id"]); ?>">
                            <a href=<?php echo U('Merchant/order_edit',"id=$order[id]");?> target="_blank"><span class="badge">编辑</span></a>
                            <a href=""><span class="badge">删除</span></a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Public/js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/admin/common.js"></script>
    
  </body>
</html>