<?php

class PluginTestpluginForm extends CommonGLPI{
  static function getMenuName(){
    return 'Test de Form';
  }

  static function getMenuContent(){
      $menu = [];
      $menu['title'] = 'Test Form Plugin';
      $menu['page']  = '/plugins/testplugin/front/processa.php';
      return $menu;
  }
}
