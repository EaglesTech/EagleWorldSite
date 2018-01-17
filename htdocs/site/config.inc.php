<?php 
##################################################
#                 CONFIGURATION                  #
##################################################
# Congratulations on finding configuration file. #
# This is very simililar to config.lua as it     #
# follows same basic principles. Text in between #
# /* */ or starting with # is ignored. Text      #
# values must be 'qouted'. Logical values are    #
# true/false. All statements end with ;          #
##################################################

# Set data directory of your OT server
$cfg['dirdata'] = 'C:/Users/Administrator/Desktop/OT Server FoxWorld/data/';

$cfg['house_file'] = 'world/foxworld-house.xml';

# MySQL server settings
$cfg['SQL_Server'] = 'localhost';
$cfg['SQL_User'] = 'root';
$cfg['SQL_Password'] = '';
$cfg['SQL_Database'] = 'foxworldserver1';

# Must correspond to your OTServ configuration
# Options: plain, md5, sha1
$cfg['password_type'] = 'plain';

# Not currently supported by OTServ
$cfg['password_salt'] = '';

# Skin files can be found in skins folder.
# Each css file represents a skin
$cfg['skin'] = 'dark';

# In case you want to upload skins somewhere else
$cfg['skin_url'] = 'skins/';

# CAPTCHA is used to prevent automated software from flooding server with accounts
$cfg['use_captcha'] = true;

# Secure session will disable 'remember me' box
$cfg['secure_session'] = false;

# Seconds until session expires
$cfg['timeout_session'] = 15*60;

# Maximum number of characters on account
$cfg['maxchars'] = 10;

# Players per highscore page
$cfg['ranks_per_page'] = 50;

# This access and above will not be in highscores
$cfg['ranks_access'] = 2;

# Home page
$cfg['start_page'] = 'notes.php';

# Name shown in window title
$cfg['server_name'] = 'EagleWorld';

# Server ip and port for getting status. 
# In most cases localhost should be used
$cfg['server_ip'] = '54.94.134.67';
$cfg['server_port'] = 7171;

# Allow teleportation to temple?
$cfg['char_repair'] = false;

# Force users to validate their emails when registering?
# For email functions to work, SMTP server must be configured correctly
$cfg['Email_Validate'] = false;

# Allow email based account recovery?
$cfg['Email_Recovery'] = true;

# Enable extension=php_openssl.dll in php.ini in order to use gmail
$cfg['SMTP_Host'] = 'ssl://smtp.gmail.com';
$cfg['SMTP_Port'] = 587;
$cfg['SMTP_Auth'] = true;
$cfg['SMTP_User'] = 'eagleworldserver@gmail.com';
$cfg['SMTP_Password'] = '_PL)OK(IJ';
$cfg['SMTP_From'] = 'eagleworldserver@gmail.com';

# Whether to show skills in character search
$cfg['show_skills'] = true;

# Whether to show deathlist in character search, DevLand only
$cfg['show_deathlist'] = true;

$cfg['skill_names'] = array('fist', 'club', 'sword', 'axe', 'distance', 'shielding', 'fishing');

# Name formating was moved to globals.php

# Banned names
$cfg['invalid_names'] = array('^gm','^god','admin','fuck','gamemaster', 'owner');

# Accounts that are allowed to access admin panel
# Example: array(123123,687687);
$cfg['admin_accounts'] = array(204260,gabriel);

# Listed IPs always allowed to access admin panel, no matter if it has account or not
$cfg['admin_ip'] = array('127.0.0.1');

# Count player as member only if level above. Guilds with more members will be displayed first.
$cfg['guild_level'] = 8;

# Minimum level to create own guild. Cannot be lower than $cfg['guild_level']
$cfg['guild_leader_level'] = 8;

# Please disable guild manager if your server features guild editing
$cfg['guild_manager_enabled'] = true;

# Online status update interval (minutes). Should match statustimeout in your otserv configuration
$cfg['status_update_interval'] = 5;

##################################################
#                 Town Config                    #
##################################################
/*
NOTICE
Town IDs must be correct and match those in your map
*/
# Town names
$cfg['temple'][1]['name'] = 'Solaris';
$cfg['temple'][2]['name'] = 'Asauchi';
$cfg['temple'][3]['name'] = 'Valinor';
$cfg['temple'][4]['name'] = 'Teran';
$cfg['temple'][5]['name'] = 'Nevalia';
$cfg['temple'][6]['name'] = 'Versia';
$cfg['temple'][7]['name'] = 'Bangalore';

# Now set which town(s) you want to use in character making
$cfg['temple'][1]['x'] = 241;
$cfg['temple'][1]['y'] = 134;
$cfg['temple'][1]['z'] = 7;
$cfg['temple'][1]['enabled'] = true;

##################################################
#                 Vocation Config                #
##################################################
/*
Notice:
It's only one item per slot. You need to script special onLogin event in OTServ to add more items to new players.
*/

