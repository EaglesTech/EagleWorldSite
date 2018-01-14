<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="description"/>
<meta name="keywords" content="ots, shop, <?PHP echo $config['server']['serverName']; ?>"/> 
<meta name="author" content="Gesior"/> 
<link rel="stylesheet" type="text/css" href="layouts/<?PHP echo $config['site']['shop_layout_name']; ?>/default.css" media="screen"/>
<title><?PHP echo $config['server']['serverName']; ?> - Shop</title>
</head>

<body>

<div class="outer-container">

<div class="inner-container">

	<div class="header">
		
		<div class="title">

			<span class="sitename"><a href="index.html"><?PHP echo $config['server']['serverName']; ?></a></span>
			<div class="slogan">OTS Shop by Gesior</div>

		</div>
		
	</div>

	<div class="path">
			
			<a href="index.php?subtopic=shopsystem">Shop</a>

	</div>

	<div class="main">		
		
		<div class="content">
			<?PHP echo $main_content; ?>
		</div>

		<div class="navigation">

			<h2><font color="green">Your account</font></h2>
			<ul>
				<?PHP
				if($logged)
				{
					echo '<li><a href="index.php?subtopic=shopsystem&action=logout"><b>Logout</b></a></li>
					<li><b>Points:</b> '.$user_premium_points.'</li>';
				}
				else
				{
					echo '<li><a href="index.php?subtopic=shopsystem&action=login"><b>Login</b></a></li>
					<li><b>Points:</b> '.$user_premium_points.'</li>';
				}
				?>
			</ul>

			<h2><font color="green">Shop</font></h2>
			<ul>
				<li><a href="index.php?subtopic=shopsystem"><b>Buy Item or PACC</b></a></li>
			</ul>

		</div>

		<div class="clearer">&nbsp;</div>

	</div>

	<div class="footer">

		<span class="left">

			&copy; 2008 <?PHP echo $config['server']['serverName']; ?>, Shop system by Gesior

		</span>

		<span class="right">

			<a href="http://templates.arcsin.se">Website template</a> by <a href="http://arcsin.se">Arcsin</a>

		</span>

		<div class="clearer"></div>

	</div>

</div>

</div>

</body>

</html>