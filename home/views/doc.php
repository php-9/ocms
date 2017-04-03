<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo base_url('home/views').'/';?>">
    <title><?=$this->cfg['title']?></title>
    <meta name="keywords" content="<?=$this->cfg['keywords']?>" />
    <meta name="description" content="<?=$this->cfg['description']?>">
    <link rel="stylesheet" href="skins/main.css">
    <script src="skins/jquery-1.11.1.min.js"></script>
    <script src="skins/layer/layer.js"></script>
</head>
<body>

  <?php $this->load->view('head')?>



  <div class="column_w l1100">
      <div class="side">
          <h2><?php echo mb_substr($sideTitle,0,2,'utf-8')?><span><?php echo mb_substr($sideTitle,2,mb_strlen($sideTitle,'utf-8')-2,'utf-8')?></span></h2>
          <ul>
          
               <?php if($sideCats):?>
                 <?php foreach($sideCats as $v):?>
                     
                      <li class="<?php if($doc['cate']==$v['id']) {echo 'on';}?>" >
                       <a href="<?=$v['url'];?>"><?=$v['name']?></a>
                      </li>
                      
                 <?php endforeach;?>
              <?php endif;?>

          </ul>
      </div>
      <div class="main">
          <?php if($doc):?>
              <h2 style="font-size:22px;"><span style="float:right;color:#666;font-size:12px;"><?=date('y-m-d',$doc['AddTime'])?></span><?=$doc['title']?></h2>
                
              <div>
                <?php
                echo preg_replace("/<img src=\"http:\/\/localhost\/zcos\//","<img src=\"".base_url(),$doc['content']);
                ?>

              </div>

              <div style="padding-top:10px;">
                <a href="javascript:history.go(-1);">[ 返回 ]</a>
              </div> 

          <?php endif?>
      </div>
      <div class="c"></div>
  </div>
    

                

<?php $this->load->view('foot')?>
</body>
</html>