################# No Vocation ####################
$id = 0;
$cfg['vocations'][$id]['name'] = 'No Vocation';
$cfg['vocations'][$id]['level'] = 1;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 150;
$cfg['vocations'][$id]['mana'] = 0;
$cfg['vocations'][$id]['cap'] = 400;
$cfg['vocations'][$id]['enabled'] = false;

$cfg['vocations'][$id]['look'][0] = 138;
$cfg['vocations'][$id]['look'][1] = 130;

$cfg['vocations'][$id]['skills'][0] = 1;
$cfg['vocations'][$id]['skills'][1] = 1;
$cfg['vocations'][$id]['skills'][2] = 1;
$cfg['vocations'][$id]['skills'][3] = 1;
$cfg['vocations'][$id]['skills'][4] = 1;
$cfg['vocations'][$id]['skills'][5] = 1;
$cfg['vocations'][$id]['skills'][6] = 1;

$cfg['vocations'][$id]['equipment'][3] = 3939;
$cfg['vocations'][$id]['equipment'][4] = 2650;
$cfg['vocations'][$id]['equipment'][5] = 2382;
$cfg['vocations'][$id]['equipment'][10] = 2050;

################# Sorcerer #######################
$id = 1;
$cfg['vocations'][$id]['name'] = 'Sorcerer';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 40;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 138;
$cfg['vocations'][$id]['look'][1] = 130;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

$cfg['vocations'][$id]['equipment'][1] = 2461;
$cfg['vocations'][$id]['equipment'][3] = 1988;
$cfg['vocations'][$id]['equipment'][4] = 2467;
$cfg['vocations'][$id]['equipment'][6] = 2190;
$cfg['vocations'][$id]['equipment'][7] = 2649;
$cfg['vocations'][$id]['equipment'][8] = 2643;

################# Druid ##########################
$id = 2;
$cfg['vocations'][$id]['name'] = 'Druid';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 40;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 138;
$cfg['vocations'][$id]['look'][1] = 130;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

$cfg['vocations'][$id]['equipment'][1] = 2461;
$cfg['vocations'][$id]['equipment'][3] = 1988;
$cfg['vocations'][$id]['equipment'][4] = 2467;
$cfg['vocations'][$id]['equipment'][6] = 2182;
$cfg['vocations'][$id]['equipment'][7] = 2649;
$cfg['vocations'][$id]['equipment'][8] = 2643;

################# Palladin #######################
$id = 3;
$cfg['vocations'][$id]['name'] = 'Paladin';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 40;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 137;
$cfg['vocations'][$id]['look'][1] = 129;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

$cfg['vocations'][$id]['equipment'][1] = 2461;
$cfg['vocations'][$id]['equipment'][3] = 1988;
$cfg['vocations'][$id]['equipment'][4] = 2467;
$cfg['vocations'][$id]['equipment'][6] = 2456;
$cfg['vocations'][$id]['equipment'][7] = 2649;
$cfg['vocations'][$id]['equipment'][8] = 2643;

################# Knight #########################
$id = 4;
$cfg['vocations'][$id]['name'] = 'Knight';
$cfg['vocations'][$id]['level'] = 8;
$cfg['vocations'][$id]['maglevel'] = 0;
$cfg['vocations'][$id]['health'] = 185;
$cfg['vocations'][$id]['mana'] = 40;
$cfg['vocations'][$id]['cap'] = 470;
$cfg['vocations'][$id]['enabled'] = true;

$cfg['vocations'][$id]['look'][0] = 139;
$cfg['vocations'][$id]['look'][1] = 131;

$cfg['vocations'][$id]['skills'][0] = 10;
$cfg['vocations'][$id]['skills'][1] = 10;
$cfg['vocations'][$id]['skills'][2] = 10;
$cfg['vocations'][$id]['skills'][3] = 10;
$cfg['vocations'][$id]['skills'][4] = 10;
$cfg['vocations'][$id]['skills'][5] = 10;
$cfg['vocations'][$id]['skills'][6] = 10;

$cfg['vocations'][$id]['equipment'][1] = 2461;
$cfg['vocations'][$id]['equipment'][2] = 2512;
$cfg['vocations'][$id]['equipment'][3] = 1988;
$cfg['vocations'][$id]['equipment'][4] = 2467;
$cfg['vocations'][$id]['equipment'][6] = 2429;
$cfg['vocations'][$id]['equipment'][5] = 2423;
$cfg['vocations'][$id]['equipment'][7] = 2649;
$cfg['vocations'][$id]['equipment'][8] = 2643;
$cfg['vocations'][$id]['equipment'][9] = 2512;

################# Other IDs ######################

$cfg['vocations'][5]['name'] = 'Master Sorcerer';
$cfg['vocations'][6]['name'] = 'Elder Druid';
$cfg['vocations'][7]['name'] = 'Royal Paladin';
$cfg['vocations'][8]['name'] = 'Elite Knight';
$cfg['vocations'][15]['name'] = 'Supreme Sorcerer';
$cfg['vocations'][16]['name'] = 'Majestic Druid';
$cfg['vocations'][17]['name'] = 'Lord Paladin';
$cfg['vocations'][18]['name'] = 'Monster Knight';
