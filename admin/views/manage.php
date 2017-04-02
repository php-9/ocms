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
	  <li class="active">用户管理</li>
	  <li class="active">密码改修</li>
	  
	</ol> 
	
	<table class="table table-hover table-condensed">
	         <thead>
	               <tr>
	               		<th>ID</th>

	                  <th>管理员帐号</th>
	                  <th>管理员密码</th>
	                  
	                  <th>操作</th>

	                 

	               </tr>
	            </thead>
	            <tbody>

<?php foreach($manage as $v):?>	             
	               <tr>
	               	<form  action="<?php echo site_url('c=manage&m=update&user_id=').$v['id']?>" method="post">
	               		<td><?php echo $v['id']?></td>
	                  <td><input type="text" class="form-control" value="<?php echo $v['username']?>" name="username" readonly></td>
	                  <td><input type="password" class="form-control"  value="" name="password"  placeholder="不修改请留空"></td>
	                  <td>
	                  	<input type="submit" value="修改" class="btn btn-primary btn-sm" > 
	                  	<a href="<?php echo site_url('c=manage&m=delete&user_id=').$v['id']?>" class="btn btn-danger btn-sm" onclick=" javascript:  return  confirm('确认删除?')">删除</a>
	                  </td>
	       			</form>
	               </tr>
<?php endforeach?>	               


	            
	              
	            </tbody>
	         </table>

	         <hr/>


	         <!-- <form class="form-inline"  action="<?php echo site_url('manage/insert')?>" method="post">
	         
	           <div class="form-group">
	             <label >管理员帐号</label>
	             <input type="text" class="form-control" name="username" data-toggle="tooltip" title="账号不能为空">
	           </div>
	           <div class="form-group">
	             <label >管理员密码</label>
	             <input type="text" class="form-control" name="password" data-toggle="tooltip" title="密码不能为空">
	           </div>
	           <input type="submit" class="btn btn-primary" value="增加管理员">
	         </form> -->
</div>

<?php
$this->load->view('foot');
?>


</body>
</html>