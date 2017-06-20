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
    <?$APPLICATION->IncludeComponent(
      "bitrix:menu",
      "",
      Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(""),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "N"
      )
    );?>
  </div>
						