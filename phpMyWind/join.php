<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/we.css"/>
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
<div class="s-pic">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="pic">
                
                <?php
            $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE id=29 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,2 ");
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




<!-- 线条 -->
<div class="s-wanp">
<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="wanp"></div>
                </div>
                </div>
                </div>
                </div>

<!-- 关于我们 -->
<div class="s-we">
<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="we">关于我们</div>
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

<!-- 侧边栏 -->
<div class="myleft">
     <div class="container">
            <div class="row">
             	<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=18 ");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>

				<div class="col-lg-6 col-md-6">
				 <div class="myleft-title">
						<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
					      <div class="myleft-text"><?php echo $row['title']; ?></div>
					</div>
				</div>
<?php
			         }
			         ?>
</div>
</div>





               <div class="col-lg-10 col-md-10 col-xs-10">
                     <div class="myright">
<p>我曾看过一篇题目为《心境的魔力》的文章。大意为一个名为雅克·弗兰克的精神博士曾经在纳粹集中营被美军关押了许多日子，饱受凌辱</p><br>
　　
　　

<p>我曾看过一篇题目为《心境的魔力》的文章。大意为一个名为雅克·弗兰克的精神博士曾经在纳粹集中营被美军关押了许多日子，饱受凌辱</p><br>
　　
　　<p>我曾看过一篇题目为《心境的魔力》的文章。大意为一个名为雅克·弗兰克的精神博士曾经在纳粹集中营被美军关押了许多日子，饱受凌辱</p><br>
　　
　
<p>我曾看过一篇题目为《心境的魔力》的文章。大意为一个名为雅克·弗兰克的精神博士曾经在纳粹集中营被美军关押了许多日子，饱受凌辱</p><br>

</div>
</div>
</div>
</div>
</div>



							</body>
							</html>
