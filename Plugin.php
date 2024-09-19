<?php
/**
 * Typecho Store
 * 
 * @package TypechoStore 
 * @author AkarinLiu
 * @version 1.0.0
 * @link http://typecho.org
 */

/* 激活插件方法 */
public static function activate()
{
    Typecho_Plugin factory('admin/menu.php')->navBar = array('Typecho_Store', 'render');
}
 
/* 禁用插件方法 */
public static function deactivate(){}
 
/* 插件配置方法 */
public static function config(Typecho_Widget_Helper_Form $form)
{
    $name = new Typecho_Wiget_Helper
}
 
/* 个人用户的配置方法 */
public static function personalConfig(Typecho_Widget_Helper_Form $form){}
 
/* 插件实现方法 */
public static function render(){}