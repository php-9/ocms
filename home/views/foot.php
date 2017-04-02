<div id="foot">
    <div class="l">
        
        <div class="copy">
            <p>备案号: 鲁ICP备13006327号-1</p>
            <p>临沂地址：山东省临沂市北京路与沂蒙路交汇向东200米商会大厦19楼</p>
            <p>济南地址：山东省济南市槐荫区经四纬十二路心里.卢浮馆6号楼</p>
            <p>版权所有：保力企业管理培训顾问公司。公司主要业务-企业管理培训服务,营销管理培训服务,员工内训和企业顾问服务</p>
        </div>
    </div>
</div>




<div id="shao">
    <img src="skins/images/shao.png" alt="扫一扫">
</div>

<div id="sheng">
    <img src="skins/images/sheng.png" alt="申请试听">
</div>

<div class="site_kf">
    <div class="qq"><a href="javascript:;"><img src="skins/images/q1.png" alt=""></a></div>
    <div class="qq"><a href="javascript:;"><img src="skins/images/q2.png" alt=""></a></div>
    <div class="qq"><a href="javascript:;"><img src="skins/images/q3.png" alt=""></a></div>
    <div class="tele">
        <p><strong>全国咨询热线</strong></p>
        <p>0539-7207711</p>
        
    </div>
</div>

<style>
    .site_kf{width: 100px; height: 400px;position:absolute;top:200px;right: 10px;}
    .site_kf .qq{width: 100px;height: 100px; margin-bottom: 5px;}
    .site_kf .tele{color:#cf0a0a;}
    .site_kf .tele p{height: 30px; line-height: 30px;text-align: center;font-size: 14px;}
    #shao{width: 722px;height: 454px;background: #fff;display: none;overflow: hidden;}
    #sheng{width: 740px;height: 452px;background: #fff;display: none;overflow: hidden;}
</style>

<script>
$('#top .link').click(function(){

        layer.open({

                type: 1,
                title: false,
                //closeBtn: 1, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: $('#shao'),
                area: ['722px', '454px']
                
            });

});
$('.case .listen').click(function(){

        layer.open({

                type: 1,
                title: false,
                //closeBtn: 0, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: $('#sheng'),
                area: ['740px', '452px']
                
            });

})

$('.ad7 .btn').click(function(){

        layer.open({

                type: 1,
                title: false,
                //closeBtn: 0, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: $('#sheng'),
                area: ['740px', '452px']
                
            });

})

$('.site_kf .qq a').click(function(){

        layer.open({

                type: 1,
                title: false,
                //closeBtn: 1, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: $('#shao'),
                area: ['722px', '454px']
                
            });

});

$('.news .subnav a').hover(function(){
    $('.news .subnav li').removeClass('on');
    $(this).parent().addClass('on');
});


$(function() { 
$(window).scroll(function() { 
var top = $(window).scrollTop()+200; 

$(".site_kf").css({top: top + "px" }); 
}); 
}); 
    
</script>