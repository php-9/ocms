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
	  <li class="active">单页管理</li>
	  <li class="active">修改单页</li>
	  
	</ol>


	<form class="form-horizontal" action="<?=site_url('c=page&m=update_pass&page_id=').$page['id']?>" method="post" enctype="multipart/form-data">
	
		<div class="form-group">
		      <label class="col-sm-2 control-label">说明</label>
		      <div class="col-sm-10">
		        <input class="form-control" name="title" type="text" value="<?=$page['title']?>"/>
		      </div>


		</div>

		<div class="form-group">
		      <label class="col-sm-2 control-label">所属栏目</label>
		      <div class="col-sm-10">
		        	<select name="cat" class="form-control">
						<option value='0'>未选择</option>
					    <?php foreach($cats as $v):?>
					        <option value="<?=$v['id']?>" <?php if($v['id']==$page['cat']){echo "selected='selected'";}?>><?=str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']);?><?=$v['name']?></option>
					    <?php endforeach;?>
					</select>
		      </div>


		</div>


		<div class="form-group">
		      <label class="col-sm-2 control-label">内容</label>
		      <div class="col-sm-10">
		        <script type="text/plain" id="myEditor" name="content" style="width:100%;height:240px;">
				<?=$page['content']?>
				</script>
		      </div>


		</div>

		<div class="form-group">
		      
		      <div class="col-sm-offset-2 col-sm-10">
		        <input type="submit" class="btn btn-primary" value="提交" /> 
		        <a href="javascript:history.go(-1);" class="btn btn-default">返回</a>
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






