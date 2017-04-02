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
	  <li class="active">链接管理</li>
	  <li class="active">添加链接</li>
	  
	</ol>


	<form class="form-horizontal" action="<?=site_url('c=flink&m=add_pass')?>" method="post" enctype="multipart/form-data">


		<div class="form-group">
		      <label class="col-sm-2 control-label">名称</label>
		      <div class="col-sm-10">
		        <input name="tit" type="text" class="form-control"/>
		      </div>
		</div>


		<div class="form-group">
		      <label class="col-sm-2 control-label">地址</label>
		      <div class="col-sm-10">
		        <input name="url" type="text" class="form-control"/>
		      </div>
		</div>

		<div class="form-group">
		      <label class="col-sm-2 control-label">图标</label>
		      <div class="col-sm-10">
		        <input type="file" name="thumb" class="file" id="file">
		      </div>


		</div>



		<div class="form-group">
		      
		      <div class="col-sm-offset-2 col-sm-10">
		        <input type="submit" class="btn btn-primary" value="提交" />
		      </div>


		</div>



	</form>

</div>




<?php
$this->load->view('foot');
?>


</body>
</html>






