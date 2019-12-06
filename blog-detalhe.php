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

<section class="blog"> <!--Elemento de formatação-->

    <section class="titulo">
        <div class="container">
            <div class="text-center">
                <div class="breadcrumb"><span><a href="./">Home </a> / <a href="blog-detalhe">Blog</a> / Titulo do post</span></div>
                <h1>Blog</h1>
            </div>
        </div>
    </section>

    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Lorem Ipsum</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                        eu
                        pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                        tincidunt id.
                        Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                        ipsum
                        quam nec dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                        velit, vulputate
                        eu
                        pharetra nec, mattis ac neque.</p>
                    <? include('includes/sharethis.php'); ?>
                </div>
                <div class="col-md-7">
                    <a href="assets/images/consultorio.png" class="zoom">
                    <img class="img-fluid" src="assets/images/consultorio.png"
                         alt="Imagem do post da Clinica Doutor Dental">
                    </a>
                </div>
            </div>
            <div class="row">
                <p class="px-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                    eu
                    pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                    tincidunt id.
                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                    ipsum
                    quam nec dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                    velit, vulputate
                    eu
                    pharetra nec, mattis ac neque.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                    eu
                    pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                    tincidunt id.
                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                    ipsum
                    quam nec dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                    velit, vulputate
                    eu
                    pharetra nec, mattis ac neque.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                    eu
                    pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                    tincidunt id.
                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                    ipsum
                    quam nec dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                    velit, vulputate
                    eu
                    pharetra nec, mattis ac neque.
                </p>
            </div>
            <div class="row justify-content-end">
                <a class="btn-voltar" href="blog"><img src="assets/images/voltar.png" alt="Botão voltar para a Home da Doutor Dental"></a>
            </div>
        </div>
    </section>

    <? /* section class="galeria">
        <div class="container">
            <div class="row">
                <div class="sliders">
                    <div class="col-md-12">
                        <div class="row">
                            <? for ($i = 0; $i < 4; $i++) { ?>
                                <div class="col-md-3">
                                    <a href="assets/images/tratamento.jpg" class="zoom">
                                    <img src="assets/images/tratamento.jpg"
                                         alt="Imagem Galeria do post blog Clinica Doutor Dental">
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section */?>

</section> <!--Fim do elemento de formatação-->

<? include('includes/newsletter.php'); ?>

<? include('includes/footer.php'); ?>

<? include('includes/js.php'); ?>

<? include('includes/analytics.php'); ?>

</body>
</html>