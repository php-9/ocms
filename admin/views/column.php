<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">

    <base href="<?php echo base_url('views').'/';?>">
  <title>网站管理</title>
  <link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">
  <script type="text/javascript" src="../../bt3/js/jquery.min.js"></script>
</head>

<body>

<div class="container-fluid">
   
 <ol class="breadcrumb">
   <li><a href="<?php echo site_url('c=config')?>">首页</a></li>
   <li class="active">栏目管理</li>
   <li class="active">栏目列表</li>
   
 </ol>






         <table class="table table-hover">
            <thead>
               <tr>
                  
                  
                  <th>栏目名称</th>
                  <th>属性</th>                  
                  <th>排序</th>                  
                  <th>文章数</th>                  
                  <th>操作</th>
                 

               </tr>
            </thead>
            <tbody class="cat">

             <?php foreach($column as $v):?>

               <tr class="<?=$v['level']?>" style="<?php if($v['level']!=0){echo 'display:none';}?>">                  
                  
                  <td>
                      <p class="form-control-static">
                                             
                        <?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']);?>
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="color:#ABCDEF"></span>
                        <?php if($v['pid']==0){echo '<strong>'.$v['name'].'</strong>';}else{echo $v['name'];}?>
                        <i style="font-style:normal;font-size:12px;color:#ccc;">[ <?='ID:'.$v['id']?> ]</i>
                      </p>
                  </td>
                  <td>
                    <p class="form-control-static">
                    <?php
                      switch ($v['attr']) {
                        case '1':
                          echo '单页';
                          break;
                        case '2':
                          echo '外链';
                          break;
                          
                        case '3':
                          echo '内链';
                          break;    
                        
                        default:
                          echo '列表';
                          break;
                      }
                    ?>
                    </p>
                  </td>
                  
                  <td><p class="form-control-static"><?php echo $v['sort']?></p></td>
                  
                  <td><p class="form-control-static"><a href="<?php echo site_url('c=article&m=index&cat_id=').$v['id']?>"><span class="badge"><?php echo $v['artcount']?></span></a></td>
                  
                  <td>
                    <a href="<?php echo site_url('c=column&m=update&cat_id=').$v['id']?>" class="btn btn-primary btn-sm">修改</a> 
                    <a href="<?php echo site_url('c=column&m=del&cat_id=').$v['id']?>" onclick="javascript:if(!confirm('确认要删除 [<?php echo $v['name']?>] 吗?')){return false;};" class="btn btn-danger btn-sm">删除</a> 
                    <a href="
                    <?php
                    switch ($v['attr']) {
                       case '2':
                         echo $v['elink'].'" target="_blank';
                         break;
                       case '3':
                         echo '../../index.php?c=column&m=col&cat_id='.$v['ilink'];
                         break;
                       
                       default:
                         echo '../../index.php?c=column&m=col&cat_id='.$v['id'];
                         break;
                     } 
                    
                    ?>
                    " target="_blank" title="预览栏目" class="btn btn-default btn-sm">预览</a>
                  </td>
               </tr>

             <?php endforeach?>  
              
            </tbody>
         </table>


    




</div>



<?php
$this->load->view('foot');
?>
<script>
 $('.cat tr').click(function(){
     ele=$(this).attr('class');
     $(this).find('.glyphicon').toggleClass('glyphicon-minus-sign');
     $(this).nextUntil('.'+ele).each(function(){
            if($(this).attr('class')==ele-1+2){
              $(this).fadeToggle();
            }
            if($(this).attr('class')>ele-1+2){
              
                $(this).hide();
             
            }
     });
  })
</script>
</body>
</html>