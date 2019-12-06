<?php
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
<html class="no-js" lang="pt-br" itemscope="" itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <? include('includes/metas.php'); ?>

    <? include('includes/css.php'); ?>

    <link rel="stylesheet" href="assets/css/slider.css" type="text/css">
</head>

<body>
<? include('includes/whatsapp-window.php');?>
<? include('includes/formConsulta.php');?>
<? include('includes/header.php'); ?>

<? include('includes/slider.php'); ?>

<section class="home"> <!--Elemento de formatação-->
    <section class="clinica">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="container row">
                        <img class="mr-md-3" src="assets/images/icon-clinica.png" alt="Icone clinica - Doutor Dental">
                        <h2>Clínica <br> <span>Doutor Dental</span></h2>
                    </div>
                    <p>
                        A clínica Doutor Dental trabalha de forma segmentada na área de odontologia, focada em oferecer
                        o
                        melhor do mercado para cada cliente.
                        <br><br>
                        A proposta é clara: oferecer tratamentos de alta qualidade de forma tranquila, sem traumas.
                    </p>
                    <a href="quemsomos" class="btn my-5">Conheça a clínica</a>
                </div>
                <div class="col-md-7">
                    <div class="sliders">
                        <? for ($i = 0; $i < 3; $i++) { ?>
                            <a href="assets/images/consultorio.png" class="zoom">
                                <img src="assets/images/consultorio.png" alt="Consultorio da Doutor Dental">
                            </a>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tratamentos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <h2>
                        Conheça <span>Nosso Tratamentos</span>
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

    <section class="agendar">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-self-center">
                    <div class="row container mb-4">
                        <img class="mr-3" src="assets/images/icon-agendar.png" alt="Icone clinica - Doutor Dental">
                        <h2>Agende<br><span>Sua Consulta</span></h2>
                    </div>

                    <form class="form-style" name="formContato" id="formContato" action="javascript:" method="post"
                          onsubmit="enviaContato();">
                        <div class="row">
                            <div class="col-md-4 mt-3 pr-md-1">
                                <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato" type="text"
                                                   name="nome" id="nome">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="Nome:">Digite seu Nome:</span>
                                            </label>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3 px-md-1">
                                <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato" type="text"
                                                   name="email" id="email">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="E-mail:">Digite seu Email:</span>
                                            </label>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-4 mt-3 pl-md-1">
                                <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato mask_phone"
                                                   type="text" name="telefone" id="telefone">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="Celular:">Digite seu Celular:</span>
                                            </label>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button class="btn mt-2 w-100">Agendar Consulta</button>
                </div>

                <div class="col-md-5 d-flex justify-content-center">
                    <img class="medica" src="assets/images/medica.png" alt="Oftalmologista Doutora Dental">
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="container row">
                <img class="mr-3" src="assets/images/icon-blog.png" alt="Icone Blog nossas novidades Doutor Dental">
                <h2>Blog<br><span>Nossas Novidades</span></h2>
                <div class="d-inline-block ml-md-auto mt-4"><a class="btn" href="blog">+</a></div>
            </div>
            <div class="row mt-5">
                <? include('includes/blog-divs.php'); ?>
            </div>
        </div>
    </section>

</section>

<? include('includes/footer.php'); ?>

<? include('includes/js.php'); ?>

<? include('includes/analytics.php'); ?>

</body>
</html>