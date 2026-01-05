<?php

class PluginAuthpluginSender extends CommonGLPI {

   static function getMenuName() {
      return 'Test de Plugin';
   }

   static function getMenuContent() {
      $menu = [];
      $menu['title'] = 'Sender Page';
      $menu['page']  = '/plugins/authplugin/front/send.php';
      return $menu;
   }
}
