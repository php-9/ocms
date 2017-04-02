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
   <li class="active">友情链接管理</li>
   <li class="active">友情链接列表</li>
   
 </ol>


<table class="table table-hover">
	<thead>
	<tr>
		
		<th>ID</th>
		<th>标题</th>
		<th>图标</th>
		<th>地址</th>
		<th>添加时间</th>
		<th>操作</th>						
	</tr>
	</thead>
	<tbody>
	<?php foreach($links as $v):?>
	<tr>
		<td><?=$v['id']?></td>
		<td><?=$v['tit']?></td>
		<td>
			<?php if($v['thumb']):?>
			<img src="<?='../../upload/'.$v['thumb']?>" height="30">
			<?php endif?>
		</td>		
		<td><?=$v['url']?></td>
		<td><?=date('y-m-d H:i',$v['addtime'])?></td>

		<td>
		  <a href="<?=site_url('c=flink&m=edit&id=').$v['id']?>" class="btn btn-primary btn-sm">修改</a> 
		 <a href="<?=site_url('c=flink&m=del&id=').$v['id']?>" onclick="return confirm('确认要删除？')" class="btn btn-danger btn-sm">删除</a>
		</td>
	</tr>
	<?php endforeach;?>


	</tbody>
</table>


</div>

















<?php
$this->load->view('foot');
?>

</body>
</html>






