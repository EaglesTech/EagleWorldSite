<?php
if($player->storage['30010'] == 0){ echo ''; } // gemas 
  elseif(isset($player->storage['30010']) and ($player->getAttr('vocation') == 7 or $player->getAttr('vocation') == 17)){
	echo '<tr><td width=25><img src="images/habilidades/mugen shiki.bmp" width="25" height="25"></td><td>Mugen Shiki<font class=f2><font color=yellow> = '.$player->storage['30010'].' X</font></font></td>';
}
elseif(isset($player->storage['30010']) and ($player->getAttr('vocation') == 5 or $player->getAttr('vocation') == 15)){
  echo '<tr><td width=25><img src="images/habilidades/zesshou hachimon.bmp" width="25" height="25"></td><td>Zesshou Hachimon<font class=f2><font color=yellow> = '.$player->storage['30010'].' X</font></font></td>';
}
elseif(isset($player->storage['30010']) and ($player->getAttr('vocation') == 6 or $player->getAttr('vocation') == 16)){
  echo '<tr><td width=25><img src="images/habilidades/jukai kousan.bmp" width="25" height="25"></td><td>Jukai Kousan<font class=f2><font color=yellow> = '.$player->storage['30010'].' X</font></font></td>';
}
elseif(isset($player->storage['30010']) and ($player->getAttr('vocation') == 8 or $player->getAttr('vocation') == 18)){
  echo '<tr><td width=25><img src="images/habilidades/yahumuki.bmp" width="25" height="25"></td><td>Yahumuki<font class=f2><font color=yellow> = '.$player->storage['30010'].' X</font></font></td>';
} else { echo ''; }

// sorcerer
if(isset($player->storage['30020'])){ echo '<tr><td width=25><img src="images/habilidades/dobrao de fogo.bmp" width="25" height="25"></td><td>Dobrão de Fogo</td>'; } else { echo ''; }
if(isset($player->storage['30021'])){ echo '<tr><td width=25><img src="images/habilidades/lamina de gelo.bmp" width="25" height="25"></td><td>Lâmina de Gelo</td>'; } else { echo ''; }
if(isset($player->storage['30022'])){ echo '<tr><td width=25><img src="images/conjure/aura wand.bmp" width="25" height="25"></td><td>Aura Wand</td>'; } else { echo ''; }

// druid
if(isset($player->storage['30011'])){ echo '<tr><td width=25><img src="images/habilidades/aurora boreal.bmp" width="25" height="25"></td><td>Aurora Boreal</td>'; } else { echo ''; }
if(isset($player->storage['30023'])){ echo '<tr><td width=25><img src="images/habilidades/furia da natureza.bmp" width="25" height="25"></td><td>Fúria da Natureza</td>'; } else { echo ''; }
if(isset($player->storage['30024'])){ echo '<tr><td width=25><img src="images/habilidades/dominio da terra.bmp" width="25" height="25"></td><td>Domínio da Terra</td>'; } else { echo ''; }
if(isset($player->storage['30025'])){ echo '<tr><td width=25><img src="images/habilidades/chamada do outono.bmp" width="25" height="25"></td><td>Chamada do Outono</td>'; } else { echo ''; }
if(isset($player->storage['30026'])){ echo '<tr><td width=25><img src="images/conjure/aura rod.bmp" width="25" height="25"></td><td>Aura Rod</td>'; } else { echo ''; }

// knight
if(isset($player->storage['30027'])){ echo '<tr><td width=25><img src="images/habilidades/explosao de meteoros.bmp" width="25" height="25"></td><td>Explosão de Meteoros</td>'; } else { echo ''; }
if(isset($player->storage['30028'])){ echo '<tr><td width=25><img src="images/habilidades/tremor fortificado.bmp" width="25" height="25"></td><td>Tremor Fortificado</td>'; } else { echo ''; }
if(isset($player->storage['30029'])){ echo '<tr><td width=25><img src="images/conjure/aura sword.bmp" width="25" height="25"></td><td>Aura Sword</td>'; } else { echo ''; }
if(isset($player->storage['30030'])){ echo '<tr><td width=25><img src="images/conjure/aura axe.bmp" width="25" height="25"></td><td>Aura Axe</td>'; } else { echo ''; }
if(isset($player->storage['30031'])){ echo '<tr><td width=25><img src="images/conjure/aura clube.bmp" width="25" height="25"></td><td>Aura Clube</td>'; } else { echo ''; }

