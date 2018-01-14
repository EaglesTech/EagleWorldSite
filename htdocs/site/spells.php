<?php
include ("include.inc.php");
$ptitle="Magias - $cfg[server_name]";
include ("header.inc.php");
?>

<div id="content">
	<div class="top">Magias do Eagle</div>
	<div class="mid">
			<table border=0 width="100%">
			<tr>
			<td>
				<center><font class=f3>Stant Spells</font></center>
                <center>
                <table border=1 cellpadding=1 cellspacing=1 width="250">
					<tr>
					  <td width="80"><a href="knightspells.php"><img src="images/knight.bmp" height="80" width="80"></a></td>
					  <td>
					    <center>
						<font class=f2>
					    <a href="knightspells.php" target="knightspells">
						  Knight<br>
						  Elite Knight<br>
						  Monster Knight
						</a>
						</font>
						<center>
					  </td>
					</tr>

					<tr>
					  <td width="80" height="80"><a href="paladinspells.php"><img src="images/paladin.bmp" height="80" width="80"></a></td>
					  <td>
					    <center>
						<font class=f2>
					    <a href="paladinspells.php" target="paladinspells">
						  Paladin<br>
						  Royal Paladin<br>
						  Lord Paladin
						</a>
						</font>
						<center>
				      </td>
				    </tr>

					<tr>
					  <td width="80" height="80"><a href="sorcererspells.php"><img src="images/sorcerer.bmp" height="80" width="80"></a></td>
					  <td>
					    <center>
						<font class=f2>
					    <a href="sorcererspells.php" target="sorcererspells">
						  Sorcerer<br>
						  Master Sorcerer<br>
						  Supreme Sorcerer
						</a>
						</font>
						<center>
					  </td>
					</tr>

					<tr>
					  <td width="80" height="80"><a href="druidspells.php"><img src="images/druid.bmp" height="80" width="80"></a></td>
					  <td>
					    <center>
						<font class=f2>
					    <a href="druidspells.php" target="druidspells">
						  Druid<br>
						  Elder Druid<br>
						  Majestic Druid
						</a>
						</font>
						<center>
					  </td>
					</tr>
                </table>
                </center>
				<br>
			</td>
			
			<td>
				<font class=f3>Conjure Spells</font><br>
				<a href="conjurespells.php">
				<img src="images/conjure/aura bow.bmp" width="34" height="34">
				<img src="images/conjure/adana mort.bmp" width="34" height="34">
				<img src="images/conjure/exeta con.bmp" width="34" height="34">
				<img src="images/conjure/exevo pan.bmp" width="34" height="34">
				<img src="images/conjure/aura axe.bmp" width="34" height="34">
				</a>
				<br><br><br><br><br><br>
				<font class=f3>Special Skills</font><br>
				<a href="skills.php">
				<img src="images/habilidades/yahumuki.bmp" width="34" height="34">
				<img src="images/habilidades/king teleport.bmp" width="34" height="34">
				<img src="images/habilidades/dobrao de fogo.bmp" width="34" height="34">
				<img src="images/habilidades/danca dos ossos.bmp" width="34" height="34">
				<img src="images/habilidades/tremor fortificado.bmp" width="34" height="34">
				</a>
				</center>
			</td>
		</tr>
		</table>
	</div>
	<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>