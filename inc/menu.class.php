<?php

class PluginTestpluginMenu extends CommonGLPI {

   static function getMenuName() {
      return 'Test de Plugin';
   }

   static function getMenuContent() {
      $menu = [];
      $menu['title'] = 'Test Plugin';
      $menu['page']  = '/plugins/testplugin/front/index.php';
      return $menu;
   }
}
