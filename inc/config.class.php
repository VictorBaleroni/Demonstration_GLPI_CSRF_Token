<?php

class PluginTestpluginConfig extends CommonDBTM {

   static function getTypeName($nb = 0) {
      return 'Configuração do Meu Plugin';
   }

   function showForm($ID, $options = []) {
      echo "<form method='post'>";
      //echo "<input type="hidden" value="<?= $token=953845098493 ?>">";
      echo "<input type='submit' value='Salvar'>";
      Html::closeForm();
   }
}

