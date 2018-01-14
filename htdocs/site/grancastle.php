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
				<font class=f2>Breve descrição</font><br>
				<font class=f1>Trata-se de um evento em que o jogador tem por objetivo, subir todos os andares de um castelo enorme e destruir a torre de nome Gran Tower que fica no centro do último andar.
				</p>
				
				<p>
				<font class=f2>Horários</font><br>
				<font class=f1>Clicando no <a href=calendario.php>calendário</a>, você terá toda agenda semanal de eventos.</font>
				</p>
				
				<p>
				<font class=f2>Requerimentos</font><br>
				<font class=f1>- Nível 100 ou mais</font><br>
				<font class=f1>- Apenas 7 membros por guild entram no castelo (jogadores sem guild podem participar)</font>
				</p>

				<p>
				<font class=f2>Recompensa</font><br>
				<font class=f1>O jogador que conquistar o Gran Castle, ganha a special skill de nome Gran Aura, lembrando que se ele estiver em uma guild, todos os membros que ajudaram nesta conquista também ganharão a aura.</font><br>
				</p>
				
				<br>

				<p>
				<font class=f2>Detalhamento</font><br><br>
				<font class=f1>- Nos horários do evento, o jogador fala com o NPC Melkrapo (sub-solo do templo de Solaris) e ele o teleportará para ilha do Gran Castle.</font><br><br>
				<font class=f1>- Na ilha do castelo, o jogador não perde nada ao morrer, caso morra e o evento ainda não estiver acabado, pode falar novamente com o NPC e retornar ao castelo.</font><br><br>
				<font class=f1>- O jogador precisa encontrar uma maneira de subir até o sexto/último andar do castelo, mas para isso, enfrentará uma série de obstáculos e os outros jogadores podem tentar eliminá-lo no meio do caminho.</font><br><br>
				<font class=f1>- Se o jogador chegar no último andar e destruir a Gran Tower, ele toma posse do castelo, e todos os outros jogadores são enviados para o templo de Solaris, onde terão que falar com o NPC e subir todo castelo novamente.</font><br><br>
				<font class=f1>- A partir do momento que você destruir a Gran Tower, você obtém a Gran Aura (fica brilhando) e sua missão passa ser a de proteger a Gran Tower.</font><br><br>
				<font class=f1>- Caso outro jogador destrua a torre, você perde a Gran Aura e é enviado para o templo de Solaris, e então a batalha para conquistar o castelo recomeça.</font><br><br>
				<font class=f1>- Se você destruir a torre e tiver uma guild, todos os membros da guild que estiveram no castelo ajudando, ganharão a Gran Aura também, então você poderá contar com a ajuda deles para proteger a Gran Tower.</font><br><br>
				<font class=f1>- Se quando o evento acabar, você estiver de posse do castelo, você mantém a Gran Aura até que ocorra o próximo evento e destruam a Gran Tower. (vale para toda guild)</font><br><br>
				</p>
	</div>
	<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>