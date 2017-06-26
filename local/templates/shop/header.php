<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
  die();
?>
<!DOCTYPE HTML>
<html>
<head>
  <? $APPLICATION->ShowHead(); ?>
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><? $APPLICATION->ShowTitle(); ?></title>

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
  <!--[if lte IE 8]>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/ie/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css"/>
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ie8.css"/><![endif]-->
  <!--[if lte IE 9]>
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ie9.css"/><![endif]-->
</head>
<body>
<div id="panel">
  <? $APPLICATION->ShowPanel(); ?>
</div>
<div id="page-wrapper">

  <!-- Header -->
  <div id="header">

    <!-- Logo -->
    <h1><a href="/" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

    <!-- Nav -->
    <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
  </div>
						