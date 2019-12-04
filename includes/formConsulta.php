<div class="open-formConsulta modal-form" style="display: none;">
    <div class="whats-elem">
        <div class="header-whats">
            <div class="row">
                <img src="assets/images/logo.png" alt="Clinica Doutor Dental" style="transform: scale(0.7);">
                <div class="close-window">
                    <a href="javascript:" class="close-whats"><i class="fas fa-times-circle" style="
    margin-left: 6rem;
    transform: scale(1.5);"></i></a>
                </div>
            </div>

        </div>
        <form class="form-whats" name="formConsultaWindow" id="formConsultaWindow" action="javascript:" method="post"
            onsubmit="enviaConsultaWindow();">
            <div class="form-group col-md-12">
                <label>Nome:</label>
                <input required="" type="text" class="nome form-control" placeholder="Digite seu nome" autocomplete="nome">
            </div>
            <div class="form-group col-md-12">
                <label>Celular:</label>
                <input required="" type="text" class="celular form-control mask_phone" placeholder="Digite seu celular" autocomplete="celular">
            </div>
            <div class="form-group col-md-12">
                <label>E-mail:</label>
                <input type="text" class="email form-control" placeholder="Digite seu e-mail" autocomplete="email">
            </div>
            <div class="form-group col-md-12">
                <label>Produto:</label>
                <select class="produto form-control" required>
                    <option value=""></option>

                    <?php $query = mysql_query("
                        SELECT produto.*, categoria.nome_cat FROM site_tb_produtos produto 
                        LEFT JOIN site_tb_categorias categoria ON categoria.id_cat = produto.ref_cat 
                        ORDER BY categoria.nome_cat, produto.nome_prod
                    "); ?>
                    <?php if (mysql_num_rows($query)): ?>
                        <?php $categoria = ""; $count = 0; ?>
                        <?php while ($produto = mysql_fetch_array($query)): ?>
                            <?php if ($produto["nome_cat"] != $categoria): ?>
                                <?php $categoria = $produto["nome_cat"]; ?>
                                
                                <?php if ($count != 0): ?>
                                    </optgroup>
                                <?php endif; ?>

                                <optgroup label="<?= $categoria ?>">
                            <?php endif; ?>
                            
                            <option value="<?= $produto["nome_prod"] ?>"><?= $produto["nome_prod"] ?></option>

                            <?php $count++; ?>
                        <?php endwhile; ?>
                        </optgroup>
                    <?php endif; ?>
                </select>
            </div>
            <div class="col-md-12 iniciar-conversa">
                <button type="submit" class="btn link-whats col-md-12">AGENDAR CONSULTA</button>
            </div>
        </form>
    </div>
</div>