// paladin 
if(isset($player->storage['30032'])){ echo '<tr><td width=25><img src="images/habilidades/sons ocultos.bmp" width="25" height="25"></td><td>Sons Ocultos</td>'; } else { echo ''; }
if(isset($player->storage['30033'])){ echo '<tr><td width=25><img src="images/habilidades/odama rasenshuriken.bmp" width="25" height="25"></td><td>Odama Rasenshuriken</td>'; } else { echo ''; }
if(isset($player->storage['30034'])){ echo '<tr><td width=25><img src="images/habilidades/danca dos ossos.bmp" width="25" height="25"></td><td>Dança dos Ossos</td>'; } else { echo ''; }
if(isset($player->storage['30035'])){ echo '<tr><td width=25><img src="images/conjure/aura bow.bmp" width="25" height="25"></td><td>Aura Bow</td>'; } else { echo ''; }

// hur
if(isset($player->storage['30036'])){ echo '<tr><td width=25><img src="images/habilidades/vento cortante.bmp" width="25" height="25"></td><td>Vento Cortante</td>'; } else { echo ''; }

// Invoking Zeus
if(isset($player->storage['30012'])){ echo '<tr><td width=25><img src="images/habilidades/invoking zeus.bmp" width="25" height="25"></td><td>Invoking Zeus</td>'; } else { echo ''; }

// change corpse
if(isset($player->storage['30039'])){ echo '<tr><td width=25><img src="images/habilidades/change corpse.bmp" width="25" height="25"></td><td>Change Corpse</td>'; } else { echo ''; }

if($player->storage['30038'] == 0){ echo ''; } // anti exiva
  elseif(isset($player->storage['30038'])){
    echo '<tr><td width=25><img src="images/habilidades/anti exiva.bmp" width="25" height="25"></td><td>Anti Exiva<font class=f2><font color=yellow> = '.$player->storage['30038'].' X</font></font></td>';
  } else { echo '';
}

if($player->storage['30037'] == 0){ echo ''; } // king teleport
  elseif(isset($player->storage['30037'])){
    echo '<tr><td width=25><img src="images/habilidades/king teleport.bmp" width="25" height="25"></td><td>King Teleport<font class=f2><font color=yellow> = '.$player->storage['30037'].' X</font></font></td>';
  } else { echo '';
}

if($player->storage['30040'] == 0){ echo ''; } // Morthar Summon
  elseif(isset($player->storage['30040'])){
    echo '<tr><td width=25><img src="images/habilidades/morthar summon.bmp" width="25" height="25"></td><td>Morthar Summon<font class=f2><font color=yellow> = '.$player->storage['30040'].' X</font></font></td>';
  } else { echo '';
}

if($player->storage['30041'] == 0){ echo ''; } // Extreme Paralyze
  elseif(isset($player->storage['30041'])){
    echo '<tr><td width=25><img src="images/habilidades/extreme paralyze.bmp" width="25" height="25"></td><td>Extreme Paralyze<font class=f2><font color=yellow> = '.$player->storage['30041'].' X</font></font></td>';
  } else { echo '';
}

if($player->storage['30042'] == 0){ echo ''; } // Aegis of the Immortal
  elseif(isset($player->storage['30042'])){
    echo '<tr><td width=25><img src="images/habilidades/aegis of the immortal.bmp" width="25" height="25"></td><td>Aegis of the Immortal<font class=f2><font color=yellow> = '.$player->storage['30042'].' X</font></font></td>';
  } else { echo '';
}

// gran aura
if(isset($player->storage['30043'])){ echo '<tr><td width=25><img src="images/habilidades/gran aura.bmp" width="25" height="25"></td><td>Gran Aura</td>'; } else { echo ''; }

if($player->storage['30044'] == 0){ echo ''; } // diablo rain
  elseif(isset($player->storage['30044'])){
    echo '<tr><td width=25><img src="images/habilidades/diablo rain.bmp" width="25" height="25"></td><td>Diablo Rain<font class=f2><font color=yellow> = '.$player->storage['30044'].' X</font></font></td>';
  } else { echo '';
}
