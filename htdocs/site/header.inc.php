<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app>
<head>
<meta name="Author" content="nicaw" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Eagle World</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="screen.php" type="text/css" media="screen" />
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="News" href="news.php?RSS2" />
<script language="javascript" type="text/javascript" src="js.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $cfg['skin_url'].$cfg['skin']?>.js"></script>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>

<!-- Banner Rotativo -->
<link rel="stylesheet" href="slides.css">
<script src="jquery.slides.min.js"></script>
<script>
    $(function() {
      $('#slides').slidesjs({
        width: 560,
        height: 120,
		play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: false
        }
      });
    });
</script>
<!-- Banner Rotativo -->

<!-- Modifiquei para sistema de revisao de bans -->
<script src="jquery.maskedinput-1.2.2.min.js" type="text/javascript"></script>
<!-- /Modifiquei para sistema de revisao de bans -->

<link rel="shortcut icon" href="ico/server1.ico" />

<script type="text/javascript">
  $(window).load(function() {
  	$('#slider').chocoslider();
		auto:true
  });
</script>

<?php if ($cfg['secure_session'] && !empty($_SESSION['account']) && empty($_COOKIE['remember'])){?>
<script language="javascript" type="text/javascript">
//<![CDATA[
	function tick()
	{
		ticker++;
		if (ticker > <?php echo $cfg['timeout_session'];?>){
			self.window.location.href = 'login.php?logout&redirect=account.php';
		}else{
			setTimeout ("tick()",1000);
		}
	}
	ticker = 0;
	tick();
//]]>
</script>
<?php }?>
</head>
<body>

<center>	
<div id="form"></div>
<div id="container">
<img src="images/BannerTopo.png" width="973" height="174">
<table cellpadding="0" cellspacing="0" border="0" width="960">
<tr>
<td width="1" valign="top" align="left">
<div id="panel">
<div id="navigation">

<!-- Forum Menu -->
<div id="shop">
<div class="top">Forum</div>
<div class="mid">
<div id="forum">
<a href="http://eagleworld.forumeiros.com/"><img src="images/forum.gif" width="125"></a><br>
</div>
</div>
</div>
<div class="bot"></div>
<!-- /Forum Menu -->

<?php 
if (file_exists('navigation.xml')){
	$XML = simplexml_load_file('navigation.xml');
	if ($XML === false) throw new Exception('Malformed XML');
}else{die('Unable to load navigation.xml');}
foreach ($XML->category as $cat){
	echo '<div class="top">'.$cat['name'].'</div><ul>'."\n";
	foreach ($cat->item as $item)
		echo '<li><a href="'.$item['href'].'">'.$item.'</a></li>'."\n";
	echo '</ul><div class="bot"></div>'."\n";
}
?>
</div>

<!-- FoxWorld Shop Menu -->
<div id="shop">
	<div class="top">Eagle Shop</div>
	<div class="mid">
		<div id="shop_system">
			<a id="shopping_link" href="../shopsystem/" target="shop0">
			<img id="shopping_img" src="/site/images/bau_server1.png" width="150" height="150"><br>
			Troque seus<br>Eagle Gold aqui!
			</a>
		</div>
	</div>
</div>

<div class="bot"></div>

</td>
<td valign="top" width="100%" align="left">

</div>
</div>
</center>