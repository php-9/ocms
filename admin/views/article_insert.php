<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="<?php echo base_url('views').'/';?>">
  <title>网站管理</title>
  <link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">
  <link href="../../umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
  <link href="../../bt3/fileinput/css/fileinput.min.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url('c=config')?>">首页</a></li>
	  <li class="active">文章管理</li>
	  <li class="active">添加文章</li>
	  
	</ol>


	<form class="form-horizontal" action="<?=site_url('c=article&m=insert_pass')?>" method="post" enctype="multipart/form-data">


		<div class="form-group">
		      <label class="col-sm-2 control-label">名称</label>
		      <div class="col-sm-10">
		        <input name="title" type="text" class="form-control"/>
		      </div>


		</div>
		<div class="form-group">
		      <label class="col-sm-2 control-label">栏目</label>
		      <div class="col-sm-10">
		        <select name="cate" class="form-control">
				<?php foreach($cate as $v):?>
				    <option value="<?=$v['id']?>" <?php if( !empty($this->session->userdata('cate_cache')) && $this->session->userdata('cate_cache')==$v['id']) echo "selected";?> ><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']).$v['name']?></option>
				<?php endforeach;?>
				</select>
		      </div>


		</div>

		<div class="form-group">
		      <label class="col-sm-2 control-label">缩略图</label>
		      <div class="col-sm-10">
		        <input type="file" name="thumbnail" class="file" id="file">
		      </div>


		</div>






		<div class="form-group">
		      <label class="col-sm-2 control-label">内容</label>
		      <div class="col-sm-10">
		        <script type="text/plain" id="myEditor" name="content" style="width:100%;height:240px;"></script>

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
<script type="text/javascript" src="../../bt3/js/jquery.min.js"></script>
<script type="text/javascript" src="../../bt3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../bt3/fileinput/js/fileinput.min.js"></script>
<script type="text/javascript" src="../../bt3/fileinput/js/fileinput_locale_zh.js"></script>



<script type="text/javascript" charset="utf-8" src="../../umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../../umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="../../umeditor/lang/zh-cn/zh-cn.js"></script>


<script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');

    $("#file").fileinput({
    	showUpload:false
    	//uploadUrl:"<?php echo site_url('article/ajax_up')?>"
    });




</script>



</body>
</html>






