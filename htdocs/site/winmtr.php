<?php
include ("include.inc.php");
$ptitle="WinMTR Tutorial - $cfg[server_name]";
include ("header.inc.php");
?>

<div id="content">
	<div class="top">Fazendo Testes de Ping e Tracert com o WinMTR</div>
	<div class="mid">
		<p><font class=f2>PING -</font> <font class=f1>Trata-se de um teste em que o computador envia uma mensagem para seu destino, e analisa o tempo para receber a resposta.</font></p>
		<p><font class=f2>TRACERT -</font> <font class=f1>Mostra o caminho que o computador seguiu para chegar a seu destino.</font></p>
			
		<p><font class=f1>Vamos ao tutorial:</font><p>
			
        <p><font class=f2>1º)</font> <font class=f1>Siga para nossa sessão de <a href="downloads.php" target="downloads">Downloads</a> e baixe o WinMTR.</font></p>
            
		<p><font class=f2>2º)</font> <font class=f1>Após descompactar o arquivo baixado, haverão duas pastas, uma para cada tipo de sistema operacional. Você não precisa saber qual é o seu, é só testar, pois um irá rodar normalmente.</font></p>
        <!--<center><img width="*" height="*" src="images/winmtr_img1.jpg"></center>-->

		<p><font class=f2>3º)</font> <font class=f1>Com o WinMTR aberto, digite o IP do servidor que joga do FoxWorld, e em seguida dê "Start".</font></p>
		<!--<center><img width="100%" src="images/winmtr_img2.jpg"></center>

		<p><font class=f1>Abaixo segue uma imagem de um exemplo de teste:</font></p>
		<center><img width="100%" src="images/winmtr_img3.jpg"></center>
		<p><font class=f1>O retângulo verde mostra o número de rotas que o meu computador testou antes de encontrar um caminho para o IP que digitei, no caso, o tracert do IP.</font></p>
			
		<p><font class=f1>O retângulo amarelo mostra a atual comunicação com o destino, sendo:</font></p>-->
			
		<p><font class=f2>Loss% -</font> <font class=f1>A porcentagem de mensagens perdidas.</font></p>
		<p><font class=f2>Sent -</font> <font class=f1>O número de mensagens enviadas.</font></p>
		<p><font class=f2>Recv -</font> <font class=f1>O número de mensagens que obtiveram resposta.</font></p>
		<p><font class=f2>Best -</font> <font class=f1>A resposta mais rápida até agora.</font></p>
		<p><font class=f2>Avrg -</font> <font class=f1>A média de velocidade que as respostas chegam.</font></p>
		<p><font class=f2>Worst -</font> <font class=f1>A resposta mais lenta até agora. </font></p>
		<p><font class=f2>Last -</font> <font class=f1>O tempo em que chegou a última resposta.</font></p>
			
		<p><font class=f1>O aplicativo não pesa nada no computador, então você pode utilizá-lo enquanto joga e saber se está com lag ou não pro FoxWorld, podendo substituir o ping convencional.</font></p>
		<p><font class=obs><b>Caso venha a ser banido por uso de "dash" e está com um ping baixo, uma contra-prova em que este aplicativo esteja rodando e é mostrado no vídeo, vai ajudar bastante na revisão de BAN.</b></font></p>
	</div>
	<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>