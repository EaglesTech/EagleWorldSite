<?php
include ("include.inc.php");
$ptitle="Gran Castle - $cfg[server_name]";
include ("header.inc.php");
?>

<div id="content">
	<div class="top">Gran Castle</div>
	<div class="mid">
				<center>
				<p><font class=f3>Gran Castle Event</font></p>
				<p><img src="images/grancastle.png"></p>
				</center>
				
				<p>
				<font class=f2>Breve descri��o</font><br>
				<font class=f1>Trata-se de um evento em que o jogador tem por objetivo, subir todos os andares de um castelo enorme e destruir a torre de nome Gran Tower que fica no centro do �ltimo andar.
				</p>
				
				<p>
				<font class=f2>Hor�rios</font><br>
				<font class=f1>Clicando no <a href=calendario.php>calend�rio</a>, voc� ter� toda agenda semanal de eventos.</font>
				</p>
				
				<p>
				<font class=f2>Requerimentos</font><br>
				<font class=f1>- N�vel 100 ou mais</font><br>
				<font class=f1>- Apenas 7 membros por guild entram no castelo (jogadores sem guild podem participar)</font>
				</p>

				<p>
				<font class=f2>Recompensa</font><br>
				<font class=f1>O jogador que conquistar o Gran Castle, ganha a special skill de nome Gran Aura, lembrando que se ele estiver em uma guild, todos os membros que ajudaram nesta conquista tamb�m ganhar�o a aura.</font><br>
				</p>
				
				<br>

				<p>
				<font class=f2>Detalhamento</font><br><br>
				<font class=f1>- Nos hor�rios do evento, o jogador fala com o NPC Melkrapo (sub-solo do templo de Solaris) e ele o teleportar� para ilha do Gran Castle.</font><br><br>
				<font class=f1>- Na ilha do castelo, o jogador n�o perde nada ao morrer, caso morra e o evento ainda n�o estiver acabado, pode falar novamente com o NPC e retornar ao castelo.</font><br><br>
				<font class=f1>- O jogador precisa encontrar uma maneira de subir at� o sexto/�ltimo andar do castelo, mas para isso, enfrentar� uma s�rie de obst�culos e os outros jogadores podem tentar elimin�-lo no meio do caminho.</font><br><br>
				<font class=f1>- Se o jogador chegar no �ltimo andar e destruir a Gran Tower, ele toma posse do castelo, e todos os outros jogadores s�o enviados para o templo de Solaris, onde ter�o que falar com o NPC e subir todo castelo novamente.</font><br><br>
				<font class=f1>- A partir do momento que voc� destruir a Gran Tower, voc� obt�m a Gran Aura (fica brilhando) e sua miss�o passa ser a de proteger a Gran Tower.</font><br><br>
				<font class=f1>- Caso outro jogador destrua a torre, voc� perde a Gran Aura e � enviado para o templo de Solaris, e ent�o a batalha para conquistar o castelo recome�a.</font><br><br>
				<font class=f1>- Se voc� destruir a torre e tiver uma guild, todos os membros da guild que estiveram no castelo ajudando, ganhar�o a Gran Aura tamb�m, ent�o voc� poder� contar com a ajuda deles para proteger a Gran Tower.</font><br><br>
				<font class=f1>- Se quando o evento acabar, voc� estiver de posse do castelo, voc� mant�m a Gran Aura at� que ocorra o pr�ximo evento e destruam a Gran Tower. (vale para toda guild)</font><br><br>
				</p>
	</div>
	<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>