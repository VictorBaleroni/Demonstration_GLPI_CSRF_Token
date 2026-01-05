<?php

file_put_contents(__DIR__ . "/plugin_log.txt", "teste de log\n", FILE_APPEND);

function plugin_testplugin_install() {
   global $DB;

   $query = "
      CREATE TABLE IF NOT EXISTS `glpi_plugin_testplugin_items` (
         `id` INT AUTO_INCREMENT PRIMARY KEY,
         `name` VARCHAR(255) NOT NULL
      ) ENGINE=InnoDB;
   ";

   $DB->query($query);
   return true;
}

function plugin_testplugin_uninstall() {
   global $DB;

   $DB->query("DROP TABLE IF EXISTS `glpi_plugin_testplugin_items`");
   return true;
}
