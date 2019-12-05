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
<html class="no-js" lang="pt-br" itemscope itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <? include('includes/metas.php'); ?>

    <? include('includes/css.php'); ?>
</head>

<body>

<? include('includes/header.php'); ?>

<? /*

if (is_numeric($_GET['ref'])) {
	$resProd = mysql_query("SELECT * FROM site_tb_produtos WHERE id_prod = '".$_GET['ref']."'");
	if (mysql_num_rows($resProd)) {
		$rowProd = mysql_fetch_array($resProd);

		$resFotos = mysql_query("SELECT * FROM site_tb_produtos_fotos WHERE ref = '".$rowProd['id_prod']."' ORDER BY id_foto DESC");
		$resDownloads = mysql_query("SELECT * FROM site_tb_produtos_downloads WHERE ref = '".$rowProd['id_prod']."' ORDER BY id_down DESC");

		$count_hit = $rowProd['hit_prod'];
		$count_hit = $count_hit+1;
		mysql_query("UPDATE site_tb_produtos SET hit_prod='".$count_hit."' WHERE id_prod = '".$rowProd['id_prod']."'");

	} else {
		Redir('produtos/');
	}
} else {
	Redir('produtos/');
}


*/ ?>

<section class="tratamentos-page"> <!--Elemento de formatação-->
    <section class="titulo pt-3">
        <div class="container">
            <div class="text-center">
                <div class="breadcrumb"><span><a href="./">Home </a> / Quem Somos</span></div>
                <h1>Tratamento <br> <span class="text-uppercase">Estético</span></h1>
            </div>
        </div>
    </section>

    <section class="tratamento-detalhe">
        <div class="container">
            <div class="row pl-3">
                <h2>Odontologia Estética</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/tratamento.jpg"
                         alt="Imagem de detalhe do tratamento Estético da Doutor Dental">
                </div>
                <div class="col-md-6">
                    <h3>PROCEDIMENTOS ESTÉTICOS DENTÁRIOS <br>
                        PODEM TRANSFORMAR O SEU SORRISO. <br>
                        CONHEÇA AS MELHORES OPÇÕES PARA VOCÊ! </h3>
                    <p>Tratamentos para melhorar a estética do rosto como um todo. A clínica Doutor Dental conta com
                        alinhadores
                        invisíveis, que são aparelhos ortodônticos feitos em uma forma transparente e plástica, usados
                        para
                        ajustar os dentes.
                        <br><br>
                        Lentes de contato, que são facetas ultrafinas de porcelana, aplicadas sobre o dente para
                        recobrir
                        manchas ou melhorar o formato de dentes desgastados, promovendo boa estética.
                        <br><br>
                        Tratamento com Whitening Lase III, conhecido como “laser de verdade”, que pode ser usado para os
                        seguintes tratamentos:</p>
                    <div class="text-center">
                        <a class="btn" href="javascript:">Agende uma consulta gratuita aqui</a>
                    </div>
                </div>
            </div>
    </section>

</section> <!--Fim do elemento de formatação-->

<? include('includes/newsletter.php'); ?>

<? include('includes/footer.php'); ?>

<? include('includes/js.php'); ?>

<? include('includes/analytics.php'); ?>

</body>
</html>