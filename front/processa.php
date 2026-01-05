<?php

include('../../../inc/includes.php');

global $CFG_GLPI;

Html::header('Meu Plugin form', $_SERVER['PHP_SELF'], 'tools', 'PluginTestpluginForm');

if(isset($_POST['test'])){
  echo 'Receive Post: '.$_POST['test'];
}
