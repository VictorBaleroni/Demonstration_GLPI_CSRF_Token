<?php

include('../../../inc/includes.php');

global $CFG_GLPI;

Html::header('Meu Plugin', $_SERVER['PHP_SELF'], 'tools', 'PluginTestpluginMenu');

  echo "Olá, GLPI!";

  echo "<form method='post' action='config.form.php'>";

  echo "<table class='tab_cadre_fixe'>";
  echo "<tr><th colspan='2'>Configuração</th></tr>";

  echo "<tr class='tab_bg_1'>";
  echo Html::input('password', [ 'type' => 'password', 'placeholder' => 'Senha' ]);
  echo "</td>";
  echo "</tr>";
  echo "<tr class='tab_bg_1'>";
  echo "<td>Ativo</td>";
  echo "<td>";
  Dropdown::showYesNo('ativo',1);
  echo "</td>";
  echo "</tr>";

  echo "<tr class='tab_bg_1'>";
  echo "<td colspan='2' class='center'>";
  echo "<input type='submit' class='submit' value='Salvar'>";
  echo "</td>";
  echo "</tr>";

  echo "</table>";

  Html::closeForm();

  //$var = ['test' => 1,
    //'ola' => 0,
    //'manga' => 'oi'
  //];

  //Html::printCleanArray($var);

  $path = $CFG_GLPI['root_doc'] . "/plugins/testplugin/front/processa.php";

  echo '<form method="POST" action="processa.php" >';
    echo Html::input('test', ['placeholder' => 'test123']);
    echo Html::submit('enviar', []);
  Html::closeForm();

    echo '<form method="POST" action="'.$path.'" >';
      echo '<input type="hidden" name="_glpi_csrf_token" value="'.Session::getNewCSRFToken().'">';
      echo '<input type="text" name="test">';
      echo '<input type="submit" value="enviar">';
    echo '</form>';

    echo $CFG_GLPI['root_doc'];

  Html::footer();

