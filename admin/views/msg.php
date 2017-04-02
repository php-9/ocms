<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo base_url('views').'/';?>">
	<title>网站提示</title>
	<link rel="stylesheet" href="../../bt3/css/bootstrap.min.css">
	
</head>
<body>
	


		

<div class="container">
	
	<div class="panel <?php if($type){echo 'panel-success';}else{echo 'panel-danger';}?>">
	   
	   <div class="panel-body" style="text-align:center;">
	      <strong><?php echo $txt?></strong> , 页面<span id="num"></span>秒后自动跳转...
	   </div>
	</div>


</div>

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="../../layer/layer.js"></script>
<script language="javascript">

        $(function() {
        	var height= ($(window).height()-$('.container').height())/2;

        	height=height+'px';
        	
        	$('.container').css('margin-top',height);
            function jump(count) {
            	$('#num').html(count); 
                window.setTimeout(function(){ 
                    count--; 
                    if(count >= 0) { 
                        $('#num').html(count); 
                        jump(count); 
                    }else{
                    		<?php if(!$type){?>
                    		history.go(-1);
                    		<?php }else{ ?>
                    		location.href="<?php echo site_url($url)?>";		
                    		<?php }?>	

                    } 
                }, 1000); 
            } 
            jump(<?php echo $time?>); 
        }); 

</script> 

<?php
exit();
?>
</body>
</html>