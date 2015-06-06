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

    
	<table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>编号</th>
          <th>商户名称</th>
          <th>商户电话</th>
          <th>营业时间</th>
          <th>商户地址</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
	    <?php if(is_array($merchants)): $i = 0; $__LIST__ = $merchants;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$merchant): $mod = ($i % 2 );++$i;?><tr>
	          <th scope="row"><?php echo ($merchant["id"]); ?></th>
	          <td><a href="#" class="MerchantName"><span><?php echo ($merchant["name"]); ?></span></a></td>
	          <td><?php echo ($merchant["tel"]); ?></td>
	          <td><?php echo ($merchant["worktime"]); ?></td>
	          <td><?php echo ($merchant["address"]); ?></td>
	          <td data-id="<?php echo ($merchant["id"]); ?>">
                  <a href="#" data-toggle="modal" data-target="#myModal" class="show_merchant"><span class="badge">查看/编辑</span></a>
                  <a href=<?php echo U('Merchant/order_list',"id=$merchant[id]");?> target="_blank"><span class="badge">订单管理</span></a>
              </td>
	        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <form class="form-horizontal" method="post" action="<?php echo U('Merchant/update');?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">查看/编辑商户信息</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="inputId" value="" name="id">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">商户名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="请填写商户名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTel" class="col-sm-2 control-label">商户电话</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTel" name="tel" placeholder="请填写商户电话">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputWorktime" class="col-sm-2 control-label">营业时间</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWorktime" name="worktime" placeholder="请填写营业时间">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-2 control-label">商户地址</label>
                            <div class="col-sm-10">
                                <textarea rows="3" class="form-control" id="inputAddress" name="address" placeholder="请填写商户地址"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputInfo" class="col-sm-2 control-label">商户信息</label>
                            <div class="col-sm-10">
                                <textarea rows="5" class="form-control" id="inputInfo" name="info" placeholder="请填写商户信息"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Public/js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/admin/common.js"></script>
    
    <script src="/Public/js/admin/merchant.js"></script>

  </body>
</html>