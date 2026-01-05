<?php

include('../../../inc/includes.php');

global $CFG_GLPI;

Html::header('Meu Plugin form', $_SERVER['PHP_SELF'], 'tools', 'PluginTestpluginForm');

echo 'hello';

if(isset($_POST['test'])){
  echo 'ta aqui'.$_POST['test'];
}
