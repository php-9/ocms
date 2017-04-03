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
   <li class="active">栏目管理</li>
   <li class="active">添加栏目</li>
   
 </ol>





<form class="form-horizontal" action="<?php echo site_url('c=column&m=insert_pass') ?>" method="post">
              <div class="form-group">
                    <label class="col-sm-2 control-label">栏目名称</label>
                    <div class="col-sm-10">
                      <input type="text" name="name"  class="form-control">
                    </div>


              </div>

              <div class="form-group">
                    <label class="col-sm-2 control-label">上级栏目</label>
                    <div class="col-sm-10">
                      <select name="pcat"  class="form-control">
                        <option value="0">顶级栏目</option>
                        <?php foreach($cats as $v):?>
                        <option value="<?php echo $v['id']?>"><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']).$v['name']?></option>

                        <?php endforeach?>

                        
                    </select>
                    </div>


              </div>


              <div class="form-group">
                    <label class="col-sm-2 control-label">栏目属性</label>
                    <div class="col-sm-10 radio">
                      <label style="padding-right:1em;">
                        <input type="radio" name="attr" value="0" checked>
                        列表
                      </label>
                      <label style="padding-right:1em;">
                        <input type="radio" name="attr" value="1">
                        单页
                      </label>
                      <label style="padding-right:1em;">
                        <input type="radio" name="attr" value="2">
                        外链
                      </label>
                      <label style="padding-right:1em;">
                        <input type="radio" name="attr" value="3">
                        内链
                      </label>
                    </div>
              </div>


              <div class="form-group elink" style="display:none;">
                    <label class="col-sm-2 control-label">(外链)地址</label>
                    <div class="col-sm-10">
                      <input type="text" value="" name="elink"  class="form-control" placeholder="完整的网址示例 http://www.noweb.win">
                    </div>
              </div>


              <div class="form-group ilink" style="display:none;">
                    <label class="col-sm-2 control-label">(内链)栏目</label>
                    <div class="col-sm-10">
                            <select name="ilink"  class="form-control">
                              <option value="0">请选择</option>
                              <?php foreach($ilinks as $v):?>
                              <option value="<?php echo $v['id']?>"><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']).$v['name']?></option>
                              <?php endforeach?>                              
                            </select>
                    </div>
              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label">单页(模板)</label>
                      <div class="col-sm-10">
                        <input type="text" value="page.htm" name="page"  class="form-control">
                      </div>


              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label">列表(模板)</label>
                      <div class="col-sm-10">
                        <input type="text" value="list.htm" name="list"  class="form-control">
                      </div>


              </div>

              <div class="form-group">
                      <label class="col-sm-2 control-label">文章(模板)</label>
                      <div class="col-sm-10">
                        <input type="text" value="doc.htm" name="doc"  class="form-control">
                      </div>
              </div>


              
              <div class="form-group">
                    
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-primary" value="提交" >
                      <a href="javascript:history.go(-1);" class="btn btn-default">返回</a>
                    </div>


              </div>



 </form>   




</div>












<?php
$this->load->view('foot');
?>
<script type="text/javascript" src="../../bt3/js/jquery.min.js"></script>
<script>
  $(function(){
    $('input[name=attr]').click(function(){
      $('.elink').hide();
      $('.ilink').hide();
      if($(this).val()=='2'){//外链
         $('.elink').slideDown();
      }
      if($(this).val()=='3'){//内链
         $('.ilink').slideDown();
      }   
    });
  })
</script>
</body>
</html>