<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <base href="<?php echo base_url('views').'/';?>">
  <title>网站管理</title>
  <link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">  
  <script src="../../bt3/js/jquery.min.js"></script>

</head>
<body>


<div class="container-fluid">


 <ol class="breadcrumb">
   <li><a href="<?php echo site_url('c=config')?>">首页</a></li>
   <li class="active">文章管理</li>
   <li class="active">文章列表</li>
   
 </ol>
<form class="form-horizontal" action="<?=site_url('c=article&m=index')?>" method="post" enctype="text/plain">
	 <div class="form-group">
	       <label class="col-sm-1 control-label" style="text-align:left;">栏目:</label>
	       <div class="col-sm-5">
	         <select name="cate" class="form-control">
	         	<option value="0">全部</option>
	 		<?php foreach($cate as $v):?>
	 		    <option value="<?=$v['id']?>" <?php if($catId==$v['id']) echo "selected";?> ><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']).$v['name']?></option>
	 		<?php endforeach;?>
	 		</select>
	       </div>


	 </div>
	 
</form>

<table class="table table-hover">
	<thead>
	<tr>
		
		<th>ID</th>

		<th>标题</th>
		<th>栏目</th>
		<th>排序</th>
		<th>阅读</th>
		<th>发布人</th>
		<th>发布时间</th>
		<th>操作</th>						
	</tr>
	</thead>
	<tbody>
	<?php foreach($doc as $v):?>
	<tr>
		<td><?=$v['id']?></td>

		<td><a href="<?php echo '../../index.php?c=column&m=doc&art_id='.$v['id']?>" target="_blank" title="预览文章">
			<?=$v['title']?> <?php 
		if($v['thumbnail']){
			echo "<span class='glyphicon glyphicon-picture'></span>";
		}
			?>
			</a>
		</td>
		<td><?=$v['column_name']?></td>
		<td><?=$v['sort']?></td>
		<td><?=$v['hit']?></td>
		<td>发布人</td>
		<td><?=date('y-m-d H:m',$v['AddTime'])?></td>

		<td>
		  <a href="<?=site_url('c=article&m=update&art_id=').$v['id']?>" class="btn btn-primary btn-sm">修改</a> 
		 <a href="<?=site_url('c=article&m=delete&art_id=').$v['id']?>" onclick="return confirm('确认要删除？')" class="btn btn-danger btn-sm">删除</a>
		</td>
	</tr>
	<?php endforeach;?>


	</tbody>
</table>

<nav aria-label="Page navigation">
      <?php echo $pages;?>            
</nav>



</div>

















<?php
$this->load->view('foot');
?>
<script>
	$('form select').change(function(){
		$form=$('form');
		$form.attr('action',$form.attr('action')+'&cat_id='+$(this).val());
		$form.submit();
	});
</script>
</body>
</html>






