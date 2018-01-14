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
			
        <p><font class=f2>1�)</font> <font class=f1>Siga para nossa sess�o de <a href="downloads.php" target="downloads">Downloads</a> e baixe o WinMTR.</font></p>
            
		<p><font class=f2>2�)</font> <font class=f1>Ap�s descompactar o arquivo baixado, haver�o duas pastas, uma para cada tipo de sistema operacional. Voc� n�o precisa saber qual � o seu, � s� testar, pois um ir� rodar normalmente.</font></p>
        <!--<center><img width="*" height="*" src="images/winmtr_img1.jpg"></center>-->

		<p><font class=f2>3�)</font> <font class=f1>Com o WinMTR aberto, digite o IP do servidor que joga do FoxWorld, e em seguida d� "Start".</font></p>
		<!--<center><img width="100%" src="images/winmtr_img2.jpg"></center>

		<p><font class=f1>Abaixo segue uma imagem de um exemplo de teste:</font></p>
		<center><img width="100%" src="images/winmtr_img3.jpg"></center>
		<p><font class=f1>O ret�ngulo verde mostra o n�mero de rotas que o meu computador testou antes de encontrar um caminho para o IP que digitei, no caso, o tracert do IP.</font></p>
			
		<p><font class=f1>O ret�ngulo amarelo mostra a atual comunica��o com o destino, sendo:</font></p>-->
			
		<p><font class=f2>Loss% -</font> <font class=f1>A porcentagem de mensagens perdidas.</font></p>
		<p><font class=f2>Sent -</font> <font class=f1>O n�mero de mensagens enviadas.</font></p>
		<p><font class=f2>Recv -</font> <font class=f1>O n�mero de mensagens que obtiveram resposta.</font></p>
		<p><font class=f2>Best -</font> <font class=f1>A resposta mais r�pida at� agora.</font></p>
		<p><font class=f2>Avrg -</font> <font class=f1>A m�dia de velocidade que as respostas chegam.</font></p>
		<p><font class=f2>Worst -</font> <font class=f1>A resposta mais lenta at� agora. </font></p>
		<p><font class=f2>Last -</font> <font class=f1>O tempo em que chegou a �ltima resposta.</font></p>
			
		<p><font class=f1>O aplicativo n�o pesa nada no computador, ent�o voc� pode utiliz�-lo enquanto joga e saber se est� com lag ou n�o pro FoxWorld, podendo substituir o ping convencional.</font></p>
		<p><font class=obs><b>Caso venha a ser banido por uso de "dash" e est� com um ping baixo, uma contra-prova em que este aplicativo esteja rodando e � mostrado no v�deo, vai ajudar bastante na revis�o de BAN.</b></font></p>
	</div>
	<div class="bot"></div>
</div>

<?php
	include ("footer.inc.php");
?>