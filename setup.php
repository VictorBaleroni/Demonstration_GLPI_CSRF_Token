<?php

define('PLUGIN_TESTPLUGIN_VERSION', '1.0.0');

function plugin_init_testplugin() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['testplugin'] = true;
   $PLUGIN_HOOKS['menu_toadd']['testplugin'] = [
     'tools' => [ 
      PluginTestpluginMenu::class,
      PluginTestpluginForm::class 
     ]
   ];
   
   //$PLUGIN_HOOKS['add_javascript']['meuplugin'] = 'js/meuplugin.js';
   //$PLUGIN_HOOKS['add_css']['meuplugin'] = 'css/meuplugin.css';
}

function plugin_version_testplugin() {
   return [
      'name'           => 'Plugin Test',
      'version'        => PLUGIN_TESTPLUGIN_VERSION,
      'author'         => 'Victor',
      'license'        => 'GPLv2+',
      'homepage'       => 'https://test.com',
      'minGlpiVersion' => '10.0.17'
   ];
}

function plugin_testplugin_check_prerequisites() {
   return true;
}

function plugin_testplugin_check_config() {
   return true;
}

