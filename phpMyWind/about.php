<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/solution.css"/>
<link rel="stylesheet" href="css/common.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/slideplay.js"></script>
<script type="text/javascript" src="templates/default/js/srcollimg.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<script type="text/javascript">
$(function(){
    $(".imgwrap li img").LoadImage({width:60,height:45});
    $(".newsfocus div img").LoadImage({width:60,height:60});
});
</script>
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->

<!-- 轮播图片 -->
<div class="s-pic">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="pic">
                <?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE id=22 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,2");

            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
            ?>
            <li><a href="<?php echo $gourl; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" /></a></li>
            <?php
            }
            ?>
    </div>   
    </div> 
    </div>
    </div>
    </div>
<!-- end 轮播图 -->
<div class="s-we">
  <div class="container">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="we">解决方案</div>
                </div>
        </div>
  </div>
</div>
<div class="s-wanps">
<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="wanps"></div>
                </div>
                </div>
                </div>
                </div>


 <!--  内容   --> 
  <?php
            $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
            while($row = $dosql->GetArray())
            {
                if($row['linkurl'] != '')$gourl = $row['linkurl'];
                else $gourl = 'javascript:;';
            ?>          
<div class="s-mian" style=" padding-top: 20px;">
<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                     <div class="wanpse">
                           <div class="col-lg-4 col-md-4 col-xs-4">
                                <img src="<?php echo $row['picurl'] ?>">
                           </div>
                <div class="col-lg-8 col-md-8 col-xs-8">
                            <h4>教育教育在教育</h4>
<p>时间：<?php echo GetDatetime($row ['description']);?></p>
<p><?php echo $row['description'] ?></p>
                           </div>

                     </div>      

</div>
</div>
</div>
</div>
<?php
}
?>
<?php require_once('footer.php'); ?>
</body>
</html>

