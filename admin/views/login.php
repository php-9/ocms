<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">    
  <base href="<?php echo base_url('views').'/';?>">
  <title>网站后台登录</title>
  <link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">

</head>
<body>
  
<div class="container">
<h2 style="text-align:center;">系统登录</h2>  
  
  <form class="form-horizontal" role="form" action="<?php echo site_url('c=login&m=check')?>" method="post" onsubmit="return mySubmit(true)">
     <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">帐号</label>
        <div class="col-sm-10">

           <input type="text" class="form-control" name="username">

        </div>
     </div>
     <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
           <input type="password" class="form-control" name="password">
        </div>
     </div>


     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="btn btn-default "> 登录 </button>
        </div>
     </div>
  </form>
</div>


<?php
$this->load->view('foot');
?>

<script>
  function mySubmit(flag){  
      return flag;  
  }  
  $('button[type=submit]').click(function(){
      if(!$('input[name=username]').val() || !$('input[name=password]').val()){
        layer.msg('帐号 和 密码 必须输入');
        return mySubmit(false);
      }

      
      
      
  })
</script>
</body>
</html>