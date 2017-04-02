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
   <li class="active">单页管理</li>
   <li class="active">单页列表</li>
   
 </ol>




<table class="table table-hover">
	<thead>
	<tr>
		
		<th>ID</th>
		<th>所属栏目</th>
		<th>状态</th>
		<th>说明</th>				
		<th>操作</th>						
	</tr>
	</thead>
	<tbody>
	<?php foreach($page as $v):?>
	<tr>
		<td><?=$v['id']?></td>
		<td><a href="<?php echo '../../index.php?c=column&m=col&cat_id='.$v['column_id']?>" target="_blank" title="预览栏目"><?=$v['column_name']?></a></td>
		<td><?php if($v['column_attr']=='1') echo '已启用';?></td>
		<td><?=$v['title']?></td>
				
		<td>
		  <a href="<?=site_url('c=page&m=update&page_id=').$v['id']?>" class="btn btn-primary btn-sm">修改</a> 
		 <a href="<?=site_url('c=page&m=delete&page_id=').$v['id']?>" onclick="return confirm('确认要删除？')" class="btn btn-danger btn-sm">删除</a>
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

</body>
</html>






