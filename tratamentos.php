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

//====== CONFIGURA PAGINACAO =====//
		$nome_da_pagina = 'produtos/'; // Nome da página que listará resultado
		$itens_por_pagina = 24; //numero de registros por página
		$variavel_pag_url = 'pag'; //nome da variavel na url
		if((isset($_GET[$variavel_pag_url])) && (is_numeric($_GET[$variavel_pag_url]))){
			$pag = $_GET[$variavel_pag_url];
		} else { $pag = '1';}
				
		$tabela_sql = 'site_tb_produtos';
		$where_sql = " ";
		$orderby_sql = 'ORDER BY ord_prod ASC, nome_prod ASC'; 
		
		//=== IDENTIICA CLASSE CSS DA PAGINACAO ==///
		$class_page_ativo = 'num_pag_ativo'; //Colocar nome da classe(CSS) para o link da página atual
		$class_page = 'num_pag'; //Colocar nome da classe(CSS) para o link das paginas
//====== FIM DA CONFIGURAÇÃO PAGINACAO =====//

###### SCRIPT PARA A PAGINAÇÃO ##########
		$inicio = 0;
		if ($pag!=''){
		  $inicio = ($pag - 1) * $itens_por_pagina;
		}

		/* NUMERO DE REGISTROS DA TABELA
		$busca_total = mysql_query("SELECT COUNT(*) as total FROM ".$tabela_sql.' '.$where_sql.' '.$orderby_sql);
		$total = mysql_fetch_array($busca_total); $total = $total['total']; 

		$prox = $pag + 1;
		$ant = $pag - 1;
		$ultima_pag = ceil($total / $itens_por_pagina);
		$penultima = $ultima_pag - 1;  
		$adjacentes = 2;

		$resResult = mysql_query("SELECT * FROM ".$tabela_sql.' '.$where_sql.' '.$orderby_sql." LIMIT $inicio, $itens_por_pagina");
		$ativaProxAnt = true;
		
		/* ativa o botão ANTERIOR
		if ($pag>1 && $ativaProxAnt==true){
			$paginacao = '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ant.'" >&laquo; Anterior</a>';
		}
		
		if ($ultima_pag <= 5){
			for ($i=1; $i< $ultima_pag+1; $i++){
				if ($i == $pag){
					$paginacao .= '<a class="'.$class_page_ativo.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';        
				} else {
					$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';  
				}
			}
		}
		
		if ($ultima_pag > 5){
			if ($pag < 1 + (2 * $adjacentes)){
				for ($i=1; $i< 2 + (2 * $adjacentes); $i++){
					if ($i == $pag){
						$paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
					} else {
						$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
					}
				}
				$paginacao .= '...';
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$penultima.'" >'.$penultima.'</a>';
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ultima_pag.'" >'.$ultima_pag.'</a>';
			} else if($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3){
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'1" >1</a>';
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'2" >2</a> ... ';
				for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++){
					if ($i == $pag){
						$paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
					} else {
						$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
					}
				}
				$paginacao .= '...';
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$penultima.'" >'.$penultima.'</a>';
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ultima_pag.'" >'.$ultima_pag.'</a>';
			} else {
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'1" >1</a>';
				$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'2" >2</a> ... ';
				for ($i = $ultima_pag - (4 + (2 * $adjacentes)); $i <= $ultima_pag; $i++){
					if ($i == $pag){
						$paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
					} else {
						$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
					}
				}
			}
		}
		
		/* ativa o botão PRÓXIMA
		if ($prox <= $ultima_pag && $ultima_pag > 2  && $ativaProxAnt==true){
			$paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$prox.'">pr&oacute;xima &raquo;</a>';
		}
		
		if($penultima==0){$paginacao ='';}

#########################################
			

*/ ?>


<section class="tratamentos-page"> <!--Elemento de formatação-->

    <section class="tratamentos">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="breadcrumb"><span><a href="./">Home </a> / Tratamentos Odontológicos</span></div>
                    <h1>
                        Todos Nosso <br><span>Tratamentos Odontológicos</span>
                    </h1>
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
                                <img src="assets/images/icon-tratamento-ortodontia-blue.png"
                                     alt="Icone tratamento ortodonticos Doutor Dental">
                                <h3>Ortodontia</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-clinico-blue.png"
                                     alt="Icone tratamento clinicos Doutor Dental">
                                <h3>Clínico</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-implantes-blue.png"
                                     alt="Icone tratamento de implantes Doutor Dental">
                                <h3>Implantes</h3>
                            </a>
                        </li>
                        <li><a href="tratamentos">
                                <img src="assets/images/icon-tratamento-outros-blue.png"
                                     alt="Icone outros tratamentos  Doutor Dental">
                                <h3>Outros</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="tratamento">
        <div class="container">
            <h2>Estética</h2>
            <div class="row">
                <? for ($i = 0; $i < 4; $i++) { ?>
                    <div class="col-md-6 my-4">
                        <a href="tratamento-detalhe">
                            <div class="row hover-opacity-6">
                                <div class="col-md-6">
                                    <img src="assets/images/tratamento.jpg" alt="Tratamento Estético Doutor Dental">
                                </div>
                                <div class="col-md-6 m-auto">
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                        velit... </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <? } ?>
            </div>
            <div class="row justify-content-end">
                <a class="btn-voltar" href="./"><img src="assets/images/voltar.png"
                                                     alt="Botão voltar para a Home da Doutor Dental"></a>
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