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

<section class="quemsomos"> <!--Elemento de formatação-->

    <section class="titulo">
        <div class="container">
            <div class="text-center">
                <div class="breadcrumb"><span><a href="./">Home </a> / Quem Somos</span></div>
                <h1>Clínica Doutor Dental</h1>
            </div>
        </div>
    </section>

    <section class="historia">
        <div class="container">
            <div class="row">
                <div class="desc-sobre">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <h2>Nossa Clínica</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                                    eu
                                    pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                    tincidunt id.
                                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                                    ipsum
                                    quam nec dui.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                    velit, vulputate
                                    eu
                                    pharetra nec, mattis ac neque.
                                    <br>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                                    eu
                                    pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                    tincidunt id.
                                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia
                                    ipsum
                                    quam nec dui.
                                </p>
                            </div>
                            <div class="col-md-7 hidden-mobile">
                                <img src="assets/images/consultorio.png" alt="Clínica Doutor Dental">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="valores">
        <div class="container">
            <div class="row">
                <div class="col-md-4 cor1">
                    <i class="fas fa-5x fa-bullseye"></i>
                    <h2>Missão</h2>
                    <p class="px-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                        eu
                        pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac
                    </p>
                </div>
                <div class="col-md-4 cor2">
                    <i class="fas fa-5x fa-check"></i>
                    <h2>Valores</h2>
                    <p class="px-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                        eu
                        pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac
                    </p>
                </div>
                <div class="col-md-4 cor3">
                    <i class="fas fa-5x fa-eye"></i>
                    <h2>Visão</h2>
                    <p class="px-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                        eu
                        pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="diferenciais">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="row">
                        <div class="col-12">
                            <h2>Diferenciais Doutor Dental</h2>
                        </div>
                        <div class="col-md-3">
                            <i class="fas fa-3x fa-check-circle"></i>
                            <h3>Qualidade</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                            </p>
                        </div>
                        <div class="col-md-3">
                            <i class="fas fa-3x fa-check-circle"></i>
                            <h3>Profissionalismo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                            </p>
                        </div>
                        <div class="col-md-3">
                            <i class="fas fa-3x fa-check-circle"></i>
                            <h3>Ética</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                                eu</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fas fa-3x fa-check-circle"></i>
                            <h3>Completa</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tratamentos">
        <div class="container">
            <div class="row justify-content-center pb-md-5">
                <div class="col-12 col-md-8">
                    <h2>
                        Nosso Tratamentos
                    </h2>
                    <p>Os tratamentos preventivos são exames periódicos que vão diagnosticar com antecedência
                        problemas da saúde bucal, evitando um agravamento posterior.</p>
                    <ul class="row justify-content-between">
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-estetica.png"
                                     alt="Icone tratamento estéticos Doutor Dental">
                                <h3>Estética</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-ortodontia.png"
                                     alt="Icone tratamento ortodonticos Doutor Dental">
                                <h3>Ortodontia</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-clinico.png"
                                     alt="Icone tratamento clinicos Doutor Dental">
                                <h3>Clínico</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-implantes.png"
                                     alt="Icone tratamento de implantes Doutor Dental">
                                <h3>Implantes</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-outros.png"
                                     alt="Icone outros tratamentos  Doutor Dental">
                                <h3>Outros</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</section> <!--Fim do elemento de formatação-->

<? include('includes/footer.php'); ?>

<? include('includes/js.php'); ?>

<? include('includes/analytics.php'); ?>

</body>
</html>