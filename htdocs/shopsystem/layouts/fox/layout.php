<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/> 
<meta name="author" content=""/> 
<link rel="stylesheet" type="text/css" href="layouts/<?PHP echo $config['site']['shop_layout_name']; ?>/style.css" media="screen"/>
<title><?PHP echo $config['server']['serverName']; ?> - Shop</title>
<link rel="shortcut icon" href="../ico/server1.ico" />
</head>

<body>

<div id="wrapper">
<div id="container">
		
<div class="title">

	<h1><a href=""><?PHP echo $config['server']['serverName']; ?> - Shop</a></h1>
	
</div>
	
<div class="header"></div>

<div class="navigation">
	<?PHP
	if($logged) {
		echo '<a href="index.php?subtopic=shopsystem&action=logout"><b>Logout</b></a>';
	} else {
		echo '<a href="index.php?subtopic=shopsystem&action=login"><b>Login</b></a>';
	}
	?><a href="index.php?subtopic=shopsystem"><b>Trocar Eagle Coins</b></a>
	<?PHP
	if($logged) {
		echo '<a href="index.php?subtopic=shopsystem&action=show_history"><b>Histórico</b></a>';
	}
	?><div class="clearer">&nbsp;</div>
</div>

<div class="main">		
	
	<div class="content">
		<?PHP echo $main_content; ?>
	</div>

	<div class="footer">

		<div class="left">
			Sistema elaborado por Gesior. Editado, traduzido e corrigido por EGGabriel.
		</div>

		<div class="right">
			<a href="http://templates.arcsin.se">Website template</a> by <a href="http://arcsin.se">Arcsin</a>
		</div>

		<div class="clearer"></div>

	</div>

</div>

</div>
</div>

</body>
</html>