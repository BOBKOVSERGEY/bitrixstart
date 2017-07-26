<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
  die();
$curPage = $APPLICATION->GetCurPage(true);
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
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jssor.slider-25.2.0.min.js"></script>
  <script type="text/javascript">
    jssor_1_slider_init = function() {

      var jssor_1_SlideoTransitions = [
        [{b:900,d:2000,x:-379,e:{x:7}}],
        [{b:900,d:2000,x:-379,e:{x:7}}],
        [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
      ];

      var jssor_1_options = {
        $AutoPlay: 1,
        $SlideDuration: 800,
        $SlideEasing: $Jease$.$OutQuint,
        $CaptionSliderOptions: {
          $Class: $JssorCaptionSlideo$,
          $Transitions: jssor_1_SlideoTransitions
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
          $Class: $JssorBulletNavigator$
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/
      /*remove responsive code if you don't want the slider scales while window resizing*/
      function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
          refSize = Math.min(refSize, 3000);
          jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
          window.setTimeout(ScaleSlider, 30);
        }
      }
      ScaleSlider();
      $Jssor$.$AddEvent(window, "load", ScaleSlider);
      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      /*#endregion responsive code end*/
    };
  </script>
  <style>
    /* jssor slider loading skin double-tail-spin css */

    .jssorl-004-double-tail-spin img {
      animation-name: jssorl-004-double-tail-spin;
      animation-duration: 1.2s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }


    .jssorb051 .i {position:absolute;cursor:pointer;}
    .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
    .jssorb051 .i:hover .b {fill-opacity:.7;}
    .jssorb051 .iav .b {fill-opacity: 1;}
    .jssorb051 .i.idn {opacity:.3;}

    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
  </style>
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

  <?if ($curPage != SITE_DIR."index.php"):?>
    <div id="navigation" class="container">
      <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1"
      ),
        false,
        Array('HIDE_ICONS' => 'N')
      );?>
    </div>
  <?endif?>