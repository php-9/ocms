<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo base_url('views').'/';?>">
	<title>网站管理</title>
	<link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">

</head>
<body>
	

<div class="container-fluid">
	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url('c=config')?>">首页</a></li>
	  <li class="active">基本设置</li>
	  <li class="active">网站设置</li>
	  
	</ol>
	<form class="form-horizontal" action="<?php echo site_url('c=config&m=update')?>" method="post">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">网站标题</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control"  name="title" value="<?php echo $config['title']?>">
	    </div>
	  </div>


	  <div class="form-group">
	    <label class="col-sm-2 control-label">网站关键字</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control"  name="keywords" value="<?php echo $config['keywords']?>">
	    </div>
	  </div>


	  <div class="form-group">
	    <label class="col-sm-2 control-label">网站描述</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control"  name="description"  value="<?php echo $config['description']?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="col-sm-2 control-label">联系QQ</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control"  name="qq" value="<?php echo $config['qq']?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="col-sm-2 control-label">联系电话</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control"  name="tel" value="<?php echo $config['tel']?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="col-sm-2 control-label">版权信息</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control"  name="copyright" value="<?php echo $config['copyright']?>">
	    </div>
	  </div>


	  <div class="form-group">
	    <label class="col-sm-2 control-label">网站静态</label>
	    <div class="checkbox col-sm-10">
	      <label>
	        <input type="checkbox" name="ishtml" <?php if($config['ishtml']){echo 'checked';}?>> 开启
	      </label>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-primary">修改</button>
	    </div>
	  </div>
	</form>
</div>

<?php
$this->load->view('foot');
?>


</body>
</html>