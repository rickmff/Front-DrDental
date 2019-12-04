<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<? if ($Header_Endereco) { ?>
    <meta itemprop="streetAddress" content="<?= $Header_Endereco ?>"><? } ?>
    <? if ($Header_Cidade) { ?>
        <meta itemprop="addressLocality" content="<?= $Header_Cidade ?>"><? } ?>
    <? if ($Header_UF) { ?>
        <meta itemprop="addressRegion" content="<?= $Header_UF ?>"><? } ?>
    <? if ($Header_Pais) { ?>
        <meta itemprop="addressCountry" content="<?= $Header_Pais ?>"><? } ?></span>
<? if ($Header_NomeEmpresa) { ?>
    <meta itemprop="name" content="<?= $Header_NomeEmpresa ?>"><? } ?>
<? if ($Header_Site) { ?>
    <meta itemprop="url" content="<?= $Header_Site ?>"><? } ?>
<? if ($Header_Telefone) { ?>
    <meta itemprop="telephone" content="<?= $Header_Telefone ?>"><? } ?>
<? if ($Header_Email) { ?>
    <meta itemprop="email" content="<?= $Header_Email ?>"><? } ?>

<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light nav-header">
                <div class="menu-holder">
                    <a href="./"><img class="logo" src="assets/images/logo.png" alt="<?= $config_nomeCliente ?>"></a>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-icon"><i class="fas fa-bars fa-2x"></i></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <div class="container">
                        <div class="row pb-4 icons-header hidden-mobile">

                            <p><img src="assets/images/icon-clock.png"
                                    alt="Icone do horarios de funcionamento da Agebem">
                                Seg à Sex 09:00 às 19:00 / Sab: 09:00 às 13:00

                                <a class="whats" href="https://wa.me/5515998119909?text=Olá%20Cliente%20Doutor%20Dental"
                                   target="_blank">
                                    <img src="assets/images/whatsapp.png" alt="Icone do whatsapp da Agebem"> (15)
                                    99811-9909</a>

                                <a href="https://www.facebook.com/clinicadoutordental/" target="_blank"> <img src="assets/images/facebook.png"
                                                                            alt="Icone phone da Agebem">
                                    /doutordental</a>

                                <a href="https://www.instagram.com/clinicadoutordental/" target="_blank"> <img src="assets/images/instagram.png"
                                                                            alt="Icone phone da Agebem">
                                    /doutordental</a></p>
                        </div>

                        <ul class="row navbar-nav justify-content-between">
                            <li><a href="quemsomos" class="<?php if ($cur_page == 'quemsomos.php') {
                                    echo 'menu-active';
                                } ?>">Quem somos</a></li>
                            <li><a href="tratamentos" class="<?php if ($cur_page == 'tratamentos.php') {
                                    echo 'menu-active';
                                } ?>">Tratamentos</a></li>
                            <li><a href="blog" class="<?php if ($cur_page == 'blog.php') {
                                    echo 'menu-active';
                                } ?>">Blog</a></li>
                            <li><a href="contato" class="<?php if ($cur_page == 'contato.php') {
                                    echo 'menu-active';
                                } ?>">Contato</a></li>
                            <li class="ml-5"><a href=":javascript" class="btn">Agende uma consulta</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>