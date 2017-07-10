<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/index.css"/>
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
<!-- banner-->
<div class="banner">
	<div id="slideplay">
		<ul>
			<?php
			$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=13 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>
			<li><a href="<?php echo $gourl; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" /></a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- /banner-->
<!-- 解决方案 -->
	<div class="s-solution">
		<div class="solution">
			<div class="s-title">
			<a href="about.php">解决方案/Solution More</a>
		</div>
		<div class="aorise-wrap"></div>
		<div class="s-content">
			<div class="container">
				<div class="row">

				<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14  AND  flag LIKE '%a%'  AND  delstate='' AND checkinfo=true ORDER BY orderid DESC   LIMIT 0,3");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>


                    <div class="col-lg-4 col-md-4 col-xs-4" >

                        <div class="s-content-image">
							<div class="s-img">
								<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
							</div>
							<div class="s-title"><?php echo $row['title']; ?></div>
						</div>
                    </div>
                    <?php
			         }
			         ?>
				</div>
			</div>		
		</div>
		
	
<!-- end 解决方案 -->
<!-- 关于我们 -->
       <div class="about">
		<div class="s-title"">
			<a href="#">关于我们/About Us More</a>
		</div>
		<div class="s-wrap"></div>
		<div class="container">
			<div class="row">
				
				<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=15  AND  flag LIKE '%a%'  AND  delstate='' AND checkinfo=true ORDER BY orderid DESC   LIMIT 0,4");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>

				<div class="col-lg-3 col-md-3">
					<div class="a-tupian">	
						<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
					    <div class="s-title"><?php echo $row['title']; ?></div>
					</div>
				</div>
				 <?php
			         }
			         ?>
			</div>
		</div>

<!-- end 关于我们 -->
	<!-- 新闻资讯 -->
	<div class="new">
		<div class="s-title">
			<a href="#">新闻资讯/NEWS More</a>
		</div>
		<div class="s-wrap"></div>
		<div class="container">
			<div class="row">

				<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=16  AND  flag LIKE '%a%'  AND  delstate='' AND checkinfo=true ORDER BY orderid DESC   LIMIT 0,4");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>

				<div class="col-lg-6 col-md-6">
					<div class="new-left">
						<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
					     <div class="s-title"><?php echo $row['title']; ?></div>
					</div>
				</div>
<?php
			         }
			         ?>
</div>
</div>



				<div class="col-lg-6 col-md-6">
					<div class="new-right">
						
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
		</div>
	</div>
	</div>
	<!-- 底部 -->

<?php require_once('footer.php'); ?>
							
</body>
</html>