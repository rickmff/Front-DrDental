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

<? include('includes/header.php'); ?>

<div class="quemsomos"> <!--Elemento de formatação-->

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="desc-sobre">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h2>Nossa Clínica</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                                    eu
                                    pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                    tincidunt id.
                                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                                    ipsum
                                    quam nec dui.
                                </p>
                            </div>
                            <div class="col-md-6 hidden-mobile">
                                <img src="assets/images/consultorio.png" alt="Clínica Doutor Dental">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!--Fim do elemento de formatação-->

<? include('includes/footer.php'); ?>

<? include('includes/js.php'); ?>

<? include('includes/analytics.php'); ?>

</body>
</html>