<?
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br" itemscope itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <? include('includes/metas.php'); ?>

    <? include('includes/css.php'); ?>
</head>

<body>
<? include('includes/whatsapp-window.php');?>
<? include('includes/formConsulta.php');?>
<? include('includes/header.php'); ?>

<section class="titulo">
    <div class="container">
        <div class="text-center">
            <div class="breadcrumb"><span><a href="./">Home </a> / Blog</span></div>
            <h1>Blog</h1>
        </div>
    </div>
</section>

<section class="blog"> <!--Elemento de formatação-->
    <div class="container">
        <div class="row my-5">
            <? include('includes/blog-divs.php'); ?>
        </div>
        <div class="row my-5">
            <? include('includes/blog-divs.php'); ?>
        </div>
    </div>
</section> <!--Fim do elemento de formatação-->

<? include('includes/footer.php'); ?>

<? include('includes/js.php'); ?>

<? include('includes/analytics.php'); ?>

</body>
</html>