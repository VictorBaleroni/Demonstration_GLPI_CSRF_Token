<?php

class PluginAuthpluginReceive extends CommonGLPI{
  static function getMenuName(){
    return 'Test de Form';
  }

  static function getMenuContent(){
      $menu = [];
      $menu['title'] = 'Receiver page';
      $menu['page']  = '/plugins/authplugin/front/rec.php';
      return $menu;
  }
}
