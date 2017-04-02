<div id="top">
  <div class="l">
      <a href="javascript:;">聊城总公司</a> | <a href="javascript:;">济南总公司</a> | <a href="javascript:;">临沂总公司</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="javascript:;" class="link"><img src="skins/images/v1.gif" alt=""></a>
      <a href="javascript:;" class="link"><img src="skins/images/v2.gif" alt=""></a>
      <a href="javascript:;" class="link"><img src="skins/images/v3.gif" alt=""></a>
      <a href="javascript:;" class="link"><img src="skins/images/v4.gif" alt=""></a>
      <a href="javascript:;" class="link"><img src="skins/images/v5.gif" alt=""></a>
  </div>
</div>
<div id="top1">
  <div class="l">
    <div class="logo">
      <a href="<?= site_url('welcome/index')?>"></a>
    </div>
    <div class="tel">
      
    </div>
    <div class="c"></div>
  </div>
</div>
<div id="nav">
  <ul class="l">
    <li><a href="<?= site_url()?>">首 页</a></li>
    <?php foreach ($this->menu as $v):?>
                       <?php if($v['pid']==0){ ?>
                       <li><a href="<?=site_url('c=column&m=col&cat_id=').$v['id']?>"><?=$v['name']?></a></li>
                       <?php } ?>
    <?php endforeach ?>
  </ul>
</div>