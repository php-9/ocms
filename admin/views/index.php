<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OCMS管理后台</title>
<base href="<?php echo base_url('views').'/';?>">

<link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tendina.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>

</head>
<body>
    <!--顶部-->
    <div class="layout_top_header">
            <div style="float: left">
                
                <span style="font-size: 16px;padding-left:1em;color:#fff;line-height: 45px;" class="glyphicon glyphicon-grain" aria-hidden="true"></span>
                <span style="font-size: 16px;padding-left:0.5em;line-height: 45px;color: #8d8d8d;text-shadow: #eee 0 1px 0;">OCMS网站管理系统</span>
                <span style="padding-left:1em;font-size:12px;color:#fff;">[ 技术支持：QQ 68242331 ]</span>
            </div>

    </div>
    <!--顶部结束-->
    <!--菜单-->
    <div class="layout_left_menu">
        <ul id="menu">
            <li class="childUlLi">
               <a href="javascript:;"  target="menuFrame"><i class="glyphicon glyphicon-chevron-right"></i>基本设置</a>
                <ul>
                    <li><a href="<?php echo '../../index.php';?>" target="_blank"><i class="glyphicon glyphicon-triangle-right"></i>前台预览</a></li>
                    <li><a href="<?php echo site_url('c=config');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>网站设置</a></li>
                </ul>
            </li>
            <li class="childUlLi">
                <a href="javascript:;"  target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>栏目管理</a>
                <ul>
                    <li><a href="<?php echo site_url('c=column');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>栏目列表</a></li>
                    <li><a href="<?php echo site_url('c=column&m=insert');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>添加栏目</a></li>
                   
                </ul>
            </li>
            <li class="childUlLi">
                <a href="javascript:;"  target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>单页管理</a>
                <ul>
                    <li><a href="<?php echo site_url('c=page');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>单页列表</a></li>
                    <li><a href="<?php echo site_url('c=page&m=insert');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>添加单页</a></li>
                   
                </ul>
            </li>

            <li class="childUlLi">
                <a href="javascript:;" target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>文章管理</a>
                <ul>
                    <li><a href="<?php echo site_url('c=article');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>文章列表</a></li>
                    <li><a href="<?php echo site_url('c=article&m=insert');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>添加文章</a></li>
                </ul>
            </li>


            <li class="childUlLi">
                <a href="javascript:;" target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>静态生成</a>
                <ul>
                    <li><a href="<?php echo '../../index.php?c=dohtml&m=make_index'?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>生成首页</a></li>
                    <li><a href="<?php echo '../../index.php?c=dohtml&m=make_all'?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>生成整站</a></li>                
                </ul>
            </li>


<!--             <li class="childUlLi">
    <a href="javascript:;" target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>数据备份</a>
    <ul>
        <li><a href="<?php echo site_url('c=flink');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>备份</a></li>
        <li><a href="<?php echo site_url('c=flink&m=add');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>恢复</a></li>
    </ul>
</li> -->

            <li class="childUlLi">
                <a href="javascript:;" target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>友链管理</a>
                <ul>
                    <li><a href="<?php echo site_url('c=flink');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>链接列表</a></li>
                    <li><a href="<?php echo site_url('c=flink&m=add');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>添加链接</a></li>
                </ul>
            </li>

            <li class="childUlLi">
                <a href="javascript:;" target="menuFrame"> <i class="glyphicon glyphicon-chevron-right"></i>用户管理</a>
                <ul>
                    <li><a href="<?php echo site_url('c=manage');?>" target="menuFrame"><i class="glyphicon glyphicon-triangle-right"></i>密码修改</a></li>
                    <li><a href="<?php echo site_url('c=manage&m=exit_login');?>" onclick="return confirm('确定退出登录吗？');"><i class="glyphicon glyphicon-triangle-right"></i>退出登录</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--菜单-->
    <div id="layout_right_content" class="layout_right_content">

        <div class="mian_content">
            <div id="page_content">
                <iframe id="menuFrame" name="menuFrame" src="<?php echo site_url('c=config');?>" style="overflow:visible;"
                        scrolling="yes" frameborder="no" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>


</body>
</html>