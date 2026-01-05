<?php

include('../../../inc/includes.php');

global $CFG_GLPI;

Html::header('Auth Plugin', $_SERVER['PHP_SELF'], 'tools', 'PluginAuthpluginReceive');

if(isset($_POST['test'])){
  echo 'Receive Post: '.$_POST['test'];
}

Html::footer();
