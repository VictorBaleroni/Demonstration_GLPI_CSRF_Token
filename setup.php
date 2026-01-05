<?php

define('PLUGIN_AUTHPLUGIN_VERSION', '1.0.0');

function plugin_init_authplugin() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['authplugin'] = true;
   $PLUGIN_HOOKS['menu_toadd']['authplugin'] = [
     'tools' => [ 
      PluginAuthpluginReceive::class,
      PluginAuthpluginSender::class 
     ]
   ];
   
   //$PLUGIN_HOOKS['add_javascript']['meuplugin'] = 'js/meuplugin.js';
   //$PLUGIN_HOOKS['add_css']['meuplugin'] = 'css/meuplugin.css';
}

function plugin_version_authplugin() {
   return [
      'name'           => 'Plugin auth',
      'version'        => PLUGIN_AUTHPLUGIN_VERSION,
      'author'         => 'Victor',
      'license'        => 'GPLv2+',
      'homepage'       => 'https://test.com',
      'minGlpiVersion' => '10.0.17'
   ];
}

function plugin_authplugin_check_prerequisites() {
   return true;
}

function plugin_authplugin_check_config() {
   return true;
}
