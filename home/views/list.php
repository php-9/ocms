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
                     
                      <li class="<?php if($cat['id']==$v['id']) {echo 'on';}?>" >
                       <a href="<?=site_url('c=column&m=col&cat_id=').$v['id'];?>"><?=$v['name']?></a>
                      </li>
                      
                 <?php endforeach;?>
              <?php endif;?>

          </ul>
      </div>
      <div class="main">
          <ul class="txt_list">
            <?php if($doc):?>
            <?php foreach($doc as $v):?>
              <li>
                <h2><span><?=date('y年m月d日', $v['AddTime'])?></span><a href="<?=site_url('c=column&m=doc&art_id=').$v['id']?>"><?=$v['title']?></a></h2>
                <p><?=  mb_substr(strip_tags($v['content']),0,100,'utf-8').'...';?></p>

              </li>
            <?php endforeach;?>
            <?php endif;?>
          </ul>
          <div class="pages">
              <?php echo $pages;?>
          </div>
          
      </div>
      <div class="c"></div>
  </div>
    

                


<!-- <img  class="img_l" src="<?php if($v['thumbnail']){echo base_url('upload').'/'.$v['thumbnail'];}else{echo 'styles/images/logo_site.jpg';}?>" alt="<?=$v['title']?>"> -->
                        
                      







<?php $this->load->view('foot')?>
</body>
</html>



