</td>
<td valign="top">
    <div id="panel">
    <!-- Parceiros -->
   <!--  
    <div id="parceiros">
        <div class="top">Partners</div>
        <div class="mid">
            <a href="https://www.facebook.com/foxworldgames" target="foxworldgames"><img width="130" height="auto" src="images/foxworldgames_imagem.png"><br>Fox World<br>Games</a>
            <br><br>
            <a href="http://www.otserv.com.br" target="OTBR"><img width="130" height="auto" src="images/OTBR.png"><br>OTServ Brasil</a>
            <br><br>
            <a href="http://www.kitsuneworld.com.br/" target="kitsuneworld"><img width="120" height="auto" src="images/kitsuneworld.png"><br>Kitsune World<br>FANSITE</a>
        </div>
    </div>
    <div class="bot"></div>
 -->
    <!-- /Parceiros -->


<!-- Suporte Online Menu -->
<div id="shop">
<div class="top">Suporte Online</div>
<div class="mid">
<div id="forum">
<a href="https://www.messenger.com/t/EagleOpenTibia" target="oldworldmessenger"><img src="images/support.png" height="55" width="140"></a><br>    
</div>
</div>
</div>
<div class="bot"></div>
<!-- /Suporte Online Menu -->


    <!-- Redes Sociais -->
    <div id="redessociais">
        <div class="top">Social Networks</div>
        <div class="mid">

            <table border=0 align="center"><tr><td>
            <!-- Facebook Plugin -->
           <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-like" data-href="https://www.facebook.com/EagleOpenTibia?ref=bookmarks" data-send="true" data-layout="box_count" data-width="60" data-show-faces="false"></div>
            <!-- /Facebook Plugin -->
            </td></tr></table>
            <a href="https://www.facebook.com/EagleOpenTibia/" target="facebook">Facebook</a><br>
            <br>
        </div>
    </div>
    <div class="bot"></div>
    <!-- /Redes Sociais -->



<div id="status">
    <div class="top">Server Status</div>
    <div class="mid">
        <div id="server_state">
            <?php include('status.php');?>
        </div>
    </div>
    <div class="bot"></div>
</div>

<?php 
//Get current time as we did at start
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
//Store end time in a variable
    $tend = $mtime;
//Calculate the difference
    $totaltime = ($tend - $tstart);
//Output result
   // printf ("<!--Page was generated in %f seconds !-->\n", $totaltime); 
?>
</body>
</html>