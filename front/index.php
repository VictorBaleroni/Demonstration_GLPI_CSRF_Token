<?php

include('../../../inc/includes.php');

global $CFG_GLPI;

Html::header('Meu Plugin', $_SERVER['PHP_SELF'], 'tools', 'PluginTestpluginMenu');

  $path = $CFG_GLPI['root_doc'] . "/plugins/testplugin/front/processa.php";
//first method to create form with token csrf
  echo '<form method="POST" action="processa.php" >';
    echo Html::input('test', ['placeholder' => 'test123']);
    echo Html::submit('enviar', []);
  Html::closeForm();

//second method to create form with token csrf
    echo '<form method="POST" action="'.$path.'" >';
      echo '<input type="hidden" name="_glpi_csrf_token" value="'.Session::getNewCSRFToken().'">';
      echo '<input type="text" name="test">';
      echo '<input type="submit" value="enviar">';
    echo '</form>';

  Html::footer();
